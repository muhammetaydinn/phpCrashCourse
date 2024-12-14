@extends('layouts.app')
@section('content')
    <h1>
        {{ $post->title }}
    </h1>
    <p1>
        {{ $post->content }}
    </p1>
    <h2>
        Category : {{ $post->category->title }}
    </h2>

@endsection
