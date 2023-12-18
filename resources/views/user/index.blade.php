<!-- resources/views/user/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Posts</h2>

    @foreach ($posts as $post)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid">
            </div>
        </div>
    @endforeach
@endsection
