SELECT
    users.first_name,
    users.last_name,
    orders.id AS order_id
FROM users
         LEFT JOIN orders
                   ON users.id = orders.user_id
ORDER BY
    users.last_name ASC,
    orders.id ASC;
