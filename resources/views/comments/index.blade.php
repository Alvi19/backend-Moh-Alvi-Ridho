@extends('layouts.sidebar')

@section('title', 'User List')

@section('content')

    <body>
        <h1>Comments</h1>
        <a href="{{ route('comments.create') }}">Create New Comment</a>
        <ul>
            @foreach ($comments as $comment)
                <li>
                    {{ $comment->content }} by {{ $comment->user->name }} on post <a
                        href="{{ route('posts.show', $comment->post->id) }}">{{ $comment->post->title }}</a>
                </li>
            @endforeach
        </ul>
    </body>
@endsection
