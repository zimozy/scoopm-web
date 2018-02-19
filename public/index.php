<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

//Error handling
$config['displayErrorDetails'] = true;

$config['addContentLengthHeader'] = false;

$app = new \Slim\App(['settings' => $config]);

$container = $app->getContainer();

//Twig view
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('../templates', [
        'cache' => '../templates/cache',
        'auto_reload' => 'true',
        'debug' => 'true'
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    $view->addExtension(new Twig_Extension_Debug());

    return $view;
};

//Not Found Handler
$container['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        $response = $c->get('view')->render($response, '404.html.twig');
        $response = $response->withStatus(404);
        return $response;
    };
};

//Minify HTML (36% reduction!)
// $app->add(new \ScoopM\Middleware\Minifier());

require '../app/middleware.php';
require '../app/routes.php';

$app->run();