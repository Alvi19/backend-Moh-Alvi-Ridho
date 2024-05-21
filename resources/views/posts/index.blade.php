@extends('layouts.sidebar')

@section('title', 'User List')

@section('content')

    <body>
        {{-- @include('components.sidebar') --}}
        <h1>Posts</h1>
        <a href="{{ route('posts.create') }}">Create New Post</a>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    by {{ $post->user->name }} in {{ $post->category->name }}
                </li>
            @endforeach
        </ul>
    </body>
@endsection
