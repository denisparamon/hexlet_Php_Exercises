SELECT
    students.full_name AS student,
    teachers.full_name AS teacher
FROM students
         FULL OUTER JOIN teachers
                         ON students.group_number = teachers.group_number
ORDER BY students.full_name ASC;
