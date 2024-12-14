@extends('layouts.app')

@section('content')
    {{-- BEGIN --}}
    <a href="{{ route('article_categories.create') }}" class="btn btn-primary">Создать категорию</a>
    {{-- END --}}

    <h1>Список категорий статей</h1>
    @foreach($articleCategories as $category)
        <h2><a href="{{ route('article_categories.show', $category) }}">{{$category->name}}</a></h2>
        <div>{{$category->description}}</div>
    @endforeach
@endsection
