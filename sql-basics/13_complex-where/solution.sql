SELECT first_name, email
FROM users
WHERE created_at BETWEEN '2022-07-01' AND '2022-07-31'
  AND email NOT SIMILAR TO '%@[a-zA-Z0-9]+\.[a-z]{2,}';
