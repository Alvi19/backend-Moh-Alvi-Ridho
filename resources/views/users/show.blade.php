@extends('layouts.sidebar')

@section('title', 'User Details')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>User Details</title>
        <!-- Add Bootstrap CDN for styling -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <h1>User Details</h1>
            <table class="table">
                <tr>
                    <th>Name:</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{ $user->email }}</td>
                </tr>
            </table>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
            </form>
            <br>
            <a href="{{ route('users.index') }}" class="btn btn-secondary mt-2">Back to Users</a>
        </div>
    </body>

    </html>
@endsection
