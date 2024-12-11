<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating</title>
</head>
<body>
<h1>Rating of Articles</h1>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Likes</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($articles as $article)
        <tr>
            <td>{{ $article->name }}</td>
            <td>{{ $article->likes_count }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
