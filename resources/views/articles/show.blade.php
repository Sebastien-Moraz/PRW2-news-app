@extends('layout')

@section('content')
    <h2>{{ $article->title }}</h2>
    <article>
        {{ $article->body }}
    </article>
    <form method="POST" action="{{ route('articles.destroy', $article) }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Supprimer l'article">
    </form>
    <a href="{{ route('articles.edit', $article) }}">Modifier cet article</a>
    <br>
    <br>
    @if ($article->bids->count() > 0)
        <p>Dernière offre le {{ $article->bids->last()->created_at->format('d/m/Y à H:i') }}</p>
    @endif
    <a href="{{ route('articles.bids.create', $article) }}">Faire une offre</a>
    <h3>Commentaires</h3>

    @unless ($article->archived_at)
        <form method="POST" action="{{ route('articles.comments.store', $article) }}">
            @csrf
            <textarea name="body"></textarea>
            <input type="submit" value="Ajouter le commentaire">
        </form>
    @endunless

    <ul>
    @foreach ($article->comments as $comment)
        <li>
            <p>{{ $comment->body  }}</p>
        </li>
    @endforeach
    </ul>

@endsection
