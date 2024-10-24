<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Services\Backend\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blog;
    public function __construct(BlogService $blog)
    {
        $this->blog = $blog;
    }
    public function index()
    {
        $blogs = $this->blog->getDataBlogs();
        $title = 'Danh sách bài viết';
        return view('backend.blog.list', compact('title', 'blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Thêm mới bài viết';
        return view('backend.blog.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $result = $this->blog->createBlog($request);
        if ($result) return redirect()->route('blog.index');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            abort(404);
        }
        $title = 'Chỉnh sửa bài viết: ' . $blog->name;
        return view('backend.blog.edit', compact('title', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, string $id)
    {
        $blog = Blog::find($id);
        if (!$blog) abort(404);
        $result = $this->blog->updateBlog($request, $blog);
        if ($result) return redirect()->route('blog.index');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        if (!$blog) abort(404);
        $this->blog->deleteBlog($blog);
        return redirect()->back();
    }
}
