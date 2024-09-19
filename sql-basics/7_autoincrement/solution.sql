-- Создание таблицы article_categories
CREATE TABLE article_categories (
                                    id   BIGINT PRIMARY KEY GENERATED ALWAYS AS IDENTITY,  -- Автогенерируемый первичный ключ
                                    name VARCHAR(255) NOT NULL                             -- Название категории
);

-- Вставка двух записей в таблицу article_categories
INSERT INTO article_categories (name)
VALUES
    ('Technology'),
    ('Health');
