{{-- BEGIN --}}
@extends('layouts.app')

@section('content')
    <h1>Список категорий статей</h1>
    @foreach($articleCategories as $category)
        <h2>{{$category->name}}</h2>
        <div>{{$category->description}}</div>
    @endforeach
@endsection
{{-- END --}}