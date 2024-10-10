solution.sql
Напишите запросы, обновляющие таблицу структуры:

CREATE TABLE users (
id bigint,
email varchar(255) NOT NULL,
age integer,
name varchar(255)
);
В структуру:

CREATE TABLE users (
id bigint,
email varchar(255) NOT NULL UNIQUE,
first_name varchar(255) NOT NULL,
created_at timestamp
);
name и first_name - одна и та же колонка.

Подсказки
Добавление ограничения UNIQUE выполняется через команду ADD
Установка ограничения NOT NULL выполняется через команды ALTER COLUMN и SET