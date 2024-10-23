<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function form_login()
    {
        $title = 'Đăng nhập hệ thống admin Mê Phim';
        return view('backend.auth.formLogin', compact('title'));
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('manager')->attempt($credentials, $request->has('remember'))) {
            Session::flash('success', 'Đăng nhập thành công vào Admin');
            return redirect()->route('admin.dashboard');
        }
        Session::flash('error', 'Email hoặc mật khẩu không hợp lệ');
        return redirect()->route('login');
    }

    public function logout()
    {
        if (Auth::guard('manager')->check()) {
            Auth::guard('manager')->logout();
            Session::flash('success', 'Đăng xuất admin thành công');
            return redirect()->route('login');
        } else return redirect()->route('login');
    }
}
