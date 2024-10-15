<?php
namespace App\Services\Front;

use Illuminate\Support\Facades\Http;

class HomeService{
    public function getAllData() {
        $responses = Http::pool(fn ($pool) => [
            $pool->as('phimLe')->get('https://phimapi.com/v1/api/danh-sach/phim-le?limit=6'),
            $pool->as('phimBo')->get('https://phimapi.com/v1/api/danh-sach/phim-bo?limit=6'),
            $pool->as('hoatHinh')->get('https://phimapi.com/v1/api/danh-sach/hoat-hinh?limit=6'),
            $pool->as('tvShows')->get('https://phimapi.com/v1/api/danh-sach/tv-shows?limit=6'),
            $pool->as('moiRaMat')->get('https://phimapi.com/danh-sach/phim-moi-cap-nhat'),
        ]);
        $data = [];
        if ($responses['phimLe']-> ok()) {
            $data['phimLe'] = $responses['phimLe']->json();
        }
        if ($responses['phimBo']-> ok()) {
            $data['phimBo'] = $responses['phimBo']->json();
        }
        if ($responses['hoatHinh']-> ok()) {
            $data['hoatHinh'] = $responses['hoatHinh']->json();
        }
        if ($responses['tvShows']-> ok()) {
            $data['tvShows'] = $responses['tvShows']->json();
        }
        if ($responses['moiRaMat']-> ok()) {
            $data['moiRaMat'] = $responses['moiRaMat']->json();
        }

        return $data;
    }
}
