@extends('layouts.main')

@section('container')
    <h1>Post Category : {{ $category }}</h1>

    @foreach ($posts as $post)
        <div class="card shadow mb-5">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                </h5>
                <p class="card-text">{{ $post->excerpt }}...</p>
            </div>
        </div>
    @endforeach
@endsection
