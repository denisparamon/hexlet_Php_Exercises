## src\HTMLPairElement.php  
Реализуйте класс HTMLPairElement (наследуется от HTMLElement), который отвечает за генерацию представления парных элементов и работу с телом. Реализуйте следующий интерфейс:
```
<?php
public function __toString();
public function getTextContent();
public function setTextContent(string $body);
```

## src\HTMLDivElement.php  
Реализуйте класс HTMLDivElement, который описывает собой парный тег <div>.  
```
<?php

$div = new HTMLDivElement(['name' => 'div', 'data-toggle' => 'true']);
$div->setTextContent('Body');
echo $div; // '<div name="div" data-toggle="true">Body</div>'
```