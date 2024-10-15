<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Front\HomeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    protected $home;
    public function __construct(HomeService $home)
    {
        $this -> home = $home;
    }
    public function home(){
        $data = $this->home->getAllData();
        $phimLe = $data['phimLe'] ?? [];
        $phimBo = $data['phimBo'] ?? [];
        $hoatHinh = $data['hoatHinh'] ?? [];
        $tvShows = $data['tvShows'] ?? [];
        $moiRaMat = $data['moiRaMat'] ?? [];
        // dd($phimLe, $phimBo, $hoatHinh, $tvShows);
        return view('front.Home.home', compact('phimLe', 'phimBo', 'hoatHinh', 'tvShows', 'moiRaMat'));
    }
}
