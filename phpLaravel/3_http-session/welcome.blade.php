<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div class="container mt-4">
    <!-- BEGIN (write your solution here) -->
    <a href="/about">О блоге</a>
    <br>
    <a href="/articles">Статьи</a>
    <!-- END -->
</div>
</body>
</html>
