-- Таблица goods
CREATE TABLE goods (
                       id SERIAL PRIMARY KEY,
                       name VARCHAR(255) NOT NULL,
                       price DECIMAL(10, 2) NOT NULL
);

-- Таблица orders
CREATE TABLE orders (
                        id SERIAL PRIMARY KEY,
                        user_id INTEGER NOT NULL REFERENCES users(id)
);

-- Таблица order_items
CREATE TABLE order_items (
                             id SERIAL PRIMARY KEY,
                             order_id INTEGER NOT NULL REFERENCES orders(id),
                             good_id INTEGER NOT NULL REFERENCES goods(id),
                             price DECIMAL(10, 2) NOT NULL
);
