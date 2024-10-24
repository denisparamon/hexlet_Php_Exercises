DROP TABLE IF EXISTS users;
CREATE TABLE IF NOT EXISTS users (
                                     first_name varchar(255),
    last_name varchar(255),
    created_at timestamp
    );

INSERT INTO users (first_name, last_name, created_at)
VALUES
    ('arya', 'stark', NOW()),
    ('sansa', 'stark', NOW());

DROP TABLE IF EXISTS cars;
CREATE TABLE IF NOT EXISTS cars (
                                    user_first_name VARCHAR(255),
    brand VARCHAR(255),
    model VARCHAR(255)
    );

INSERT INTO cars (user_first_name, brand, model)
VALUES
    ('arya', 'bmw', 'x5'),
    ('arya', 'audi', 'a4'),
    ('sansa', 'mercedes', 'c200'),
    ('sansa', 'toyota', 'camry'),
    ('sansa', 'honda', 'accord');
