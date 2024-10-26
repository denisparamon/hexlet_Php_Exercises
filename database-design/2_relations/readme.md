Это задание не связано напрямую с теорией, но продолжает тематику работы с базой данных.

Все запросы нужно записать в файл, указанный в заголовке. Система проверки сама их выполнит внутри базы данных.

solution.sql
Создайте таблицу cars со следующими полями:
user_first_name - имя пользователя (соответствующее имени в таблице users)
brand - марка машины
model - конкретная модель
Добавьте в таблицу users две записи с именами arya и sansa. Сама таблица добавляется в базу данных автоматически (смотрите файл init.sql)
Добавьте в таблицу cars 5 произвольных записей. Две из них должны содержать пользователя по имени arya, а три других - sansa.

Пример
INSERT INTO users VALUES ('User First Name', 'User Last Name', '1832-10-11');
-- Машина для пользователя добавленного предыдущим запросом. Связь через имя.
INSERT INTO cars VALUES ('User First Name', 'bmw', 'x5');

Подсказки
Если тип поля не указан, то выберите его самостоятельно
Перед тем как писать запросы в файл, зайдите в psql и поэкспериментируйте, как следует
Не бойтесь сломать что-то в базе, всегда можно восстановиться командой make reset в терминале