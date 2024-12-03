routes/web.php
Добавьте два маршрута:

GET /about. Берет содержимое из шаблона about.blade.php
GET /articles. Берет содержимое из шаблона articles.blade.php
resources/views/welcome.blade.php
Добавьте в шаблон ссылки на страницы /about и /articles

resources/views/about.blade.php
Добавьте в шаблон HTML:

<h1>О блоге</h1>
<p>Эксперименты с Ларавелем на Хекслете</p>
resources/views/articles.blade.php
Добавьте в шаблон HTML:

<h1>Статьи</h1>