@extends('layouts.app')

@section('content')
    {{-- Форма поиска --}}
    <form action="{{ route('articles.index') }}" method="get">
        <div>
            <input
                    type="text"
                    name="q"
                    value="{{ old('q', $q ?? '') }}"
                    placeholder="Введите название статьи"
            />
            <button type="submit">Найти</button>
        </div>
    </form>

    <h1>Список статей</h1>
    @foreach($articles as $article)
        <h2>{{ $article->name }}</h2>
        <div>{{ Str::limit($article->body, 200) }}</div>
    @endforeach
@endsection
