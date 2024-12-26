## src/actions/Users.php  
Реализуйте фильтрацию пользователей в методе index.  
  
На вход в этот метод приходит массив, сформированный особым образом. Внутри он анализируется и строится запрос, который возвращает наружу отфильтрованный список пользователей. Все данные в этом массиве не обязательные. В самом простом случае он может прийти пустым. Ниже более полный пример:
  
<?php  
  
$params = [  
  'q' => [  
    'email' => 'lala@ehu.com',  
    'first_name' => 'Mike'  
  ],  
  's' => 'id:desc'  
];  
  
s – сортировка. В значении строка, в которой соединены двоеточием поле, по которому идет сортировка и направление сортировки (asc или desc).  
q – ассоциативный массив. Ключ – имя поля, значение – точное значение в базе данных. Поиск значений в q должен происходить по условию OR (orWhere).  
  
Подсказки  
Начать цепочку запросов можно с помощью статического метода query() модели User.  
Примеры смотрите в тестах.  