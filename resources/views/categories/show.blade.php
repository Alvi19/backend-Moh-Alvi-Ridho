@extends('layouts.sidebar')

@section('title', 'User List')

@section('content')

    <body>
        <h1>{{ $category->name }}</h1>
        <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <a href="{{ route('categories.index') }}">Back to Categories</a>
    </body>
@endsection
