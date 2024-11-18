<?php

use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Middleware\MethodOverrideMiddleware;

require '/composer/vendor/autoload.php';

$container = new Container();
$container->set('renderer', function () {
    return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
});

AppFactory::setContainer($container);
$app = AppFactory::create();
$app->add(MethodOverrideMiddleware::class);
$app->addErrorMiddleware(true, true, true);

$app->get('/', function ($request, $response) {
    $cart = json_decode($request->getCookieParam('cart', json_encode([])), true);
    $params = [
        'cart' => $cart
    ];
    return $this->get('renderer')->render($response, 'index.phtml', $params);
});

$app->post('/cart-items', function ($request, $response) {
    // Получаем текущую корзину из куков
    $cart = json_decode($request->getCookieParam('cart', json_encode([])), true);

    // Получаем данные о товаре из запроса
    $item = $request->getParsedBodyParam('item');
    if (!isset($item['id'], $item['name'])) {
        return $response->withStatus(400)->write('Invalid item data');
    }

    // Обновляем количество товара в корзине
    $id = $item['id'];
    if (isset($cart[$id])) {
        $cart[$id]['count'] += 1;
    } else {
        $cart[$id] = ['id' => $id, 'name' => $item['name'], 'count' => 1];
    }

    // Сериализуем корзину и записываем в куки
    $encodedCart = json_encode($cart);
    return $response
        ->withHeader('Set-Cookie', "cart={$encodedCart}; Path=/; HttpOnly")
        ->withHeader('Location', '/')
        ->withStatus(302);
});

$app->delete('/cart-items', function ($request, $response) {
    // Очищаем корзину, удаляя куки
    return $response
        ->withHeader('Set-Cookie', "cart=; Path=/; HttpOnly; Expires=Thu, 01 Jan 1970 00:00:00 GMT")
        ->withHeader('Location', '/')
        ->withStatus(302);
});


$app->run();
