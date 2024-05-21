@extends('layouts.sidebar')

@section('title', 'Post List')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Posts</title>
        <!-- Add some basic styling for the table -->
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }

            table,
            th,
            td {
                border: 1px solid black;
            }

            th,
            td {
                padding: 10px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            ul {
                list-style-type: none;
                padding: 0;
            }

            ul li {
                margin-bottom: 10px;
            }

            a {
                text-decoration: none;
                color: #007bff;
            }

            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>

    <body>
        <h1>Posts</h1>
        <a href="{{ route('posts.create') }}">Create New Post</a>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
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
    </body>

    </html>
@endsection
