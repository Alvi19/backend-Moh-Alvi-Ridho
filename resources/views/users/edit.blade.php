@extends('layouts.sidebar')

@section('title', 'Edit User')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Edit User</title>
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
                margin-right: 10px;
            }
        </style>
    </head>

    <body>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <table>
                <tr>
                    <th><label for="name">Name:</label></th>
                    <td><input type="text" name="name" id="name" value="{{ $user->name }}"></td>
                </tr>
                <tr>
                    <th><label for="email">Email:</label></th>
                    <td><input type="email" name="email" id="email" value="{{ $user->email }}"></td>
                </tr>
                <tr>
                    <th><label for="password">Password:</label></th>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Update</button></td>
                </tr>
            </table>
        </form>
        <br>
        <a href="{{ route('users.index') }}">Back to Users</a>
    </body>

    </html>
@endsection
