<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Category $categories)
    {
        return \view('news.categories')->with('categories', $categories->getCategories());
    }

    public function show(int $id, News $news, Category $categories)
    {
        return \view('news.category')
            ->with('news', $news->getNewsByCategoryId($id))
            ->with('category', $categories->getCategoryById($id));
    }
}
