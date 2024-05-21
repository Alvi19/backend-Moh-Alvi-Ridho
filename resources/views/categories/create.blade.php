@extends('layouts.sidebar')

@section('title', 'User List')

@section('content')

    <body>
        <h1>Create New Category</h1>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <br>
            <button type="submit">Create</button>
        </form>
        <a href="{{ route('categories.index') }}">Back to Categories</a>
    </body>
@endsection
