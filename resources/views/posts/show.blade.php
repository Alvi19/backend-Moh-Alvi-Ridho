@extends('layouts.sidebar')

@section('title', 'User List')

@section('content')

    <body>
        <h1>{{ $post->title }}</h1>
        <p>by {{ $post->user->name }} in {{ $post->category->name }}</p>
        <p>{{ $post->content }}</p>
        <h2>Comments</h2>
        <ul>
            @foreach ($post->comments as $comment)
                <li>{{ $comment->content }} by {{ $comment->user->name }}</li>
            @endforeach
        </ul>
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <a href="{{ route('posts.index') }}">Back to Posts</a>
    </body>

@endsection
