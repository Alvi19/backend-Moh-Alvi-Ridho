@extends('layouts.sidebar')

@section('title', 'Category Details')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>{{ $category->name }}</title>
        <!-- Add some basic styling for the table -->
        <style>
            table {
                width: 50%;
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

            a {
                display: inline-block;
                margin-top: 10px;
                text-decoration: none;
                color: #007bff;
                margin-right: 10px;
            }
        </style>
    </head>

    <body>
        <h1>{{ $category->name }}</h1>
        <table>
            <tr>
                <th>ID:</th>
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <th>Name:</th>
                <td>{{ $category->name }}</td>
            </tr>
        </table>
        <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
        </form>
        <a href="{{ route('categories.index') }}">Back to Categories</a>
    </body>

    </html>
@endsection
