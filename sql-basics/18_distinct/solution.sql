SELECT DISTINCT ON (product) product, price
FROM orders
ORDER BY product DESC, price DESC;
