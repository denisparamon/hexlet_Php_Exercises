<?php

use Slim\Factory\AppFactory;
use DI\Container;

require '/composer/vendor/autoload.php';

$container = new Container();
$container->set('renderer', function () {
    return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
});

$app = AppFactory::createFromContainer($container);
$app->addErrorMiddleware(true, true, true);

$repo = new App\PostRepository();

$app->get('/', function ($request, $response) {
    return $response->withHeader('Location', '/posts')->withStatus(302);
});

$app->get('/posts', function ($request, $response) use ($repo) {
    $page = (int) ($request->getQueryParams()['page'] ?? 1);
    $perPage = 5;
    $posts = $repo->all();
    $total = count($posts);

    $offset = ($page - 1) * $perPage;
    $paginatedPosts = array_slice($posts, $offset, $perPage);

    return $this->get('renderer')->render($response, 'posts/index.phtml', [
        'posts' => $paginatedPosts,
        'currentPage' => $page,
        'totalPages' => ceil($total / $perPage)
    ]);
});

$app->get('/posts/{id}', function ($request, $response, $args) use ($repo) {
    $post = $repo->find($args['id']);

    if (!$post) {
        return $response->withStatus(404)->write('Page not found');
    }

    return $this->get('renderer')->render($response, 'posts/show.phtml', [
        'post' => $post
    ]);
});

$app->run();
