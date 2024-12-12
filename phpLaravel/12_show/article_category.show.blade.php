@extends('layouts.app')

@section('content')
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>

    @if (!$category->articles->isEmpty())
        <ol>
            @foreach ($category->articles as $article)
                <li>
                    <a href="{{ route('articles.show', $article->id) }}">
                        {{ $article->name }}
                    </a>
                </li>
            @endforeach
        </ol>
    @endif
@endsection
