SELECT
    products.name AS product,
    categories.name AS category
FROM products
         INNER JOIN categories
                    ON products.category_id = categories.id
ORDER BY categories.name ASC, products.name ASC;
