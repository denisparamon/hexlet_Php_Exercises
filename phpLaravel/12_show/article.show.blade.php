@extends('layouts.app')

@section('content')
    <h1>{{ $article->name }}</h1>
    <p>
        Категория:
        <a href="{{ route('article_categories.show', $article->category->id) }}">
            {{ $article->category->name }}
        </a>
    </p>
    <div>{{ $article->body }}</div>
@endsection
