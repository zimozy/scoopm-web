<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use scoopm\Validator;

$app->get("/", function (Request $request, Response $response) {
    $response->getBody()->write("Home page.<br> <a href=\"/register\">Register</a>.");
});

$app->get('/register', function (Request $request, Response $response) {
    return $this->view->render($response, 'register.twig.html');
})->setName("register");

$app->post('/register', function (Request $request, Response $response) {

    $response_array          = $request->getParsedBody();
    $response_array['files'] = $request->getUploadedFiles();

    // var_dump($request->getUploadedFiles());

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
    $validator->validateSelect('make');
    $validator->validateSelect('model');
    $validator->validateSelect('color');
    $validator->validateText('licenseNumber');

    // INSURANCE INFO //
    // $validator->validateImage('registration');
    // $validator->validateImage('registration');
    $validator->validateImage('registration');

    // APPLICATION //
    $validator->validateText('ssn');
    $validator->validateImage('photo');
    $validator->validatePDF('w9');
    $validator->validateDoc('resume');
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
        return $this->view->render($response, 'register.twig.html', $response_array);
    } else {
        //DB INSERT
    }
    
    
});