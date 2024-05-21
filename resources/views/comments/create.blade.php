@extends('layouts.sidebar')

@section('title', 'Create New Comment')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Create New Comment</title>
        <!-- Add Bootstrap CDN for styling -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <h1>Create New Comment</h1>
            <form action="{{ route('comments.store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="content" class="col-sm-2 col-form-label">Content:</label>
                    <div class="col-sm-10">
                        <textarea name="content" id="content" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_id" class="col-sm-2 col-form-label">User:</label>
                    <div class="col-sm-10">
                        <select name="user_id" id="user_id" class="form-control">
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="post_id" class="col-sm-2 col-form-label">Post:</label>
                    <div class="col-sm-10">
                        <select name="post_id" id="post_id" class="form-control">
                            @foreach ($posts as $post)
                                <option value="{{ $post->id }}">{{ $post->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
            <a href="{{ route('comments.index') }}" class="btn btn-secondary">Back to Comments</a>
        </div>
    </body>

    </html>
@endsection
