<?php

use Slim\Factory\AppFactory;
use DI\Container;
use App\Validator;
use App\CourseRepository;

require '/composer/vendor/autoload.php';

// Создаем контейнер и настраиваем рендерер шаблонов
$container = new Container();
$container->set('renderer', function () {
    return new \Slim\Views\PhpRenderer(__DIR__ . '/../templates');
});

// Создаем экземпляр приложения Slim
AppFactory::setContainer($container);
$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

// Репозиторий для работы с курсами
$repo = new CourseRepository();

// Маршрут для отображения главной страницы
$app->get('/', function ($request, $response) {
    return $this->get('renderer')->render($response, 'index.phtml');
});

// Маршрут для отображения списка курсов
$app->get('/courses', function ($request, $response) use ($repo) {
    $params = [
        'courses' => $repo->all()
    ];
    return $this->get('renderer')->render($response, 'courses/index.phtml', $params);
});

// Маршрут для отображения формы создания курса
$app->get('/courses/new', function ($request, $response) {
    return $this->get('renderer')->render($response, 'courses/new.phtml');
});

// Маршрут для обработки формы и создания курса
$app->post('/courses', function ($request, $response) use ($repo) {
    $data = $request->getParsedBody()['course'];
    $validator = new Validator();
    $errors = $validator->validate($data);

    if (empty($errors)) {
        $repo->save($data);
        return $response->withHeader('Location', '/courses')->withStatus(302);
    }

    return $this->get('renderer')->render($response, 'courses/new.phtml', [
        'course' => $data,
        'errors' => $errors
    ])->withStatus(422);
});

// Запуск приложения
$app->run();
