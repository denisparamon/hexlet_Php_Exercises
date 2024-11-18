<?php

use App\Product;
use App\ProductsRepository;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Middleware\MethodOverrideMiddleware;

require '/composer/vendor/autoload.php';

session_start();

$container = new Container();
$container->set('renderer', function () {
    return new Slim\Views\PhpRenderer(__DIR__ . '/../templates');
});

$container->set('flash', function () {
    return new Slim\Flash\Messages();
});

$container->set(\PDO::class, function () {
    $conn = new \PDO('sqlite:database.sqlite');
    $conn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    return $conn;
});

$initFilePath = implode('/', [dirname(__DIR__), 'init.sql']);
$initSql = file_get_contents($initFilePath);
$container->get(\PDO::class)->exec($initSql);

$app = AppFactory::createFromContainer($container);
$app->add(MethodOverrideMiddleware::class);
$app->addErrorMiddleware(true, true, true);

$router = $app->getRouteCollector()->getRouteParser();

$app->get('/', function ($request, $response) {
    return $this->get('renderer')->render($response, 'index.phtml');
});

$app->get('/products', function ($request, $response) {
    $flash = $this->get('flash')->getMessages();
    $repo = $this->get(ProductsRepository::class);

    $params = [
        'flash' => $flash,
        'products' => $repo->getEntities()
    ];
    return $this->get('renderer')->render($response, 'products/index.phtml', $params);
})->setName('products');


// BEGIN
$app->get('/products/new', function ($request, $response) {
    $params = [
        'product' => new Product(),
        'errors' => []
    ];
    return $this->get('renderer')->render($response, 'products/new.phtml', $params);
});

$app->get('/products/{id}', function ($request, $response, $args) {
    $repo = $this->get(ProductsRepository::class);
    $id = $args['id'];
    $product = $repo->find($id);

    $params = [
        'product' => $product
    ];
    return $this->get('renderer')->render($response, 'products/show.phtml', $params);
})->setName('products');

$app->post('/products', function ($request, $response) use ($router) {
    $repo = $this->get(ProductsRepository::class);
    $productData = $request->getParsedBodyParam('product');

    $validator = new App\Validator();
    $errors = $validator->validate($productData);

    if (count($errors) === 0) {
        $product = Product::fromArray($productData);
        $repo->save($product);
        $this->get('flash')->addMessage('success', 'Product has been created');
        return $response->withRedirect($router->urlFor('products'));
    }

    $params = [
        'product' => Product::fromArray($productData),
        'errors' => $errors
    ];

    return $this->get('renderer')->render($response->withStatus(422), 'products/new.phtml', $params);
});
// END

$app->run();
