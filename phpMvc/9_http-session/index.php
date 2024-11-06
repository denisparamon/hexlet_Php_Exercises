<?php

use Slim\Factory\AppFactory;

require '/composer/vendor/autoload.php';

$companies = App\Generator::generate(100);

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/', function ($request, $response) {
    return $response->write('go to the /companies');
});

// BEGIN
$app->get('/companies', function ($request, $response) use ($companies) {
    // Получаем параметры запроса
    $page = (int) ($request->getQueryParams()['page'] ?? 1);
    $per = (int) ($request->getQueryParams()['per'] ?? 5);

    // Вычисляем индексы для среза
    $offset = ($page - 1) * $per;
    $pagedCompanies = array_slice($companies, $offset, $per);

    // Возвращаем данные в формате JSON
    $response->getBody()->write(json_encode($pagedCompanies));
    return $response->withHeader('Content-Type', 'application/json');
});
// END

$app->run();
