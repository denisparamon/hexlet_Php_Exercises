<?php

use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Middleware\MethodOverrideMiddleware;

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
$app->add(MethodOverrideMiddleware::class);

$users = [
    ['name' => 'admin', 'passwordDigest' => hash('sha256', 'secret')],
    ['name' => 'mike', 'passwordDigest' => hash('sha256', 'superpass')],
    ['name' => 'kate', 'passwordDigest' => hash('sha256', 'strongpass')]
];

// Главная страница
$app->get('/', function ($request, $response) {
    $flash = $this->get('flash')->getMessages();
    $user = $_SESSION['user'] ?? null;
    $params = [
        'flash' => $flash,
        'user' => $user
    ];
    return $this->get('renderer')->render($response, 'index.phtml', $params);
});

// Создание сессии
$app->post('/session', function ($request, $response) use ($users) {
    $userData = $request->getParsedBodyParam('user', []);
    $name = $userData['name'] ?? '';
    $password = $userData['password'] ?? '';
    $passwordDigest = hash('sha256', $password);

    foreach ($users as $user) {
        if ($user['name'] === $name && $user['passwordDigest'] === $passwordDigest) {
            $_SESSION['user'] = $user;
            return $response->withHeader('Location', '/')->withStatus(302);
        }
    }

    $this->get('flash')->addMessage('error', 'Wrong password or name');
    return $response->withHeader('Location', '/')->withStatus(302);
});

// Удаление сессии
$app->delete('/session', function ($request, $response) {
    unset($_SESSION['user']);
    return $response->withHeader('Location', '/')->withStatus(302);
});

$app->run();
