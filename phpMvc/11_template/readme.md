public/index.php
Реализуйте обработчики для списка пользователей /users и вывода конкретного пользователя /users/{id}. Список пользователей генерируется в начале скрипта.

templates/users/index.phtml
Реализуйте вывод списка пользователей (/users) со ссылкой на просмотр каждого из них. Список пользователей выведите в табличном виде с полями: id и firstName. firstName сделайте ссылкой на страницу конкретного пользователя.

templates/users/show.phtml
Реализуйте вывод всех полей пользователя по маршруту /users/{id}. Вывод организуйте как вам удобно (проще всего использовать таблицу).