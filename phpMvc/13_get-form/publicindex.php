<?php

use Slim\Factory\AppFactory;
use DI\Container;

use function Symfony\Component\String\s;

require '/composer/vendor/autoload.php';

$users = App\Generator::generate(100);

$container = new Container();
$container->set('renderer', function () {
    return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
});

AppFactory::setContainer($container);
$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/', function ($request, $response) {
    return $this->get('renderer')->render($response, 'index.phtml');
});

// BEGIN (write your solution here)

// END

$app->run();
