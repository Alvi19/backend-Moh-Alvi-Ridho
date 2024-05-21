<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        /* Gaya untuk sidebar */
        .sidebar {
            height: 100%;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f2f2f2;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px;
            display: block;
            text-decoration: none;
            color: black;
        }

        .sidebar a:hover {
            background-color: #ddd;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <a href="{{ route('users.index') }}">Users</a>
        <a href="{{ route('categories.index') }}">Categories</a>
        <a href="{{ route('posts.index') }}">Posts</a>
        <a href="{{ route('comments.index') }}">Comments</a>

        <!-- Tambahkan tautan lain di sini sesuai kebutuhan -->
    </div>

    <div class="content">
        @yield('content')
    </div>

</body>

</html>
