## src\HTML.php
Реализуйте функцию getLinks($tags), которая принимает на вход список тегов, находит среди них теги a, link и img, а затем извлекает ссылки и возвращает список ссылок. Теги подаются на вход в виде массива, где каждый элемент это тег. Тег имеет следующую структуру:

name - имя тега.
href или src - атрибуты. Атрибуты зависят от тега: img - src, a - href, link - href.
<?php

use function App\HTML\getLinks;

$tags = [
    ['name' => 'img', 'src' => 'hexlet.io/assets/logo.png'],
    ['name' => 'div'],
    ['name' => 'link', 'href' => 'hexlet.io/assets/style.css'],
    ['name' => 'h1']
];
$links = getLinks($tags);
// [
//     'hexlet.io/assets/logo.png',
//     'hexlet.io/assets/style.css'
// ];