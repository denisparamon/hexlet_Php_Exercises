SELECT
    customers.customer_name,
    orders.product_name
FROM orders
         INNER JOIN customers
                    ON orders.customer_id = customers.id
ORDER BY customers.customer_name ASC;
