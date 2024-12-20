<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\ArticleCategory;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $articleCategories = ArticleCategory::orderBy('id', 'desc')->get();
        return view('article_category.index', compact('articleCategories'));
    }

    public function show($id)
    {
        $category = ArticleCategory::findOrFail($id);
        return view('article_category.show', compact('category'));
    }

    public function edit($id)
    {
        $category = ArticleCategory::findOrFail($id);
        return view('article_category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = ArticleCategory::findOrFail($id);
        $request->validate([
            'name' => 'required|unique:article_categories,name,' . $category->id,
            'description' => 'required|min:200',
            'state' => [
                'required',
                Rule::in(['draft', 'published']),
            ]
        ]);

        $category->fill($request->all());
        $category->save();
        return redirect()
            ->route('article_categories.index');
    }

    public function create()
    {
        $category = new ArticleCategory();
        return view('article_category.create', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:article_categories',
            'description' => 'required|min:200',
            'state' => [
                'required',
                Rule::in(['draft', 'published']),
            ]
        ]);

        $category = new ArticleCategory();
        $category->fill($request->all());
        $category->save();

        return redirect()
            ->route('article_categories.index');
    }

    public function destroy($id)
    {
        $category = ArticleCategory::findOrFail($id);
        $category->delete();

        return redirect()
            ->route('article_categories.index')
            ->with('success', 'Категория успешно удалена.');
    }
}
