<?php
// template file for creating your own Minify endpoint

// adjust this path as necessary
require '../../vendor/autoload.php';

$app = new \Minify\App(__DIR__);
$app->runServer();
