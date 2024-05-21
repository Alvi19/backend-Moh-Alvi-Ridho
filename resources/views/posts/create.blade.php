@extends('layouts.sidebar')

@section('title', 'Create New Post')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Create New Post</title>
        <!-- Add some basic styling for the form -->
        <style>
            form {
                margin-top: 20px;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input[type="text"],
            textarea,
            select {
                width: 100%;
                padding: 8px;
                margin-bottom: 10px;
            }

            button[type="submit"] {
                padding: 10px 20px;
                background-color: #007bff;
                color: #fff;
                border: none;
                cursor: pointer;
            }

            button[type="submit"]:hover {
                background-color: #0056b3;
            }

            a {
                display: inline-block;
                margin-top: 10px;
                text-decoration: none;
                color: #007bff;
            }
        </style>
    </head>

    <body>
        <h1>Create New Post</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <td><label for="title">Title:</label></td>
                    <td><input type="text" name="title" id="title"></td>
                </tr>
                <tr>
                    <td><label for="content">Content:</label></td>
                    <td>
                        <textarea name="content" id="content"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><label for="user_id">User:</label></td>
                    <td>
                        <select name="user_id" id="user_id">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="category_id">Category:</label></td>
                    <td>
                        <select name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Create</button></td>
                </tr>
            </table>
        </form>
        <a href="{{ route('posts.index') }}">Back to Posts</a>
    </body>

    </html>
@endsection
