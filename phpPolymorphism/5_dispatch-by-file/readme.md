## src\DatabaseConfigLoader.php
Реализуйте класс DatabaseConfigLoader, который отвечает за загрузку конфигурации для базы данных. У класса следующий интерфейс:  
  
Конструктор - принимает на вход путь, по которому нужно искать конфигурацию  
load($env) - метод, который грузит конфигурацию для конкретной среды окружения. Она загружает файл database.{$env}.json, парсит его и возвращает результат наружу.  

<?php  
  
$loader = new DatabaseConfigLoader(__DIR__ . '/fixtures');  
$config = $loader->load('production'); // loading database.production.json  
// [  
//     'host' => 'google.com',  
//     'username' => 'postgres'  
// ];  
В этом классе и конфигурации реализована поддержка расширения. Если в загружаемом конфиге есть ключ extend, то нужно загрузить конфигурацию с этим именем (он соответствует $env). Далее конфигурации мержатся между собой так, что приоритет имеет загруженный раньше. Более подробный пример посмотрите в тестах.