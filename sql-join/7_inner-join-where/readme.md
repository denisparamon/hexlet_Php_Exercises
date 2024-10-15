В базе данных есть две таблицы – студенты и участники курса. Таблицы имеют следующую структуру:

Таблица students содержит id, имена и фамилии студентов

student_id	first_name	last_name
1	Alex	Bowman
2	...
Таблица course_members содержит список участников курсов

id	student_id	course_name
1	1	physics
2	2	math
Поле course_members.student_id ссылается на поле students.student_id

solution.sql
Составьте запрос, который получит имена и фамилии студентов, которые обучаются на курсе по физике (physics). Отсортируйте выборку по фамилии студентов в прямом порядке