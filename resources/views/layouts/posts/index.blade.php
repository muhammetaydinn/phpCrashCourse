@extends('layouts.app')

@section('content')
    <ul style="list-style-type: none; padding: 0;">
        @foreach ($posts as $post)
            <li style="margin-bottom: 20px;">
                <a2>
                    <a href="{{ route('posts.show', $post->id) }}"
                        style="font-size: 20px; color: #333; text-decoration: none;">{{ $post->title }}</a>
                </a2>
            </li>
        @endforeach
    </ul>
@endsection
