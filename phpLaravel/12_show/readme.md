В этом упражнении нужное реализовать страницу категории, на которой выводится список статей этой категории.  

### routes/web.php  
Реализуйте маршрут article_categories/{id} и свяжите его с show экшеном контроллера ArticleCategoryController. Сделайте маршрут именованным.  
  
### app/Http/Controllers/ArticleCategoryController.php  
Создайте экшен show.  
Извлеките из базы текущую запрошенную категорию и передайте её в шаблон.  

### resources/views/article_category/show.blade.php  
Подключите макет.  
Выведите имя и описание категории.  
Выведите список названий статей категории в виде "<ol>" списка. Если статей в категории нет, то тег <ol> не должен отображаться.   
Каждое название – ссылка на саму статью (маршрут подсмотрите в файле роутов).  

### resources/views/article/show.blade.php  
Добавьте ссылку на категорию статьи рядом с именем статьи.  
  
### Подсказки  
Проверка коллекции на пустоту: $category->articles->isEmpty()  
Список статей категории можно получить так: $category->articles  