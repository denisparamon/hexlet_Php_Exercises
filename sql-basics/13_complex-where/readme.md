solution.sql
Составьте запрос, который извлекает из таблицы users данные о пользователях, которые зарегистрировались в июле 2022 года и указали некорректную почту при регистрации. Для этого понадобятся поля:

first_name — имя
email — электронная почта
Будем считать, что корректная почта должна содержать адрес, затем символ @, затем домен, затем точку, затем национальную зону. Например, my_adress@google.com.

Подсказки
Перед тем как записывать решение в файл, откройте консоль REPL и попробуйте выполнить запрос там
Структуру таблицы users можно посмотреть в файле init.sql