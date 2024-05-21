@extends('layouts.sidebar')

@section('title', 'Edit')

@section('content')

    <body>
        <h1>Edit Category</h1>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ $category->name }}">
            <br>
            <button type="submit">Update</button>
        </form>
        <a href="{{ route('categories.index') }}">Back to Categories</a>
    </body>
@endsection
