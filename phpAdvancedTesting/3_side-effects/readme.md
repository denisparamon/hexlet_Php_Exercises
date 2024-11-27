## tests/SolutionTest.php
Протестируйте функцию, которая генерирует случайного пользователя. Пользователь, в данном случае, это ассоциативный массив с тремя ключами:

email
firstName
lastName
Для генерации данных используется библиотека FakerPHP

<?php

print_r(buildUser());
// [
//   'email' => 'Zion.Reichel12@yahoo.com',
//   'firstName' => 'Elizabeth',
//   'lastName' => 'Zulauf',
// ]

// Если какой-то из параметров нужно задать точно, то его можно передать в функцию
print_r(buildUser(['firstName' => 'Petya' ]));
// [
//   'email' => 'Zion.Reichel12@yahoo.com',
//   'firstName' => 'Petya',
//   'lastName' => 'Zulauf',
// ]
Вам нужно протестировать три ситуации:

Что вызов buildUser() возвращает объект нужной структуры.
Что каждый вызов buildUser возвращает объект с другими данными.
Что работает установка свойств через параметры.