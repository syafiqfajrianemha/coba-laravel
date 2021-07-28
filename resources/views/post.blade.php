@extends('layouts.main')

@section('container')
    <div class="card shadow mb-5">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            {!! $post->body !!}
            <a href="/posts" class="card-link">Back to Posts</a>
        </div>
    </div>
@endsection
