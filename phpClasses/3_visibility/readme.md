## src\HTMLElement.php
Реализуйте набор методов для работы с классами:  
  
addClass($className) – добавляет класс  
removeClass($className) – удаляет класс  
toggleClass($className) – ставит класс если его не было и убирает если он был  
Эти методы должны обрабатывать свойство 'class' (внутри строка) массива $this->attributes. В процессе реализации вам понадобится постоянно преобразовывать строку классов в массив и обратно. Вынесите эту операцию в отдельные функции и установите им правильный модификатор доступа.
```
<?php

$div = new HTMLDivElement(['class' => 'one two']);
$div->getAttribute('class'); // 'one two'

$div->addClass('small');
$div->getAttribute('class'); // 'one two small'

$div->addClass('small');
$div->getAttribute('class'); // 'one two small'

$div->removeClass('two');
$div->getAttribute('class'); // 'one small'

$div->toggleClass('small');
$div->getAttribute('class'); // 'one'

$div->toggleClass('small');
$div->getAttribute('class'); // 'one small'
```

