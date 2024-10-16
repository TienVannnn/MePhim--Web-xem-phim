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

        $phimLe = $data['phimLe'] ?? [];
        $moiRaMat = $data['moiRaMat'] ?? [];
        $title = $phimLe['data']['seoOnPage']['titleHead'] ?? '';
        $totalPage = $phimLe['data']['params']['pagination']['totalPages'] ?? 1;
        if (!$phimLe) {
            abort(404);
        }
        $currentPage = $page;
        $items = $phimLe['data']['items'] ?? [];
        $perPage = 15;
        $pagination = new LengthAwarePaginator(
            $items,
            $phimLe['data']['params']['pagination']['totalItems'],
            $perPage,
            $currentPage,
            ['path' => url()->current()]
        );

        return view('front.category.category', compact('phimLe', 'title', 'moiRaMat', 'pagination'));
    }
}
