## src/File.php
Создайте класс File, который представляет собой абстракцию над файлом (упрощенная версия SplFileInfo). Реализуйте в этом классе метод read(). Этот метод проверяет можно ли прочитать файл и если да, то читает его, если нет, то бросает исключения двух видов:
  
Если файла не существует – App\Exceptions\NotExistsException  
Если файл нельзя прочитать (но он существует) – App\Exceptions\NotReadableException  
```
<?php

$file = new File('/etc/fstab');
$file->read();
```
## src/Exceptions/FileException.php
Реализуйте класс FileException, который наследуется от Exception. Это базовое исключение для данной библиотеки.

## src/Exceptions/NotReadableException.php, 
## src/Exceptions/NotExistsException.php
Реализуйте классы исключения. Они должны наследоваться от базового класса исключений для данной библиотеки.

Utils
Реализуйте функцию readFiles, которая принимает на вход список файлов и возвращает их содержимое. Если в процессе обработки какого-то файла возникло исключение, то вместо данных этого файла возвращается null.
```
<?php

$values = Utils\readFiles(['/etc/fstab', '/etc/unknown']);
print_r($value);
// ["какие-то данные", null]
```

Подсказки
is_readable
file_exists

File.php:
FileException.php:
NotReadableException.php:
NotExistsException.php:

