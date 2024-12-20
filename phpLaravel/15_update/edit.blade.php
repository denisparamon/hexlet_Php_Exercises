@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- BEGIN --}}
    <form action="{{ route('article_categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PATCH')
        @include('article_category.form', ['category' => $category])
        <button type="submit">Update</button>
    </form>
    {{-- END --}}
@endsection
