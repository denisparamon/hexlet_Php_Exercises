<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ArticleController, ArticleCategoryController};

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

Route::get('articles', [ArticleController::class, 'index'])
    ->name('articles.index');

Route::get('articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');

Route::get('article_categories', [ArticleCategoryController::class, 'index'])
    ->name('article_categories.index');

// BEGIN (write your solution here)
Route::get('article_categories/{id}', [ArticleCategoryController::class, 'show'])
    ->name('article_categories.show');
// END
