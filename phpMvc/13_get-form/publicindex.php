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

// Реализация обработчика /users
$app->get('/users', function ($request, $response) use ($users) {
    // Получаем значение параметра term из запроса
    $term = $request->getQueryParams()['term'] ?? '';

    // Фильтруем пользователей по началу имени, если параметр term не пуст
    $filteredUsers = array_filter($users, function ($user) use ($term) {
        return empty($term) || stripos($user['firstName'], $term) === 0;
    });

    // Передаем отфильтрованный список пользователей и введенное значение term в шаблон
    return $this->get('renderer')->render($response, 'users/index.phtml', [
        'users' => $filteredUsers,
        'term' => $term,
    ]);
});

$app->run();
