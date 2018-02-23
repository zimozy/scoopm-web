<?php
use scoopm\Validator;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use ScoopM\CheckrAPI\CheckrCandidate;

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

/*$app->get("/signup", function ($request, $response) {
    return $this->view->render($response, 'signup.twig.html');
})->setName('signup');
*/
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
    // $parsedBody['files'] = $request->getUploadedFiles(); -- not using files anymore

    $validator = new Validator($parsedBody);
    
    $theStates = [ 'AL', 'AK', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'DC', 'FL', 'GA', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VA', 'WA', 'WV', 'WI', 'WY' ];

    //Make sure that Javascript gave us a UID for our database insertion to work
    $validator->validateUID('userID');

    // ABOUT YOU //
    $validator->validateText('firstName');
    $validator->validateText('middleName', true);
    $validator->validateText('lastName');
    $validator->validatePhone('phone');
    $validator->validateText('address');
    $validator->validateText('city');
    $validator->validateSelect('state', $theStates);
    $validator->validateRegex('zip', '/\d{5}/');
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
    $validator->validateRegex('ssn', '/\d{3}-\d{2}-\d{4}/');
    $validator->validateText('w9');
    $validator->validateText('resume');
    $validator->validateText('fingerprints');
    $validator->validateText('felonies', true);
    // $validator->validateAgreement('backgroundCheck');

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

        $firebase = new \Firebase\FirebaseLib('https://scoopm-8975f.firebaseio.com/');

        // We don't want to submit all the fields, so we apply the appropriate ones here
        $data = array(
            // ABOUT YOU //
            'firstName'      => $parsedBody['firstName'],
            'middleName'     => $parsedBody['middleName'],
            'lastName'       => $parsedBody['lastName'],
            'phone'          => $parsedBody['phone'],
            'address'        => $parsedBody['address'],
            'city'           => $parsedBody['city'],
            'state'          => $parsedBody['state'],
            'zip'            => $parsedBody['zip'],
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
            'ssn'            => $parsedBody['ssn'],
            'w9'             => $parsedBody['w9'],
            'resume'         => $parsedBody['resume'],
            'fingerprints'   => $parsedBody['fingerprints'],
            'felonies'       => $parsedBody['felonies'],

            // REFERENCES //
            //ref1
            'ref1Name'       => $parsedBody['ref1Name'],
            'ref1Phone'      => $parsedBody['ref1Phone'],
            'ref1Email'      => $parsedBody['ref1Email'],
            //ref2
            'ref2Name'       => $parsedBody['ref2Name'],
            'ref2Phone'      => $parsedBody['ref2Phone'],
            'ref2Email'      => $parsedBody['ref2Email'],

            //NOW WE CAN FIND THIS WITHOUT HAVING TO BE LOGGED IN (On the Admin page, we can't use auth().currentUser for other users)
            'email'          => $parsedBody['email'],

            'submitted'      => TRUE //their submission is now done
        );

        $firebase->setToken($parsedBody['userIdToken']);
        $firebase->update('users/' . $parsedBody['userID'], $data);

        //CHECKR CANDIDATE CREATION
        $candidateID = (new CheckrCandidate(
                array($parsedBody['firstName'], $parsedBody['middleName'], $parsedBody['lastName'], $parsedBody['email'], $parsedBody['phone'], $parsedBody['zipcode'], $parsedBody['dob'], $parsedBody['ssn'], $parsedBody['licenseNumber'], $parsedBody['licenseState'])
                )
            )->execute()
            ->getID();
        // echo $candidateID;
        return $response->getBody()->write(var_dump($candidateID));
        // $ssn_trace_id                = $reportArray->ssn_trace_id;
        // $sex_offender_search_id      = $reportArray->sex_offender_search_id;
        // $national_criminal_search_id = $reportArray->national_criminal_search_id;
        // $federal_criminal_search_id  = $reportArray->federal_criminal_search_id;
        // $county_criminal_search_ids  = $reportArray->county_criminal_search_ids;
        // $motor_vehicle_report_id     = $reportArray->motor_vehicle_report_id;
        // $state_criminal_search_ids   = $reportArray->state_criminal_search_ids;


        // //3. save to Firebase
        // $firebase->update('users/' . $parsedBody['userID'], array(
        //     "checkrCandidateId" => $candidateId,
        //     "checkrReportId"    => $reportId
        //     // ... more id's?
        // ));

        // var_dump($curl_response);
        // return $response->getBody()->write('----');
        

        // return $response->withRedirect($this->router->pathFor('thanks'));
    }
});
