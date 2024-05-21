@extends('layouts.sidebar')

@section('title', 'User List')

@section('content')

    <body>
        <h1>Create New Post</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
            <br>
            <label for="content">Content:</label>
            <textarea name="content" id="content"></textarea>
            <br>
            <label for="user_id">User:</label>
            <select name="user_id" id="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <br>
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <br>
            <button type="submit">Create</button>
        </form>
        <a href="{{ route('posts.index') }}">Back to Posts</a>
    </body>
@endsection
