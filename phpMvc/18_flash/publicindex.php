<?php

use DI\Container;
use Slim\Factory\AppFactory;

require '/composer/vendor/autoload.php';

session_start();

$container = new Container();
$container->set('renderer', function () {
    return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
});
$container->set('flash', function () {
    return new \Slim\Flash\Messages();
});

AppFactory::setContainer($container);
$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/', function ($request, $response, $args) {
    $flashMessages = $this->get('flash')->getMessages();
    return $this->get('renderer')->render($response, 'index.phtml', [
        'flashMessages' => $flashMessages
    ]);
});

$app->post('/courses', function ($request, $response, $args) {
    $this->get('flash')->addMessage('info', 'Course Added');

    return $response->withHeader('Location', '/')->withStatus(302);
});

$app->run();
