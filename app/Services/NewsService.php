<?php
namespace App\Services;

use App\Helpers\ImageHelper;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NewsService
{
    protected $apiKey;

    public function __construct(){
        $this->apiKey = config('app.newsApiKey');        
    }


    public function getlatestNews(){ 
                 
        try {
            $response = Http::get('https://api.marketaux.com/v1/news/all', [   
                'industries'=>'Financial',
                'entity_types' =>'cryptocurrency,equity,currency',
                'filter_entities' => true,
                'language' => 'en',
                'limit' => 50,
                'api_token' => $this->apiKey,             
            ]);            
            
            if ($response->failed()) {
                throw new Exception('Failed to fetch news');
            }
            $data = $response->json();            
    
            $blogs = collect($data["data"])->map(function ($el) {
                $imgURL = $el['image_url'];
                if (!ImageHelper::isValidImage($imgURL)) {
                    $imgURL = asset('images/landing/blog-placeholder.jpg');
                }
                return [
                    'urlToImage' => $imgURL,
                    'url' => $el['url'],
                    'title' => $el['title'],
                    'snippet' => $el['snippet'],
                    'time' => $el['published_at'],
                    'source' => $el['source'],
                ];
            });           
    
            return $blogs;           
        } catch (\Exception $e) {
            Log::error('Error fetching news: ' . $e->getMessage());
            return collect();
        }
    }
}