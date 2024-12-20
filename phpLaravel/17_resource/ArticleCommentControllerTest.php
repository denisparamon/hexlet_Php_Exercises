<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\{Article, ArticleComment};

class ArticleCommentControllerTest extends TestCase
{
    public function testEdit()
    {
        $comment = ArticleComment::factory()->create();
        $response = $this->get(route('articles.comments.edit', [$comment->article, $comment]));
        $response->assertStatus(200);
    }

    public function testStoreWithValidationErrors()
    {
        $article = Article::factory()->create();
        $params = [
            'content' => 'b',  // Слишком короткий комментарий
        ];
        $response = $this->post(route('articles.comments.store', $article), $params);
        $response->assertStatus(302);  // Перенаправление
        $response->assertSessionHasErrors();  // Проверка на ошибки валидации

        $this->assertDatabaseMissing('article_comments', $params);  // Комментарий не был добавлен
    }

    public function testStore()
    {
        $article = Article::factory()->create();
        $params = [
            'content' => 'long long sentence',
        ];
        $response = $this->post(route('articles.comments.store', $article), $params);
        $response->assertStatus(302);  // Перенаправление

        $this->assertDatabaseHas('article_comments', [
            'content' => $params['content']
        ]);  // Комментарий был добавлен
    }

    public function testUpdateWithValidationErrors()
    {
        $comment = ArticleComment::factory()->create();
        $params = [
            'content' => 'b',  // Слишком короткий комментарий
        ];
        $response = $this->patch(route('articles.comments.update', [$comment->article, $comment]), $params);
        $response->assertStatus(302);  // Перенаправление
        $response->assertSessionHasErrors();  // Проверка на ошибки валидации

        $this->assertDatabaseHas('article_comments', [
            'id' => $comment->id,
            'content' => $comment->content  // Контент не должен измениться
        ]);
    }

    public function testUpdate()
    {
        $comment = ArticleComment::factory()->create();
        $params = [
            'content' => 'long long sentence',
        ];
        $response = $this->patch(route('articles.comments.update', [$comment->article, $comment]), $params);
        $response->assertStatus(302);  // Перенаправление

        $this->assertDatabaseHas('article_comments', [
            'content' => $params['content']
        ]);  // Комментарий был обновлен
    }

    public function testDestroy()
    {
        $comment = ArticleComment::factory()->create();
        $response = $this->delete(route('articles.comments.destroy', [$comment->article, $comment]));
        $response->assertStatus(302);  // Перенаправление

        $comment2 = ArticleComment::find($comment->id);
        $this->assertNull($comment2);  // Комментарий был удален
    }
}
