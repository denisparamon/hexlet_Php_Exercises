## src/Post.php  
Реализуйте следующие скоупы:  
  
Скоуп "опубликованные посты": where('state', 'published').  
"Самые залайканные с лимитом": orderBy('likes_count', 'desc')->limit($limit)  
  
## src/actions/Posts.php  
Реализуйте метод index($user, $limit), который возвращает список самых популярных (больше всего лайков) опубликованных постов:  
  
<?php  
  
$posts = Posts::index($user, 2);  