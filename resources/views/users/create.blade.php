<!DOCTYPE html>
<html>

<head>
    <title>Create User</title>
</head>

<body>
    <h1>Create New User</h1>
    <table>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
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
        </form>
    </table>
    <a href="{{ route('users.index') }}">Back to Users</a>
</body>

</html>
