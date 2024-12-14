<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        // Получаем значение поискового запроса
        $q = $request->input('q');

        // Фильтруем статьи, если запрос передан, иначе возвращаем все статьи
        $articles = Article::when($q, function ($query, $q) {
            $query->where('name', 'ilike', "%{$q}%");
        })->get();

        return view('article.index', compact('articles', 'q'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }
}
