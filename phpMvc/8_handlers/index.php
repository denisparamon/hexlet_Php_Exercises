<?php

use Slim\Factory\AppFactory;

require '/composer/vendor/autoload.php';

$faker = \Faker\Factory::create();
$faker->seed(1234);

$domains = [];
for ($i = 0; $i < 10; $i++) {
    $domains[] = $faker->domainName;
}

$phones = [];
for ($i = 0; $i < 10; $i++) {
    $phones[] = $faker->phoneNumber;
}

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

$app->get('/', function ($request, $response) {
    return $response->write('go to the /phones or /domains');
});

// BEGIN
$app->get('/phones', function ($request, $response) use ($phones) {
    $response->getBody()->write(json_encode($phones));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->get('/domains', function ($request, $response) use ($domains) {
    $response->getBody()->write(json_encode($domains));
    return $response->withHeader('Content-Type', 'application/json');
});
// END

$app->run();
