<?php

namespace App;

require '/composer/vendor/autoload.php';

use Slim\Factory\AppFactory;

// BEGIN
$app = AppFactory::create();

$app->get('/', function ($request, $response) {
    $response->getBody()->write('Welcome to Hexlet!');
    return $response;
});

$app->run();
// END
