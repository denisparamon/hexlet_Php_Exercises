SELECT
    e.full_name AS employee,
    e.salary AS employee_salary,
    m.full_name AS manager,
    m.salary AS manager_salary
FROM employees e
         INNER JOIN employees m
                    ON e.manager_id = m.id
WHERE e.salary > m.salary
ORDER BY e.full_name ASC;
