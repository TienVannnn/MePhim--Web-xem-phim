<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form_login()
    {
        $title = 'Đăng nhập hệ thống admin Mê Phim';
        return view('backend.auth.formLogin', compact('title'));
    }
}
