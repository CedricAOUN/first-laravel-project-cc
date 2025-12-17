<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $articles = Article::orderby('article_id')->get();

        return view('welcome', ['name' => 'Cedric', 'articles' => $articles]);
    }
}
