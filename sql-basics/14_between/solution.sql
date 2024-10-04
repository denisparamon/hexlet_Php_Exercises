SELECT buyer
FROM orders
WHERE created_at BETWEEN '2022-01-01' AND '2022-12-31'
  AND LOWER(product) LIKE '%book%';