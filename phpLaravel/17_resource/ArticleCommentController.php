<?php
//
создаем файл в терминале: php artisan make:controller ArticleCommentController --resource
//
namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleComment;
use Illuminate\Http\Request;

class ArticleCommentController extends Controller
{
    // Метод для редактирования комментария
    public function edit(Article $article, ArticleComment $comment)
    {
        return view('article_comment.edit', compact('article', 'comment'));
    }

    // Метод для сохранения комментария
    public function store(Request $request, Article $article)
    {
        $request->validate([
            'content' => 'required|min:10',
        ]);

        $article->comments()->create([
            'content' => $request->content,
        ]);

        return redirect()->route('articles.show', $article->id);
    }

    // Метод для обновления комментария
    public function update(Request $request, Article $article, ArticleComment $comment)
    {
        $request->validate([
            'content' => 'required|min:10',
        ]);

        $comment->update([
            'content' => $request->content,
        ]);

        return redirect()->route('articles.show', $article->id);
    }

    // Метод для удаления комментария
    public function destroy(Article $article, ArticleComment $comment)
    {
        $comment->delete();

        return redirect()->route('articles.show', $article->id);
    }
}
