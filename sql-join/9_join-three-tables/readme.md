В этом упражнении мы будем работать с интернет-магазином. У нас есть три таблицы. Таблицы имеют следующую структуру:

Таблица users хранит информацию о покупателях

id	first_name	last_name
1	Alex	Bowman
2	...
Таблица products содержит информацию о товарах нашего магазина

id	title
1	apple
2	pear
Таблица orders хранит информацию о сделанных заказах

id	user_id	product_id	price	created_at
1	1	2	5	2022-10-12

solution.sql
Составьте запрос, который получит всех покупателей, которые сделали заказы в 2022 году. Информация в выборке должна быть представлена в удобной форме. Итоговая таблица должна содержать имя и фамилию покупателя (поля first_name и last_name), название товара (product) и его цену (price). Отсортируйте итоговую таблицу по цене в порядке убывания.