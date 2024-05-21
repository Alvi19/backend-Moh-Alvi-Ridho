@extends('layouts.sidebar')

@section('title', 'Post List')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Post List</title>
        <!-- Add Bootstrap CDN for styling -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <h1>Post List</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Category</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
                            <td>{{ $post->user->name }}</td>
                            <td>{{ $post->category->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>

    </html>
@endsection
