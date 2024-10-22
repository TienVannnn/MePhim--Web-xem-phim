<?php

namespace App\Services\Front;

use Illuminate\Support\Facades\Http;

class FilmService{
    public function getData($slug){
        $res = Http::get('https://phimapi.com/phim/'. $slug);
        if($res['status']){
            return $res -> json();
        }
        return null;
    }
}
