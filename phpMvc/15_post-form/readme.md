src/Validator.php
Реализуйте класс валидатор, который проверяет данные курса. Реализация должна соответствовать интерфейсу ValidatorInterface.

Валидации:

Свойство paid - должно быть заполнено
Свойство title - должно быть заполнено
Если поле не заполнено, то используется сообщение Can't be blank

public/index.php
Реализуйте создание курсов в которое входит два обработчика /courses/new (отображает форму) и /courses создает курс.

Если данные формы валидны, то сохраните курс $repo->save($course) и выполните редирект на страницу со списком курсов /courses. Если данные не валидны, то выведите форму с заполненными полями и сообщения об ошибках.

templates/courses/new.phtml
Выведите форму создания курса со следующими полями:

paid - селект определяющий платность курса (true/false)
title - имя курса
Подсказки
В случае ошибок валидации нужно возвращать код 422
При именовании полей в форме (аттрибут name) используйте схему, которая описана и показана в теории. Все данные формы должны попадать в один массив, именем которого является имя сущности.