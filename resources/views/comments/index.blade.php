@extends('layouts.sidebar')

@section('title', 'Comment List')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Comments</title>
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
                margin-right: 10px;
            }
        </style>
    </head>

    <body>
        <h1>Comments</h1>
        <a href="{{ route('comments.create') }}">Create New Comment</a>
        <table>
            <thead>
                <tr>
                    <th>Content</th>
                    <th>User</th>
                    <th>Post</th>
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
    </body>

    </html>
@endsection
