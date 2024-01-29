@extends('layout')

@section('title', 'Posts')

@section('content')

    <h1>Banners</h1>

    @foreach ($banners as $banner)
        <div>
            <a href="{{ $banner->url }}">
                <p>{{ $banner->name }}</p>
            </a>
            <p>{{ $banner->text }}</p>
        </div>
@endforeach

@endsection