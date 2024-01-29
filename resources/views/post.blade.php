@extends('layout')

@section('title', 'Posts')

@section('content')
    <h1>{{ $post->name }}</h1>

    {!! $post->text !!}
@endsection