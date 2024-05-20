<?php

namespace App\Http\Controllers;

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

        return redirect(round('revisor.dashboard'))->with('message', 'Article accepted');
    }
}
