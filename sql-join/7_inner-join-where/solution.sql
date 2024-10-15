SELECT
    students.first_name,
    students.last_name
FROM students
         INNER JOIN course_members
                    ON students.student_id = course_members.student_id
WHERE course_members.course_name = 'physics'
ORDER BY students.last_name ASC;
