<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index(News $news)
    {
        return \view('news.index')->with('news', $news->getNews());
    }

    public function show(int $id, News $news)
    {
        return \view('news.show')->with('news', $news->getNewsById($id));
    }
}
