-- Переименование колонки name в first_name
ALTER TABLE users
    RENAME COLUMN name TO first_name;

-- Добавление колонки created_at
ALTER TABLE users
    ADD COLUMN created_at TIMESTAMP;

-- Установка ограничения NOT NULL для колонки first_name
ALTER TABLE users
    ALTER COLUMN first_name SET NOT NULL;

-- Добавление уникального ограничения для колонки email
ALTER TABLE users
    ADD CONSTRAINT unique_email UNIQUE (email);

-- Удаление колонки age
ALTER TABLE users
DROP COLUMN age;
