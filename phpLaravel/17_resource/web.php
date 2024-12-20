<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ArticleController, ArticleCommentController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Ресурсные маршруты для статей и комментариев
Route::resource('articles', ArticleController::class);
Route::resource('articles.comments', ArticleCommentController::class)->except([
    'index', 'create'  // Индекс и создание мы делаем на странице статьи
]);
