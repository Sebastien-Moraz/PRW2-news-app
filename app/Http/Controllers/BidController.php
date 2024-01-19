<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Article $article)
    {
        return view('bids.create', ['article' => $article, 'bid' => new Bid()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Article $article)
    {
        if ($article->archived_at) abort(403);
        $article->bids()->create($request->all());
        return redirect()->route('articles.show', $article);
    }
}
