@extends('layouts.app')

@section('content')
    <h1>{{ $article->name }}</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.comments.update', [$article, $comment]) }}" method="POST">
        @csrf
        @method('PATCH')

        <div>
            <label for="content">Комментарий:</label>
            <textarea name="content" id="content">{{ old('content', $comment->content) }}</textarea>
        </div>

        <button type="submit">Обновить комментарий</button>
    </form>
@endsection
