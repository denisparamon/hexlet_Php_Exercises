SELECT
    products.title AS product
FROM products
WHERE products.id NOT IN (
    SELECT sales.product_id
    FROM sales
);
