CREATE TABLE order_details (
                               id SERIAL PRIMARY KEY,
                               order_id BIGINT NOT NULL,
                               product_id BIGINT NOT NULL,
                               quantity INTEGER NOT NULL
);

INSERT INTO order_details (order_id, product_id, quantity) VALUES
                                                               (1, 101, 2),
                                                               (1, 102, 1),
                                                               (2, 101, 3);
