@extends('layouts.sidebar')

@section('title', 'Post Details')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>{{ $post->title }}</title>
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

            button[type="submit"] {
                padding: 5px 10px;
                background-color: #dc3545;
                color: #fff;
                border: none;
                cursor: pointer;
            }

            button[type="submit"]:hover {
                background-color: #c82333;
            }
        </style>
    </head>

    <body>
        <h1>{{ $post->title }}</h1>
        <table>
            <tr>
                <th>Author:</th>
                <td>{{ $post->user->name }}</td>
            </tr>
            <tr>
                <th>Category:</th>
                <td>{{ $post->category->name }}</td>
            </tr>
            <tr>
                <th>Content:</th>
                <td>{{ $post->content }}</td>
            </tr>
        </table>
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
            <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
        </form>
        <a href="{{ route('posts.index') }}">Back to Posts</a>
    </body>

    </html>
@endsection
