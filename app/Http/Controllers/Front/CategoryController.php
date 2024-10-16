<?php

namespace App\Http\Controllers\Front;
use App\Services\Front\CategoryService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryService $cate)
    {
        $this -> categoryService = $cate;
    }
    public function category($slug, Request $request)
    {
        $page = $request->query('page', 1);
        $data = $this->categoryService->getData($slug, $page);

        $film = $data['film'] ?? [];
        $moiRaMat = $data['moiRaMat'] ?? [];
        $title = $film['data']['seoOnPage']['titleHead'] ?? '';
        $titleBread = $film['data']['breadCrumb'][0]['name'] ?? '';
        $totalPage = $film['data']['params']['pagination']['totalPages'] ?? 1;
        if (!$film) {
            abort(404);
        }
        $currentPage = $page;
        $items = $film['data']['items'] ?? [];
        $perPage = 15;
        $pagination = new LengthAwarePaginator(
            $items,
            $film['data']['params']['pagination']['totalItems'],
            $perPage,
            $currentPage,
            ['path' => url()->current()]
        );

        return view('front.category.category', compact('film', 'title', 'moiRaMat', 'pagination', 'titleBread'));
    }
}
