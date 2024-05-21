@extends('layouts.sidebar')

@section('title', 'Create New Category')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Create New Category</title>
        <!-- Add some basic styling for the form -->
        <style>
            form {
                margin-top: 20px;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input[type="text"] {
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
        <h1>Create New Category</h1>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Create</button></td>
                </tr>
            </table>
        </form>
        <a href="{{ route('categories.index') }}">Back to Categories</a>
    </body>

    </html>
@endsection
