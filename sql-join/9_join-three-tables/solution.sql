SELECT
    users.first_name,
    users.last_name,
    products.title AS product,
    orders.price
FROM
    orders
        INNER JOIN users ON orders.user_id = users.id
        INNER JOIN products ON orders.product_id = products.id
WHERE
    DATE_PART('year', orders.created_at) = 2022
ORDER BY
    orders.price DESC;
