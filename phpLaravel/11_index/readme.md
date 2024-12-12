# routes/web.php
Реализуйте маршрут article_categories и свяжите его с index экшеном контроллера ArticleCategoryController. Сделайте маршрут именованным.

# app/Http/Controllers/ArticleCategoryController.php
Создайте контроллер (используя artisan) и экшен index. Извлеките из базы все категории и передайте их в шаблон.

Бонусное задание: выведите данные с пейджингом, по 10 элементов на страницу. Выполнение бонусного задания не проверяется тестами

# resources/views/article_category/index.blade.php
Подключите макет
Выведите категории любым удобным способом. Для каждой категории нужно вывести ее название и описание.
resources/views/layouts/app.blade.php
Добавьте ссылку (через хелпер route) ведущую на страницу категорий.