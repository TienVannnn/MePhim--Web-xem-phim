<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function page_login(){
        if(Auth::check()){
            return redirect() -> route('home');
        }
        $title = 'Đăng nhập';
        return view('front.auth.login', compact('title'));
    }


    public function profile(){
        if(!Auth::check()){
            return redirect() -> route('front.login');
        }
        $title = 'Trang cá nhân';
        return view('front.profile.profile', compact('title'));
    }

    public function logout(){
        if(!Auth::check()){
            return redirect() -> route('front.login');
        }
        Auth::logout();
        return redirect() -> route('home');
    }
}
