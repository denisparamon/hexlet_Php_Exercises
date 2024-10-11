CREATE TABLE users (
                       id BIGINT PRIMARY KEY, -- идентификатор пользователя
                       name VARCHAR(255) NOT NULL -- имя пользователя
);

INSERT INTO users (id, name)
VALUES (111, 'Tom');

CREATE TABLE cars (
                      id BIGINT PRIMARY KEY GENERATED ALWAYS AS IDENTITY, -- идентификатор автомобиля
                      user_id BIGINT, -- идентификатор пользователя (внешний ключ)
                      model VARCHAR(255) NOT NULL, -- модель автомобиля
                      CONSTRAINT fk_user FOREIGN KEY (user_id) REFERENCES users (id) -- внешний ключ на таблицу users
);

INSERT INTO cars (user_id, model)
VALUES (111, 'BMW'), (111, 'Toyota');
