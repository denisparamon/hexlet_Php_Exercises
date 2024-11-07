<?php

use Slim\Factory\AppFactory;
use DI\Container;

require '/composer/vendor/autoload.php';

// Список пользователей
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

// Маршрут для списка пользователей
$app->get('/users', function ($request, $response) use ($users) {
    $params = ['users' => $users];
    return $this->get('renderer')->render($response, 'users/index.phtml', $params);
});

// Маршрут для конкретного пользователя по id
$app->get('/users/{id}', function ($request, $response, array $args) use ($users) {
    $id = $args['id'];
    $user = collect($users)->firstWhere('id', $id);

    if ($user === null) {
        return $response->withStatus(404)->write('User not found');
    }

    $params = ['user' => $user];
    return $this->get('renderer')->render($response, 'users/show.phtml', $params);
});

$app->run();
