<?php

namespace App\Services;
use App\Models\Movie;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ApiService{
    protected $client;
    protected $apiKey;
    protected $apiHost;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('RAPIDAPI_KEY'); // Ambil API key
        $this->apiHost = env('RAPIDAPI_HOST'); // Ambil API host

    }

    public function getRecommendatioAnime($page){
        $url = "https://myanimelist-api1.p.rapidapi.com/anime/recommendations?p={$page}";

        $headers = [
            'X-RapidAPI-Key' => $this->apiKey,
            'X-RapidAPI-Host' => $this->apiHost
        ];

        $response = Http::withHeaders($headers)->get($url);
        if ($response->successful()) {
            return $response->json();
        } else {
            return null;
        }
    }
    public function getTopAnime($top, $page = 1)
    {
        $url = "https://myanimelist-api1.p.rapidapi.com/anime/top/{$top}?p={$page}";

        $headers = [
            'X-RapidAPI-Key' => env('RAPIDAPI_KEY'),
            'X-RapidAPI-Host' => env('RAPIDAPI_HOST')
        ];

        $response = Http::withHeaders($headers)->get($url);
        if ($response->successful()) {
            return $response->json();
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }

    public function getSeasonAnime($year, $season)
    {
        $url = "https://myanimelist-api1.p.rapidapi.com/anime/seasonal?year={$year}&season={$season}";

        $headers = [
            'X-RapidAPI-Key' => env('RAPIDAPI_KEY'),
            'X-RapidAPI-Host' => env('RAPIDAPI_HOST')
        ];

        $response = Http::withHeaders($headers)->get($url);
        if ($response->successful()) {
            return $response->json();
        } else {
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        }
    }
}
