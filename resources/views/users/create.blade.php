@extends('layouts.sidebar')

@section('title', 'User Create')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Create New User</title>
    </head>

    <body>
        <h1>Create New User</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Create</button></td>
                </tr>
            </table>
        </form>
        <a href="{{ route('users.index') }}">Back to Users</a>
    </body>

    </html>
@endsection
