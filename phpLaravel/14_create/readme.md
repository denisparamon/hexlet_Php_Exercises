## routes/web.php
Добавьте маршруты для создания категории.

## exercise/resources/views/article_category/index.blade.php
Добавьте ссылку на создание категории.

## app/Http/Controllers/ArticleCategoryController.php
Реализуйте экшены для создания категории. Добавьте следующие валидации:

Имя (name) – обязательно и должно быть максимум 100 знаков.
Описание (description) – обязательно и должно быть минимум 200 знаков.
Состояние (state) – может быть либо draft, либо published.

## resources/views/article_category/create.blade.php
Реализуйте форму создания категории. Добавьте три поля:

Имя
Описание
Состояние
Добавьте вывод ошибок.