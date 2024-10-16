<?php
namespace App\Services\Front;

use Illuminate\Support\Facades\Http;

class CategoryService{
    public function getData($slug, $page = 1)
    {
        $responses = Http::pool(fn ($pool) => [
            $pool->as('phimLe')->get('https://phimapi.com/v1/api/danh-sach/' . $slug . '?limit=15&page=' . $page),
            $pool->as('moiRaMat')->get('https://phimapi.com/danh-sach/phim-moi-cap-nhat?limit=8'),
        ]);
        $data = [];
        if ($responses['phimLe']-> ok()) {
            $data['phimLe'] = $responses['phimLe']->json();
        }
        if ($responses['moiRaMat']-> ok()) {
            $data['moiRaMat'] = $responses['moiRaMat']->json();
        }
        return $data;
    }
}
