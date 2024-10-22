SELECT
    students.full_name AS student
FROM students
WHERE NOT EXISTS (
    SELECT 1
    FROM grades
    WHERE grades.student_id = students.id
      AND grades.grade > 80
)
ORDER BY students.full_name ASC;
