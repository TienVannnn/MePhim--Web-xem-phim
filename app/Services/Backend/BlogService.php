<?php

namespace App\Services\Backend;

use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BlogService
{
    public function getDataBlogs()
    {
        $data = Blog::orderByDesc('id')->paginate(10);
        return $data;
    }

    public function createBlog($request)
    {
        $request->validated();
        try {
            DB::beginTransaction();
            $image = $request->image;
            $new_image = time() . '_' . $image->getClientOriginalName();
            $path = './uploads/blogs/';

            $data = array_merge($request->except('image'), ['image' => $new_image]);
            Blog::create($data);

            DB::commit();
            $image->move($path, $new_image);
            Session::flash('success', 'Thêm mới bài viết thành công');
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            Session::flash('err', 'Thêm mới bài viết thất bại: ' . $e->getMessage());
            return false;
        }
    }

    public function updateBlog($request, $blog)
    {
        $request->validated();
        $name = $blog->name;
        try {
            if ($request->image) {
                $name_image = $request->image;
                $new_image = time() . '_' . $name_image->getClientOriginalName();
                $path = './uploads/blogs/';
                $name_image->move($path, $new_image);
                $old_path = $path . $blog->image;
                if (file_exists(public_path($old_path))) {
                    unlink(public_path($old_path));
                }
                $blog->image = $new_image;
            }
            $blog->fill([
                'name' => $request->name,
                'slug' => $request->slug,
                'active' => $request->active,
                'content' => $request->content
            ]);
            $blog->save();
            DB::commit();
            Session::flash('success', 'Chỉnh sửa bài viết: ' . $blog->name . ' thành công');
            return true;
        } catch (\Exception $e) {
            DB::rollBack();
            Session::flash('err', 'Chỉnh sửa bài viết ' . $name . ' thất bại: ' .  $e->getMessage());
            return false;
        }
    }

    public function deleteBlog($blog)
    {
        try {
            $path = './uploads/blogs/' . $blog->image;
            if (file_exists(public_path($path))) {
                unlink(public_path($path));
            }
            $blog->delete();
            Session::flash('success', 'Xóa bài biết thành công');
        } catch (\Exception $e) {
            Session::flash('error', 'Xóa bài viết thất bại');
        }
        return;
    }
}
