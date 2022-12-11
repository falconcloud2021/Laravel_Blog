<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogShowController extends Controller
{
    public function indexPage()
    {
        return view('blog.index');
    }

    public function articlesPage()
    {
        return view('blog.articles');
    }

    public function singleArticlePage()
    {
        return view('blog.single-article');
    }
}
