<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function dashboard(){
        $unrevisionedArticles = Article::where('is_accepted', NULL)->get();
        $acceptedArticles = Article::where('is_accepted', true)->get();
        $rejectedArticles = Article::where('is_accepted', false)->get();

        return view('revisor.dashboard', compact('unrevisionedArticles', 'acceptedArticles', 'rejectedArticles'));
    }

    public function acceptArticle(Article $article){

        $article->is_accepted = true;
        $article->save();

        return redirect(route('revisor.dashboard'))->with('message', 'Article accepted');
    }

    public function rejectArticle(Article $article){

        $article->is_accepted = false;
        $article->save();

        return redirect(route('revisor.dashboard'))->with('message', 'Article rejected');
    }

    public function undoArticle(Article $article){

        $article->is_accepted = NULL;
        $article->save();

        return redirect(route('revisor.dashboard'))->with('message', 'Article back to review');
    }
}

