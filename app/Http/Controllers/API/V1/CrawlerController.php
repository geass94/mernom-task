<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Spatie\Crawler\Crawler;

class CrawlerController extends Controller
{
    public function __invoke(Request $request)
    {
        $website = $request->query('website');
        $pattern = '/^(https?:\/\/)?(www\.)?[\w\.-]+\.[a-z]{2,}\/?([^\s]*)?$/i';
        if (!preg_match($pattern, $website)) {
            return response()->json([
                'error' => 'Invalid website URL'
            ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
        }

        Crawler::create()->setMaximumDepth(0)->startCrawling($website);
    }
}
