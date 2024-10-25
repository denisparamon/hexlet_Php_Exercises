CREATE TABLE brands (
                        id bigint PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
                        name varchar(255),
                        discount int
);

CREATE TABLE cars (
                      id bigint PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
                      brand_id bigint REFERENCES brands (id),
                      model varchar(255),
                      price int
);

INSERT INTO brands (name, discount) VALUES
                                        ('bmw', 5),
                                        ('nissan', 10);

INSERT INTO cars (brand_id, model, price) VALUES
                                              (1, 'm5', 5500000),
                                              (1, 'x5m', 6000000),
                                              (1, 'm1', 2500000),
                                              (2, 'gt-r', 5000000),
                                              (2, 'almera', 5500000);
