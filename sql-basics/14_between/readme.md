solution.sql
Составьте запрос, который извлекает из таблицы заказов orders имена покупателей (поле buyer), которые приобретали в магазине книги в 2022 году. Наименование товара находится в поле product, дата заказа — в поле created_at. Товар считается книгой, если он содержит в своем наименовании подстроку "book" в любом регистре.

Подсказки
Для решения задачи вам может понадобится функция LOWER(), которая приводит строку к нижнему регистру
Перед тем как записывать решение в файл, откройте консоль REPL и попробуйте выполнить запрос там
Структуру таблицы orders можно посмотреть в файле init.sql