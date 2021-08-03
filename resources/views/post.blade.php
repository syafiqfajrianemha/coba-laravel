@extends('layouts.main')

@section('container')
    <div class="card shadow mb-5">
        <div class="card-body">
            <h3 class="card-title">{{ $post->title }}</h3>
            <h6 class="card-subtitle mb-2 text-muted">By. Syafiq Fajrian Emha in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
            {!! $post->body !!}
            <a href="/posts" class="card-link">Back to Posts</a>
        </div>
    </div>
@endsection
