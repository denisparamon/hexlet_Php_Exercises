<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $articleCategories = ArticleCategory::all();
        return view('article_category.index', compact('articleCategories'));
    }
}


//

 Чтобы создать файл в вебе в хекселе, нужно создать Файл двумя командами
 Перейти в нудную директорию:

cd app/Http/Controllers/

 И создать файл:

touch ArticleCategoryController.php

//