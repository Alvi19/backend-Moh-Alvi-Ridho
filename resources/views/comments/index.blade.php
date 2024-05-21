@extends('layouts.sidebar')

@section('title', 'Comment List')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Comment List</title>
        <!-- Add Bootstrap CDN for styling -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <h1>Comment List</h1>
            <a href="{{ route('comments.create') }}" class="btn btn-primary mb-3">Create New Comment</a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Content</th>
                        <th scope="col">User</th>
                        <th scope="col">Post</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $comment)
                        <tr>
                            <td>{{ $comment->content }}</td>
                            <td>{{ $comment->user->name }}</td>
                            <td><a href="{{ route('posts.show', $comment->post->id) }}">{{ $comment->post->title }}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>

    </html>
@endsection
