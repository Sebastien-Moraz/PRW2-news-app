@extends('layout')

@section('content')
    <form method="POST" action="{{ route('articles.bids.store', ['article' => $article->id]) }}">
        @csrf
        @include('bids.fields')
        <input type="submit" value="Ajouter">
@endsection