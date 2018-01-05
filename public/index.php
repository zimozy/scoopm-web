<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require 'session.php';

$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$app = new \Slim\App(['settings' => $config]);

$container = $app->getContainer();

$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('../templates', [
        'cache' => '../templates/cache',
        'auto_reload' => 'true'
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

$app->get("/", function (Request $request, Response $response) {
    $response->getBody()->write("Home page.<br> <a href=\"/register\">Register</a>.");
});

$app->get('/register', function (Request $request, Response $response) {
    if (!isset($_SESSION['step'])) {
        $args = [
            'currentStep' => '1',
            'errors' => null,
            'fields' => null
        ];
    } else {
        // there is session data
        $args = [
            'currentStep' => $_SESSION['currentStep'],
            'errors' => $_SESSION['errors'],
            'fields' => $_SESSION['fields']
        ];
    }
    return $this->view->render($response, 'register.twig.html', $args);
})->setName("register");

$app->post('/register', function (Request $request, Response $response) {

    $args['fields'] = $request->getParsedBody();

    // validate fields and set the errors
    if (is_null($args['fields']['firstName'])) {
        $args['currentStep'] = $args['fields']['currentStep'];
        $args['errors'] = '';
    } else {
        $args['errors'] = '';
        $args['currentStep']++;
    }

    return $this->view->render($response, 'register.twig.html', $args);
});

$app->run();

/*

GET
    get fields from session


POST
    save fields to session

validate fields
    errors array
    step = current
    fields

otherwise...
    no errors arary
    step = next
    fields = empty
\
render view
 */