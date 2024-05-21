@extends('layouts.sidebar')

@section('title', 'User List')

@section('content')

    <body>
        <h1>Categories</h1>
        <a href="{{ route('categories.create') }}">Create New Category</a>
        <ul>
            @foreach ($categories as $category)
                <li>
                    <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </body>
@endsection
