SELECT buyer_id,
       COUNT(id) AS orders_count,
       SUM(price) AS total_price
FROM orders
GROUP BY buyer_id
HAVING COUNT(id) >= 2
ORDER BY total_price DESC;
