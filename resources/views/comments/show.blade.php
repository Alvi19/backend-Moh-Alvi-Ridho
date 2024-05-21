@extends('layouts.sidebar')

@section('title', 'Edit Comment')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Edit Comment</title>
        <!-- Add Bootstrap CDN for styling -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <h1>Edit Comment</h1>
            <form action="{{ route('comments.update', $comment->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea name="content" id="content" class="form-control">{{ $comment->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="user_id">User:</label>
                    <select name="user_id" id="user_id" class="form-control">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ $comment->user_id == $user->id ? 'selected' : '' }}>
                                {{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="post_id">Post:</label>
                    <select name="post_id" id="post_id" class="form-control">
                        @foreach ($posts as $post)
                            <option value="{{ $post->id }}" {{ $comment->post_id == $post->id ? 'selected' : '' }}>
                                {{ $post->title }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('comments.index') }}" class="btn btn-secondary">Back to Comments</a>
            </form>
        </div>
    </body>

    </html>
@endsection
