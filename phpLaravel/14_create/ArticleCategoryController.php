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

// BEGIN
    public function create()
    {
        return view('article_category.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'description' => 'required|min:200',
            'state' => ['required', Rule::in(['draft', 'published'])],
        ]);

        ArticleCategory::create($validated);

        return redirect()->route('article_categories.index');
    }
// END

}
