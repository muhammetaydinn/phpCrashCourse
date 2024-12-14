@extends('layouts.app')
@section('content')
    <h1>
        {{ $post->title }}
    </h1>
    <p1>
        {{ $post->content }}
    </p1>
@endsection
