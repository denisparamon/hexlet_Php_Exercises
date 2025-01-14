##src\Base.php  
Реализуйте метод isInstanceOf($className), который проверяет что объект принадлежит одному из классов в цепочке наследования.  
```
<?php

// ChildOfChild extends FirstChild extends Base

$obj = new \App\ChildOfChild();
$obj->isInstanceOf('App\Base'); // true
$obj->isInstanceOf('Base'); // false
$obj->isInstanceOf('App\Base'); // true
$obj->isInstanceOf('App\FirstChild'); // true
$obj->isInstanceOf('SomeClass'); // false
```

Подсказки  
get_class – возвращает название класса текущего объекта  
class_parents – возвращает список всех классов родителей  