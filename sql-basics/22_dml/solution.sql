-- Вставка двух студентов в таблицу успеваемости
INSERT INTO students_progress (first_name, last_name, faculty, grade)
VALUES ('Oliver', 'Doblin', 'A', 93), ('Perry', 'Fensome', 'B', 54);

-- Удаление студентов с факультета 'C', у которых оценка ниже 20
DELETE FROM students_progress
WHERE faculty = 'C' AND grade < 20;
