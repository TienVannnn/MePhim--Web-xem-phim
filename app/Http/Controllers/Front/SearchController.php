<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Front\SearchService;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchController extends Controller
{
    protected $searchService;
    public function __construct(SearchService $search)
    {
        $this -> searchService = $search;
    }
    public function search_all_film(Request $request){
        $keyword = $request->input('keyword');
        $data = $this->searchService->getData($keyword);
        if(!$data){
            abort(404);
        }

        $title = $data['data']['titlePage'];
        $titleBread = 'Tìm kiếm';

        $page = $request->query('page', 1);
        $totalPage = $data['data']['params']['pagination']['totalPages'] ?? 1;
        $currentPage = $page;
        $items = $data['data']['items'] ?? [];
        $perPage = 16;
        $pagination = new LengthAwarePaginator(
            $items,
            $data['data']['params']['pagination']['totalItems'],
            $perPage,
            $currentPage,
            ['path' => url()->current(), 'query' => ['keyword' => $keyword]]
        );

        return view('front.search.search_all_film', compact('title', 'data', 'titleBread', 'pagination'));
    }
}
