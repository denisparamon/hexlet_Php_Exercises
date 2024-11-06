<?php

use Slim\Factory\AppFactory;
use Illuminate\Support\Collection;

require '/composer/vendor/autoload.php';

$companies = App\Generator::generate(100);

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/', function ($request, $response, $args) {
    return $response->write('open something like (you can change id): /companies/5');
});

// BEGIN
$app->get('/companies/{id}', function ($request, $response, array $args) use ($companies) {
    // Получаем id из параметров маршрута
    $id = $args['id'];

    $company = (new Collection($companies))->firstWhere('id', $id);

    if ($company === null) {
        $response->getBody()->write('Page not found');
        return $response->withStatus(404);
    }

    $response->getBody()->write(json_encode($company));
    return $response->withHeader('Content-Type', 'application/json');
});
// END

$app->run();
