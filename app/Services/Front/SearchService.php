<?php

namespace App\Services\Front;

use Illuminate\Support\Facades\Http;

class SearchService{
    public function getData($text){
        $res = Http::get('https://phimapi.com/v1/api/tim-kiem?keyword='. $text . '&limit=16');
        if($res -> ok()){
            return $res -> json();
        }
        return null;
    }
}
