## src/HTML.php
Реализуйте функцию stringify($tag), которая принимает на вход тег и возвращает его текстовое представление. Например:

Примеры
```
<?php

use function App\HTML\stringify;

$tag = ['name' => 'hr', 'class' => 'px-3', 'id' => 'myid', 'tagType' => 'single'];
$html = stringify($tag);
// <hr class="px-3" id="myid">


$tag = ['name' => 'div', 'tagType' => 'pair', 'body' => 'text2', 'id' => 'wow'];
$html = stringify($tag);
// <div id="wow">text2</div>
```

Внутри структуры тега есть три специальных ключа:

name - имя тега
tagType - тип тега, определяет его парность (pair) или одиночность (single)
body - тело тега, используется для парных тегов
Все остальное становится атрибутами тега и не зависит от того парный он или нет.

Подсказки
В этой задаче хорошо работает Collect