<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список статей</title>
</head>
<body>
<h1>Список статей</h1>
<ul>
    @foreach ($articles as $article)
        <li>
            <h2>{{ $article->name }}</h2>
            <p>{{ $article->body }}</p>
        </li>
    @endforeach
</ul>
</body>
</html>
