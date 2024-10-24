<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class ReusableController extends Controller
{
    public function changeStatus($id, $slug)
    {
        switch ($slug) {
            case 'blog': {
                    $module = Blog::find($id);
                    break;
                }
        }
        if (!$module) {
            abort(404);
        }
        $module->update(['active' => !$module->active]);
        return response()->json([
            'status' => 200,
            'message' => 'Thay đổi trạng thái thành công'
        ]);
    }
}
