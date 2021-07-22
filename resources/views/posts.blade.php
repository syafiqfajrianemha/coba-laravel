@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <div class="card shadow mb-5">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">By: {{ $post['author'] }}</h6>
                <p class="card-text">{{ $post['body'] }}</p>
            </div>
        </div>
    @endforeach
@endsection
