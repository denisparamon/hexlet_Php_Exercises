CREATE TABLE users (
                       id SERIAL PRIMARY KEY,
                       first_name VARCHAR(255) NOT NULL,
                       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (first_name)
VALUES ('Tom');

CREATE TABLE orders (
                        id SERIAL PRIMARY KEY,
                        user_first_name VARCHAR(255) NOT NULL,
                        months INT NOT NULL,
                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO orders (user_first_name, months)
VALUES ('Tom', 3), ('Tom', 6);
