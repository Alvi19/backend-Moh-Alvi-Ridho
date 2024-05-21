@extends('layouts.sidebar')

@section('title', 'User List')

@section('content')

    <body>
        <h1>Create New Comment</h1>
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
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
            <label for="post_id">Post:</label>
            <select name="post_id" id="post_id">
                @foreach ($posts as $post)
                    <option value="{{ $post->id }}">{{ $post->title }}</option>
                @endforeach
            </select>
            <br>
            <button type="submit">Create</button>
        </form>
        <a href="{{ route('comments.index') }}">Back to Comments</a>
    </body>
@endsection
