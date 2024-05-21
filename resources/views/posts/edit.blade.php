@extends('layouts.sidebar')

@section('title', 'Edit')

@section('content')

    <body>
        <h1>Edit Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}">
            <br>
            <label for="content">Content:</label>
            <textarea name="content" id="content">{{ $post->content }}</textarea>
            <br>
            <label for="user_id">User:</label>
            <select name="user_id" id="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $post->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}</option>
                @endforeach
            </select>
            <br>
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}</option>
                @endforeach
            </select>
            <br>
            <button type="submit">Update</button>
        </form>
        <a href="{{ route('posts.index') }}">Back to Posts</a>
    </body>
@endsection

</html>
