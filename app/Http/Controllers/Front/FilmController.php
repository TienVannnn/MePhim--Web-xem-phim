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

    public function film_watching($slug, $episodeSlug = null)
    {
        $data = $this->filmService->getData($slug);
        if (!$data) {
            abort(404);
        }

        $movie = $data['movie'];
        $episodes = $data['episodes'];

        $episode = collect($episodes)->flatMap(function ($server) {
            return $server['server_data'] ?? [];
        });

        if (!$episodeSlug) {
            $episode = $episode->first();
        } else {
            $episode = $episode->firstWhere('slug', $episodeSlug);
        }
        if (!$episode) {
            abort(404, 'Không tìm thấy tập.');
        }
        $titleBread = $movie['name'];
        $title = $episode['filename'];

        return view('front.film.film_watching', compact('movie', 'episodes', 'titleBread', 'title', 'episode'));
    }
}
