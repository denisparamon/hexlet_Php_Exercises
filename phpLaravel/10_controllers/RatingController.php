<?php

namespace App\Http\Controllers;

use App\Models\Article;

class RatingController extends Controller
{
    public function index()
    {
        // Извлекаем опубликованные статьи (state != 'draft') и сортируем по likes_count
        $articles = Article::where('state', '!=', 'draft')
            ->orderBy('likes_count', 'desc')
            ->get();

        // Передаём статьи в шаблон
        return view('rating.index', ['articles' => $articles]);
    }
}
