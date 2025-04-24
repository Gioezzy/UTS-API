<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ApiService;
use Illuminate\Http\Request;

class Anime extends Controller
{
    protected $apiService;

    public function __construct(ApiService $apiService){
        $this->apiService = $apiService;
    }
    public function index($page = 1)
    {
        $anime = $this->apiService->getRecommendatioAnime($page);

        if (!$anime) {
            return response()->json(['error' => 'Failed to fetch anime data'], 500);
        }

        return view('main', [
            'title' => 'Anime',
            'anime' => $anime,
            'page' => $page,
            'nextPage' => $page + 1,
            'prevPage' => $page > 1 ? $page - 1 : 1,
        ]);
    }


    public function top($top, $page = 1)
    {
        $anime = $this->apiService->getTopAnime($top, $page);

        if (!$anime) {
            return response()->json(['error' => 'Failed to fetch anime data'], 500);
        }

        return view('top', [
            'title' => 'Top Anime',
            'anime' => $anime,
            'page' => $page,
            'nextPage' => $page + 1,
            'prevPage' => $page > 1 ? $page - 1 : 1,
        ]);
    }

    public function season($year, $season)
    {
        $anime = $this->apiService->getSeasonAnime($year, $season);

        if (!$anime) {
            return response()->json(['error' => 'Failed to fetch anime data'], 500);
        }
        //return response()->json($anime);
        return view('season', [
            'title' => 'Season Anime',
            'anime' => $anime,
            'year' => $year,
            'season' => $season,
        ]);
    }
}
