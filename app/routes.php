<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use scoopm\Validator;

$app->get("/", function (Request $request, Response $response) {
    $response->getBody()->write("Home page.<br> <h1><a href=\"/register\">Register</a></h1>.");
})->setName('home');

$app->get('/register', function (Request $request, Response $response) {
    return $this->view->render($response, 'register.twig.html');
})->setName("register");

$app->post('/register', function (Request $request, Response $response) {

    $response_array          = $request->getParsedBody();
    $response_array['files'] = $request->getUploadedFiles(); // OBSOLETE NOW WITH FIREBASE STORAGE


    $validator = new Validator($response_array);
    
    // ABOUT YOU //
    $validator->validateText('firstName');
    $validator->validateText('lastName');
    $validator->validatePhone('phone');
    $validator->validateEmail('email');
    $validator->validatePassword('password','confirmPassword');

    // YOUR CAR //
    $validator->validateImage('licenseImage');
    $validator->validateImage('registration');
    $validator->validateCar('year', 'make', 'model');
    $validator->validateColor('color');
    $validator->validateText('licenseNumber');

    // INSURANCE INFO //
    $validator->validateText('policyProvider');
    $validator->validateText('policyNumber');
    $validator->validateImage('insurance');

    // APPLICATION //
    $validator->validateImage('photo');
    $validator->validateText('ssn');
    $validator->validateImageOrPDF('w9');
    $validator->validateDoc('resume');
    $validator->validateImageOrPDF('fingerprints');
    $validator->validateText('felonies');

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
        $response_array['errors'] = $validator->getErrors();
        // var_dump($response_array);
        return $this->view->render($response, 'register.twig.html', $response_array);
    } else {

        $firebase = new \Firebase\FirebaseLib(FIREBASE_URL);

        $data = array(
            "year" => $fields['year'],
            "make" => $fields['make'],
            "model" => $fields['model'],
            "vin"   => $fields['vin'],
            "price" => $fields['price'],
            "photo" => "N/A",
            "key"   => $fields['keyNumber']
        );

        var_dump($firebase->push('users/temp/', $data));    }
    
    
});


// $app->post('/upload', function (Request $request, Response $response) {
//     $file = $request->getUploadedFiles()[0];

//     if ($file == NULL or $file->getSize() == 0) { // there is no file
//             $this->setError($field_name, 'empty');
//         } else { //check the file type
//             switch ($upload_type) {
//                 case 'pdf':
//                     $allowed_types = ['application/pdf'];
//                     break;

//                 case 'doc':
//                     $allowed_types = ['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/msword'];
//                     break;

//                 case 'img':
//                     $allowed_types = ['image/png', 'image/jpg', 'image/gif'];
//                     break;

//                 case 'img/pdf':
//                     $allowed_types = ['image/png', 'image/jpg', 'image/gif', 'application/pdf'];
//                     break;

//                 default:
//                     $allowed_types = []; //empty array
//             }
//             $file_type = $file->getClientMediaType();
//             if (!in_array($file_type, $allowed_types)) { // if it's the wrong file type
//                 $this->setError($field_name,'invalid');
//             } else {
//                 $this->setAsPassed($field_name);
//             }
//         }
//     // return $this->view->render($response, 'register.twig.html');
// };