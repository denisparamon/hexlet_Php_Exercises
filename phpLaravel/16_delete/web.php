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

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('article_categories', [ArticleCategoryController::class, 'index'])->name('article_categories.index');
Route::get('articles/{id}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('article_categories/create', [ArticleCategoryController::class, 'create'])->name('article_categories.create');
Route::post('article_categories', [ArticleCategoryController::class, 'store'])->name('article_categories.store');
Route::get('article_categories/{id}/edit', [ArticleCategoryController::class, 'edit'])->name('article_categories.edit');
Route::patch('/article_categories/{id}', [ArticleCategoryController::class, 'update'])->name('article_categories.update');
Route::delete('article_categories/{id}', [ArticleCategoryController::class, 'destroy'])->name('article_categories.destroy');

Route::get('article_categories/{id}', [ArticleCategoryController::class, 'show'])
    ->name('article_categories.show');
