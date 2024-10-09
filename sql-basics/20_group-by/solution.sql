SELECT job_title,
       MAX(salary) AS max_salary,
       MIN(salary) AS min_salary
FROM staff
GROUP BY job_title
ORDER BY job_title;
