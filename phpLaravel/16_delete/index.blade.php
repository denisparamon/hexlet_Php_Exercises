@extends('layouts.app')

@section('content')
    <small><a href="{{ route('article_categories.create') }}">Создать категорию</a></small>
    <h1>Список категорий статей</h1>
    @foreach($articleCategories as $category)
        <h2 class="h3">
            <a href="{{ route('article_categories.show', $category) }}">{{$category->name}}</a>
        </h2>
        <p>
            <a href="{{ route('article_categories.edit', $category) }}">Edit</a>
        {{-- BEGIN (write your solution here) --}}
        <form action="{{ route('article_categories.destroy', $category) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Вы уверены, что хотите удалить категорию?');">
                Delete
            </button>
        </form>
        {{-- END --}}

        </p>

        <div>{{$category->description}}</div>
    @endforeach
@endsection
