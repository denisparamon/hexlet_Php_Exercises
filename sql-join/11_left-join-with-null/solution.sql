SELECT
    students.first_name,
    students.last_name
FROM students
         LEFT JOIN projects
                   ON students.id = projects.student_id
WHERE projects.student_id IS NULL
ORDER BY students.last_name ASC;
