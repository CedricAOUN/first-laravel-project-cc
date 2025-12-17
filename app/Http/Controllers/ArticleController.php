<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return 'Article non trouvé.';
        }
        return view('pages.article-details', ['id' => $id, 'article' => $article]);
    }

    public function createBaseArticles()
    {
        // Execute only if there are no articles in the database
        if (Article::count() > 0) {
            return 'Articles deja en BDD.';
        } else {
            Article::create([
                'title' => 'L’IA soigne mieux',
                'description' => "L’intelligence artificielle aide les médecins à diagnostiquer plus vite."
            ]);
            Article::create([
                'title' => 'Villes vertes',
                'description' => 'Les métropoles deviennent plus écologiques et durables.'
            ]);
            Article::create([
                'title' => 'Télétravail',
                'description' => 'Plus de liberté, mais aussi plus de solitude.'
            ]);
            return 'Articles créés en BDD.';
        }
    }

    public function modifyArticles($id, $title = 'Nouveau titre', $description = 'Nouvelle description')
    {
        $article = Article::find($id);
        if ($article) {
            $article->title = $title;
            $article->description = $description;
            $article->save();
            return "Article ID {$id} modifié.";
        } else {
            return "Article ID {$id} non trouvé.";
        }
    }

    public function deleteArticles($id)
    {
        $article = Article::find($id);
        if ($article) {
            $article->delete();
            return "Article ID {$id} supprimé.";
        } else {
            return "Article ID {$id} non trouvé.";
        }
    }
}
