@extends('layouts.main')

@section('container')
    <div class="card shadow mb-5">
        <div class="card-body">
            <h5 class="card-title">{{ $post['title'] }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">By: {{ $post['author'] }}</h6>
            <p class="card-text">{{ $post['body'] }}</p>
            <a href="/blog" class="card-link">Back to Posts</a>
        </div>
    </div>
@endsection
