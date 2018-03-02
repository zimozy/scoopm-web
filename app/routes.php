<?php
use scoopm\Validator;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use ScoopM\CheckrAPI\CheckrCandidate;
use ScoopM\CheckrAPI\CheckrReport;

$app->get("/", function ($request, $response) {
    return $this->view->render($response, 'home.twig.html');
})->setName('home');

// WHEN THEY SIGN-UP, VALIDATE THE CAR INFO
$app->post('/', function($request, $response) {

    $parsedBody = $request->getParsedBody();
    
    $validator = new Validator($parsedBody);
    $validator->validateCar('year', 'make', 'model');

    if ($validator->hasErrors()) {

        //return with error
        return $this->view->render($response, 'home.twig.html', ['invalidCarData' => TRUE]);

    } else {

        //save car info to Firebase DB
        $data = [
            'year' => $parsedBody['year'],
            'make' => $parsedBody['make'],
            'model' => $parsedBody['model']
        ];
        $firebase = new \Firebase\FirebaseLib('https://scoopm-8975f.firebaseio.com/');
        $firebase->setToken($parsedBody['userIdToken']);
        $firebase->set('users/' . $parsedBody['userId'], $data);

        //redirect
        return $response->withRedirect($this->router->pathFor('register'));
        
    }
});

$app->get("/thanks", function ($request, $response) {
    return $this->view->render($response, 'thanks.twig.html');
})->setName('thanks');

$app->get("/application-login", function ($request, $response) {
    return $this->view->render($response, 'application-login.twig.html');
})->setName('application-login');

$app->get("/profile", function ($request, $response) {
    return $response->withRedirect($this->router->pathFor('home'));
    // return $this->view->render($response, 'profile.twig.html');
})->setName('profile');

$app->get("/admin", function ($request, $response) {
    return $this->view->render($response, 'admin.twig.html');
})->setName('admin');

// REGISTER PAGE
$app->get('/register', function ($request, $response) {
    return $this->view->render($response, 'register.twig.html', ['populateForm' => TRUE]);
})->setName("register");

// REGISTER PAGE POST
$app->post('/register', function ($request, $response) {

    $parsedBody = $request->getParsedBody();

    $validator = new Validator($parsedBody);
    
    $theStates = [ 'AL', 'AK', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'DC', 'FL', 'GA', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VA', 'WA', 'WV', 'WI', 'WY' ];

    //Make sure that Javascript gave us a UID for our database insertion to work
    $validator->validateUID('userID');

    // ABOUT YOU //
    $validator->validateText('firstName');
    $validator->validateText('middleName', $parsedBody['noMiddleName']); //optionality determined by the noMiddleName check box
    $validator->validateText('lastName');
    $validator->validatePhone('phone');
    $validator->validateText('address');
    $validator->validateText('city');
    $validator->validateSelect('state', $theStates);
    $validator->validateRegex('zip', '/\d{5}/'); // #####
    $validator->validateRegex('ssn', '/\d{3}-\d{2}-\d{4}/'); // ###-##-####
    $validator->validateRegex('dob', '/(19|20)\d{2}-(0|1)\d-[0-3]\d/'); // YYYY-MM-DD
    $validator->validateText('photo');//this is just the file name (used in re-populating the form)

    // YOUR CAR //
    $validator->validateText('licenseImage');
    $validator->validateText('licenseNumber');
    $validator->validateSelect('licenseState', $theStates);
    $validator->validateText('registration');
    $validator->validateSelect('color',
        ['Beige','Black','Blue','Brown','Burgundy','Charcoal','Gold','Gray','Green','Off White','Orange','Pink','Purple' ,'Red','Silver','Tan','Turquoise','White','Yellow']
    );
    $validator->validateText('licensePlateNumber');

    // INSURANCE INFO //
    $validator->validateText('policyProvider');
    $validator->validateText('policyNumber');
    $validator->validateText('insuranceImage');

    // APPLICATION //
    $validator->validateText('w9');
    $validator->validateText('resume');
    $validator->validateText('fingerprints');
    $validator->validateText('felonies', true);
    //FCRA
    $validator->validateAgreement('fcra');

    // DISCLOSURE //
    $validator->validateAgreement('disclosure');

    // AUTHORIZATION //
    $validator->validateAgreement('copyRequested', true /*optional*/);
    $validator->validateText('signature');

    // REFERENCES //
    //ref1
    $validator->validateText('ref1Name');
    $validator->validatePhone('ref1Phone');
    $validator->validateEmail('ref1Email');
    //ref2
    $validator->validateText('ref2Name');
    $validator->validatePhone('ref2Phone');
    $validator->validateEmail('ref2Email');
    
    if($validator->hasErrors()) {
    // if (true) { // (DEBUGGING)

        $parsedBody['errors'] = $validator->getErrors();
        return $this->view->render($response, 'register.twig.html', $parsedBody);

    } else {

        //CHECKR
        // Might be better to do this during the validation stage, so they can check their license number or any mistakes along with validation mistakes. But we don't want to create multiple candidates if they resubmit the form a couple of times.
        try {
            $candidateData = array(
                'first_name' => $parsedBody['firstName'],
                //middle name later on...
                'last_name' => $parsedBody['lastName'],
                'email' => $parsedBody['email'],
                'phone' => $parsedBody['phone'],
                'zipcode' => $parsedBody['zip'],
                'dob' => $parsedBody['dob'],
                'ssn' => $parsedBody['ssn'],
                'driver_license_number' => $parsedBody['licenseNumber'],
                'driver_license_state' => $parsedBody['licenseState']
            );

            //Determine whether they have a middle name
            if ($parsedBody['noMiddleName']) {
                $candidateData['no_middle_name'] = 'true';
            } else {
                $candidateData['middle_name'] = $parsedBody['middleName'];
            }

            //determine if they requested a consumer report copy
            if ($parsedBody['copyRequested'] == 'on') $candidateData['copy_requested'] = 'true';
            
            $candidate = new CheckrCandidate($candidateData);
            $candidate->executeQuery();
            $candidateID = $candidate->getID();

            $report = $candidate->getReport();
            $report->executeQuery();
            $reportID = $report->getID();
            
        } catch (\Exception $e) {
            if ($e->getCode() === 1) {
                return $this->view->render($response, 'register.twig.html', ['populateForm' => TRUE, 'checkrError' => TRUE]);
            }
        }

        $firebase = new \Firebase\FirebaseLib('https://scoopm-8975f.firebaseio.com/', $parsedBody['userIdToken']);

        // We don't want to submit all the fields, so we apply the appropriate ones here
        $data = array(
            // ABOUT YOU //
            'firstName'      => $parsedBody['firstName'],
            //middle name later
            'lastName'       => $parsedBody['lastName'],
            'phone'          => $parsedBody['phone'],
            'address'        => $parsedBody['address'],
            'city'           => $parsedBody['city'],
            'state'          => $parsedBody['state'],
            'zip'            => $parsedBody['zip'],
            'ssn'            => $parsedBody['ssn'],
            'dob'            => $parsedBody['dob'],
            'photo'          => $parsedBody['photo'],

            // YOUR CAR //
            'licenseImage'   => $parsedBody['licenseImage'],
            'licenseNumber'  => $parsedBody['licenseNumber'],
            'licenseState'   => $parsedBody['licenseState'],
            'registration'   => $parsedBody['registration'],
            'color'          =>  $parsedBody['color'],
            'licensePlateNumber'=> $parsedBody['licensePlateNumber'],

            // INSURANCE INFO //
            'policyProvider' => $parsedBody['policyProvider'],
            'policyNumber'   => $parsedBody['policyNumber'],
            'insuranceImage' => $parsedBody['insuranceImage'],

            // APPLICATION //
            'w9'             => $parsedBody['w9'],
            'resume'         => $parsedBody['resume'],
            'fingerprints'   => $parsedBody['fingerprints'],
            'felonies'       => $parsedBody['felonies'],
            'agreedToFCRA'   => $parsedBody['fcra'] == 'on' ? true : false, 

            // DISCLOSURE //
            'agreedToDisclosure'=> $parsedBody['disclosure'] == 'on' ? true : false, 

            // AUTHORIZATION //
            'copyRequested'  => $parsedBody['copyRequested'] == 'on' ? true : false, 
            'signature'      => $parsedBody['signature'],
            
            //aditional fields for Checkr electronic signature
            'signatureTimestamp'=> time(),
            'signatureIP'    => $_SERVER['REMOTE_ADDR'], //reliable unless using proxy
            'signatureIPFromHeaders'=>$_SERVER['HTTP_X_FORWARDED_FOR'], // can be set by client -- not reliable

            // REFERENCES //
            //ref1
            'ref1Name'       => $parsedBody['ref1Name'],
            'ref1Phone'      => $parsedBody['ref1Phone'],
            'ref1Email'      => $parsedBody['ref1Email'],
            //ref2
            'ref2Name'       => $parsedBody['ref2Name'],
            'ref2Phone'      => $parsedBody['ref2Phone'],
            'ref2Email'      => $parsedBody['ref2Email'],


            //CHECKR
            'checkrCandidateID'=> $candidateID,
            'checkrReportID' => $reportID,
            
            //Required for our admin page to be able to get everybody's emails
            'email'          => $parsedBody['email'],

            //their submission is now done
            'submitted'      => TRUE
        );

        //check middle name status
        if ($parsedBody['noMiddleName']) {
            $data['noMiddleName'] = 'true';
        } else {
            $data['middleName'] = $parsedBody['middleName'];
        }

        $firebase->update('users/' . $parsedBody['userID'], $data);

        return $response->withRedirect($this->router->pathFor('thanks'));
    }
});