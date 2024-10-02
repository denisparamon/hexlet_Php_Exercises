SELECT first_name, email
FROM users
WHERE telephone NOT SIMILAR TO '[0-9]{3}'