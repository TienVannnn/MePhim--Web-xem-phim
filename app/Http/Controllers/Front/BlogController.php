<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $title = 'Mê Phim - Tất cả các bài viết hay';
        $titleBread = 'Bài viết';
        $blogs = Blog::where('active', 1)->orderByDesc('id')->paginate(10);
        return view('front.blog.blogs', compact('title', 'blogs', 'titleBread'));
    }
    public function blog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        if (!$blog) abort(404);
        $title = 'Bài viết ' . $blog->name . ' | Mê Phim';
        $titleBread = $blog->name;
        return view('front.blog.detail_blog', compact('title', 'blog', 'titleBread'));
    }
}
