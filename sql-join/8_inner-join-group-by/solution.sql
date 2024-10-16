SELECT
    students.student_id AS id,
    students.name AS student_name,
    ROUND(AVG(ratings.rating), 1) AS average_rating
FROM
    students
        INNER JOIN
    ratings ON students.student_id = ratings.student_id
GROUP BY
    students.student_id, students.name
ORDER BY
    average_rating DESC;
