<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \ScoopM\Page;

require '../vendor/autoload.php';
require '../app/debugStatus.php'; //Boolean $debugging

//lets slim set content length header, makes slim behave more predictably
$config['addContentLengthHeader'] = false;

//slim error handling
if ($debugging) $config['displayErrorDetails'] = true;

//APP
$app = new \Slim\App(['settings' => $config]);

//CONTAINER
$container = $app->getContainer();

//Twig view
$container['view'] = function ($container) use ($debugging) {
    //twig settings
    $settings = array('cache' => '../templates/cache');
    if ($debugging) {
        $settings['auto_reload'] = 'true';
        $settings['debug'] = 'true';
    }

    // die(var_dump($debugging));

    //TWIG
    $view = new \Slim\Views\Twig('../templates', $settings);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    $view->addExtension(new Twig_Extension_Debug());

    return $view;
};

//Error Handler
if (!$debugging) {
    $container['errorHandler'] 
    = $container['phpErrorHandler']
    = function ($c) {
        return new Page('errors/500.html.twig', $c, 500);
    };
}

// die(var_dump($container));

//Not Found Handler
$container['notFoundHandler'] = function ($c) {
    return new Page('errors/404.html.twig', $c, 404);
};

//Not Allowed Handler
$container['notAllowedHandler'] = function ($c) {
    return new Page('errors/405.html.twig', $c, 405);
};

//Minify HTML (36% reduction!)
$app->add(new \ScoopM\Middleware\Minifier());

// require '../app/middleware.php';
require '../app/routes.php';

$app->run();