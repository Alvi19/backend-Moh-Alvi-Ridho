@extends('layouts.sidebar')

@section('title', 'User List')

@section('content')

    <body>
        <h1>Edit Comment</h1>
        <form action="{{ route('comments.update', $comment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="content">Content:</label>
            <textarea name="content" id="content">{{ $comment->content }}</textarea>
            <br>
            <label for="user_id">User:</label>
            <select name="user_id" id="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $comment->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}</option>
                @endforeach
            </select>
            <br>
            <label for="post_id">Post:</label>
            <select name="post_id" id="post_id">
                @foreach ($posts as $post)
                    <option value="{{ $post->id }}" {{ $comment->post_id == $post->id ? 'selected' : '' }}>
                        {{ $post->title }}</option>
                @endforeach
            </select>
            <br>
            <button type="submit">Update</button>
        </form>
        <a href="{{ route('comments.index') }}">Back to Comments</a>
    </body>
@endsection
