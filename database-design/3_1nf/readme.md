solution.sql

1 Создайте таблицу users со следующими полями:
id - первичный ключ
first_name - имя
created_at - дата создания пользователя
2 Добавьте в таблицу users одну запись с именем пользователя Tom.
3 Создайте таблицу orders со следующими полями:
id - первичный ключ
user_first_name - при вставке записи здесь указывается имя пользователя из таблицы users
months - количество покупаемых месяцев (обучение на Хекслете)
created_at - дата создания заказа
4 Добавьте в таблицу orders два заказа на созданного ранее пользователя

Подсказки
Перед тем как писать запросы в файл, зайдите в psql и поэкспериментируйте, как следует