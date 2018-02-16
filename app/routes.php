<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use scoopm\Validator;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$app->get("/", function (Request $request, Response $response) {
    // return $response->getBody()->write("Home page.<br> <h1><a href=\"/register\">Register</a></h1>.");
    return $this->view->render($response, 'home.twig.html', []);
})->setName('home');

$app->get("/thanks", function (Request $request, Response $response) {
    return $this->view->render($response, 'thanks.twig.html');
})->setName('thanks');

$app->get("/application-login", function (Request $request, Response $response) {
    return $this->view->render($response, 'application-login.twig.html');
})->setName('application-login');

/*$app->get("/signup", function (Request $request, Response $response) {
    return $this->view->render($response, 'signup.twig.html');
})->setName('signup');
*/
$app->get("/profile", function (Request $request, Response $response) {
    return $response->withRedirect($this->router->pathFor('home'));
    // return $this->view->render($response, 'profile.twig.html');
})->setName('profile');

$app->get("/admin", function (Request $request, Response $response) {
    return $this->view->render($response, 'admin.twig.html');
})->setName('admin');

$app->get('/register', function (Request $request, Response $response) {
    return $this->view->render($response, 'register.twig.html');
})->setName("register");

$app->post('/register', function (Request $request, Response $response) {

    $response_array          = $request->getParsedBody();
    // $response_array['files'] = $request->getUploadedFiles(); -- not using files anymore

    $validator = new Validator($response_array);
    
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
    // $validator->validateEmail('email');
    // $validator->validatePassword('password','confirmPassword');

    // YOUR CAR //
    // $validator->validateImage('licenseImage');
    // $validator->validateImage('registration');
    $validator->validateText('licenseNumber');
    $validator->validateSelect('licenseState', $theStates);
    $validator->validateCar('year', 'make', 'model');
    $validator->validateSelect('color',
        ['Beige','Black','Blue','Brown','Burgundy','Charcoal','Gold','Gray','Green','Off White','Orange','Pink','Purple' ,'Red','Silver','Tan','Turquoise','White','Yellow']
    );
    $validator->validateText('licensePlateNumber');

    // INSURANCE INFO //
    $validator->validateText('policyProvider');
    $validator->validateText('policyNumber');
    // $validator->validateImage('insurance');

    // APPLICATION //
    // $validator->validateImage('photo');
    $validator->validateRegex('ssn', '/\d{3}-\d{2}-\d{4}/');
    // $validator->validateImageOrPDF('w9');
    // $validator->validateDoc('resume');
    // $validator->validateImageOrPDF('fingerprints');
    $validator->validateText('felonies', true);
    $validator->validateAgreement('backgroundCheck');

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
        // if (true) {

        $response_array['errors'] = $validator->getErrors();
        $response_array['resubmitting'] = true;

        return $this->view->render($response, 'register.twig.html', $response_array);

    } else {

        $firebase = new \Firebase\FirebaseLib('https://scoopm-8975f.firebaseio.com/');

        // We don't want to submit all the fields, so we select the appropriate ones here
        $data = array(
            // ABOUT YOU //
            'firstName' => $response_array['firstName'],
            'middleName'=> $response_array['middleName'],
            'lastName'  => $response_array['lastName'],
            'phone'     => $response_array['phone'],
            'address'   => $response_array['address'],
            'city'     => $response_array['city'],
            'state'     => $response_array['state'],
            'zip'       => $response_array['zip'],
            'dob'       => $response_array['dob'],

            // YOUR CAR //
            'licenseNumber' => $response_array['licenseNumber'],
            'licenseState'  => $response_array['licenseState'],
            'year'          => $response_array['year'],
            'make'          => $response_array['make'],
            'model'         => $response_array['model'],
            'color'         =>  $response_array['color'],
            'licensePlateNumber'=> $response_array['licensePlateNumber'],

            // INSURANCE INFO //
            'policyProvider' => $response_array['policyProvider'],
            'policyNumber'   => $response_array['policyNumber'],

            // APPLICATION //
            'ssn'      => $response_array['ssn'],
            'felonies' => $response_array['felonies'],

            // REFERENCES //
            //ref1
            'ref1Name'  => $response_array['ref1Name'],
            'ref1Phone' => $response_array['ref1Phone'],
            'ref1Email' => $response_array['ref1Email'],
            //ref2
            'ref2Name'  => $response_array['ref2Name'],
            'ref2Phone' => $response_array['ref2Phone'],
            'ref2Email' => $response_array['ref2Email'],

            //NOW WE CAN FIND THIS WITHOUT HAVING TO BE LOGGED IN (Cant use auth().currentUser for other users)
            'email' => $response_array['email']
        );

        $firebase->setToken($response_array['userIdToken']);
        $firebase->set('users/' . $response_array['userID'], $data);

        // return $this->view->render($response, 'new_user.twig.html', array('email'=>$response_array['email'], 'password'=>$response_array['password']));

        /*
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.checkr.com/v1/candidates',
            CURLOPT_POST => 1,
            CURLOPT_USERNAME => '83ebeabdec09f6670863766f792ead24d61fe3f9',
            CURLOPT_POSTFIELDS => array(
                'first_name' => $response_array['firstName'],
                'middle_name' => $response_array['middleName'],
                'last_name' => $response_array['lastName'],
                'email' => $response_array['email'],
                'phone' => $response_array['phone'],
                'zipcode' => $response_array['zipcode'],
                'dob' => $response_array['dob'],
                'ssn' => $response_array['ssn'],
                'driver_license_number' => $response_array['licenseNumber'],
                'driver_license_state' => $response_array['licenseState']
            ),
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FAILONERROR => true, //if we get a 404, for example
            CURLOPT_USERAGENT => 'ScoopM REST'
        ));
        $curl_response = curl_exec($curl);
        curl_close($curl);

        //1. get candidate id
        $candidateArray = array();
        $candidateArray = json_decode($curl_response);
        $candidateId = $candidateArray->id;

        //2. request report using candidate id
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.checkr.com/v1/reports',
            CURLOPT_POST => 1,
            CURLOPT_USERNAME => '83ebeabdec09f6670863766f792ead24d61fe3f9',
            CURLOPT_POSTFIELDS => array(
                "packages" => "driver_pro",
                "candidate" => $candidateId
            ),
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FAILONERROR => true, //if we get a 404, for example
            CURLOPT_USERAGENT => 'ScoopM REST'
        ));
        $curl_response = curl_exec($curl);
        curl_close($curl);

        $reportArray = array();
        $reportArray = json_decode($curl_response);
        $reportId = $reportArray->id;
        // $ssn_trace_id                = $reportArray->ssn_trace_id;
        // $sex_offender_search_id      = $reportArray->sex_offender_search_id;
        // $national_criminal_search_id = $reportArray->national_criminal_search_id;
        // $federal_criminal_search_id  = $reportArray->federal_criminal_search_id;
        // $county_criminal_search_ids  = $reportArray->county_criminal_search_ids;
        // $motor_vehicle_report_id     = $reportArray->motor_vehicle_report_id;
        // $state_criminal_search_ids   = $reportArray->state_criminal_search_ids;


        //3. save to Firebase
        $firebase->update('users/' . $response_array['userID'], array(
            "checkrCandidateId" => $candidateId,
            "checkrReportId"    => $reportId
            // ... more id's?
        ));

        // var_dump($curl_response);
        // return $response->getBody()->write('----');
        */

        return $response->withRedirect($this->router->pathFor('thanks'));
    }
});
