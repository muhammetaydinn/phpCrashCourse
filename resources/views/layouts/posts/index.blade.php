@extends('layouts.app')

@section('content')
    <ul style="list-style-type: none; padding: 0;">
        @foreach ($posts as $post)
            <li style="margin-bottom: 20px;">
                <!-- Başlık -->
                <h2 style="font-size: 20px; color: #333; margin: 0;">
                    <a href="{{ route('posts.show', $post->id) }}"
                       style="color: inherit; text-decoration: none;">{{ $post->title }}</a>
                </h2>
                
                <!-- İçerik -->
                <p style="font-size: 16px; color: #555; margin: 5px 0;">
                    {{ $post->content }}
                </p>
            </li>
        @endforeach
    </ul>
@endsection
