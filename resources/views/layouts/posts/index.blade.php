@extends('layouts.app')

@section('content')
    <ul style="list-style-type: none; padding: 0;">
        @foreach ($posts as $post)
            <li style="margin-bottom: 20px;">
                <h2 style="font-size: 24px; font-weight: bold; margin: 0;">{{ $post['title'] }}</h2>
                <p style="font-size: 16px; color: #555; margin: 5px 0 0;">{{ $post['content'] }}</p>
            </li>
        @endforeach
    </ul>
@endsection
