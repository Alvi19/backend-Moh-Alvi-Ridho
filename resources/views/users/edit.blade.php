@extends('layouts.sidebar')

@section('title', 'User List')

@section('content')
    <h1>Edit User</h1>
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
@endsection
