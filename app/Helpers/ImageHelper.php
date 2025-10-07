<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ImageHelper
{
    public static function isValidImage($url){
        try {
            $response = Http::head($url);
            $contentType = $response->header('Content-Type');
            return in_array($contentType, [
                'image/jpeg',
                'image/png',
                'image/gif',
                'image/bmp',
                'image/svg+xml',
                'image/webp',
            ]);
        } catch (\Throwable $th) {
            Log::info($th->getMessage());
            return false;
        }
    }
}