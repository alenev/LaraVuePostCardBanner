@extends('layout')

@section('title', 'Posts')

@section('content')
    <h1>Posts:</h1>

    @foreach ($posts as $post)
        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">{{ $post->name }}</a>
    @endforeach
@endsection