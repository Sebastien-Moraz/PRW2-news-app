@extends('layout')

@section('content')
    <h1>Home</h1>
    <h2>Most visited articles</h2>
    <ul>
        @foreach ($articles as $article)
            <li>
                <a href="{{ route('articles.show', $article->id) }}">
                    {{ $article->title }} - ({{ $article->visits }} visits)
                </a>
            </li>
        @endforeach
@endsection