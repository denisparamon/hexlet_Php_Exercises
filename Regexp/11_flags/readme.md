## solution
Напишите регулярное выражение, которое находит все подстроки python, заключенные в двойные " или одинарные ' кавычки. При этом вам нужно найти все варианты вне зависимости от регистра (Python, pytHon, pYThon и так далее).

Если будете использовать флаги, укажите их отдельной строкой:

yourRegexp # Здесь напишите регулярное выражение
mu # Здесь укажите необходимые флаги
Пример решения:

(\S+)@([a-z0-9.]+)
is