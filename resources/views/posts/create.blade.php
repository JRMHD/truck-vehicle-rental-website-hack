@extends('layouts.app')

@section('content')
    <h2>Create Post</h2>

    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" required></textarea>
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>

        <button type="submit">Submit</button>
    </form>
@endsection
