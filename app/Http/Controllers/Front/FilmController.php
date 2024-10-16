<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Front\FilmService;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    protected $filmService;
    public function __construct(FilmService $service)
    {
        $this -> filmService = $service;
    }
    public function detail_film($slug){
        $data = $this -> filmService -> getData($slug);
        if(!$data){
            abort(404);
        }
        $movie = $data['movie'];
        $episodes = $data['episodes'];
        $title = $movie['name'] . ' | ' . $movie['lang'] . ' - '. $movie['quality'];
        $titleBread = $movie['name'];
        return view('front.film.detail_film', compact('title', 'movie', 'episodes', 'titleBread'));
    }
}
