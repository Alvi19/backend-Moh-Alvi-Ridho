@extends('layouts.sidebar')

@section('title', 'Edit Category')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Edit Category</title>
        <!-- Add Bootstrap CDN for styling -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <h1>Edit Category</h1>
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-2">Back to Categories</a>
        </div>
    </body>

    </html>
@endsection
