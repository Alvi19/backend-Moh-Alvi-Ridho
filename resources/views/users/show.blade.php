@extends('layouts.sidebar')

@section('title', 'User List')

@section('content')

    <body>
        <h1>User Details</h1>
        <table>
            <tr>
                <th>Name:</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $user->email }}</td>
            </tr>
        </table>
        <a href="{{ route('users.edit', $user->id) }}">Edit</a>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        <br>
        <a href="{{ route('users.index') }}">Back to Users</a>
    </body>
@endsection
