<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Categories $categories)
    {
        return \view('news.categories')->with('categories', $categories->getCategories());
    }

    public function show(string $slug, News $news, Categories $categories)
    {
        return \view('news.category')
            ->with('news', $news->getNewsByCategorySlug($slug))
            ->with('category', $categories->getCategoryTitleBySlug($slug));
    }
}
