-- Создание таблицы events
CREATE TABLE events (
                        id          serial PRIMARY KEY,    -- Идентификатор события, auto-increment
                        name        varchar(50),           -- Название события (до 50 символов)
                        date        date,                  -- Дата проведения события
                        time        time,                  -- Время проведения события
                        location    varchar(100),          -- Место проведения (до 100 символов)
                        description text                   -- Описание события (без ограничения)
);

-- Вставка двух записей в таблицу events
INSERT INTO events (name, date, time, location, description)
VALUES
    ('Tech Conference', '2024-10-01', '10:00:00', 'New York, NY', 'Annual technology conference with various speakers and workshops.'),
    ('Music Festival', '2024-09-20', '18:00:00', 'Los Angeles, CA', 'A festival featuring live performances from various artists.');
