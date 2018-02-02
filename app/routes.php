<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use scoopm\Validator;

$app->get("/", function (Request $request, Response $response) {
    // return $response->getBody()->write("Home page.<br> <h1><a href=\"/register\">Register</a></h1>.");
    return $this->view->render($response, 'home.twig.html', []);
})->setName('home');

$app->get("/thanks", function (Request $request, Response $response) {
    return $this->view->render($response, 'thanks.twig.html');
})->setName('thanks');

$app->get("/signup", function (Request $request, Response $response) {
    return $this->view->render($response, 'signup.twig.html');
})->setName('signup');

$app->get("/profile", function (Request $request, Response $response) {
    return $this->view->render($response, 'profile.twig.html');
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
    
    // ABOUT YOU //
    $validator->validateText('firstName');
    $validator->validateText('lastName');
    $validator->validatePhone('phone');
    // $validator->validateEmail('email');
    // $validator->validatePassword('password','confirmPassword');

    // YOUR CAR //
    // $validator->validateImage('licenseImage');
    // $validator->validateImage('registration');
    $validator->validateCar('year', 'make', 'model');
    $validator->validateColor('color');
    $validator->validateText('licenseNumber');

    // INSURANCE INFO //
    $validator->validateText('policyProvider');
    $validator->validateText('policyNumber');
    // $validator->validateImage('insurance');

    // APPLICATION //
    // $validator->validateImage('photo');
    $validator->validateText('ssn');
    // $validator->validateImageOrPDF('w9');
    // $validator->validateDoc('resume');
    // $validator->validateImageOrPDF('fingerprints');
    $validator->validateText('felonies', true);

    // REFERENCES //
    //ref1
    $validator->validateText('ref1Name');
    $validator->validatePhone('ref1Phone');
    $validator->validateEmail('ref1Email');
    //ref2
    $validator->validateText('ref2Name');
    $validator->validatePhone('ref2Phone');
    $validator->validateEmail('ref2Email');

    // var_dump($response_array);
    
    if($validator->hasErrors()) {

        $response_array['errors'] = $validator->getErrors();
        // var_dump($response_array);
        return $this->view->render($response, 'register.twig.html', $response_array);

    } else {

        $firebase = new \Firebase\FirebaseLib('https://scoopm-8975f.firebaseio.com/');

        // We don't want to submit all the fields, so we select the appropriate ones here
        $data = array(
            // ABOUT YOU //
            'firstName' => $response_array['firstName'],
            'lastName'  => $response_array['lastName'],
            'phone'     => $response_array['phone'],
            'email'     => $response_array['email'],
            // 'password'  => password_hash(
            //     $response_array['password'],
            //     PASSWORD_BCRYPT,
            //     array('cost' => 11)),

            // YOUR CAR //
            'year'          => $response_array['year'],
            'make'          => $response_array['make'],
            'model'         => $response_array['model'],
            'color'         =>  $response_array['color'],
            'licenseNumber' => $response_array['model'],

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

            //USER KEY (created during the upload process)
            'userKey' => $response_array['userKey']
        );

        $firebase->set('users/' . $response_array['userID'], $data);

        // return $this->view->render($response, 'new_user.twig.html', array('email'=>$response_array['email'], 'password'=>$response_array['password']));

        return $response->withRedirect($this->router->pathFor('thanks'));
    }
});