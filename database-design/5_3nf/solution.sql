CREATE TABLE countries (
                           id BIGINT PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
                           name VARCHAR(255) NOT NULL
);

CREATE TABLE country_regions (
                                 id BIGINT PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
                                 country_id BIGINT REFERENCES countries(id),
                                 name VARCHAR(255) NOT NULL
);

CREATE TABLE country_region_cities (
                                       id BIGINT PRIMARY KEY GENERATED ALWAYS AS IDENTITY,
                                       country_region_id BIGINT REFERENCES country_regions(id),
                                       name VARCHAR(255) NOT NULL
);

INSERT INTO countries (name) VALUES
    ('Россия');

INSERT INTO country_regions (country_id, name) VALUES
                                                   (1, 'Татарстан'),
                                                   (1, 'Самарская область');

INSERT INTO country_region_cities (country_region_id, name) VALUES
                                                                (1, 'Бугульма'),
                                                                (1, 'Казань'),
                                                                (2, 'Тольятти');
