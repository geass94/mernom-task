<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/v1'], function () {

    Route::group(['prefix' => '/posts'], function () {
        Route::get("/", [\App\Http\Controllers\API\V1\PostsController::class, 'getPosts']);
        Route::post("/", [\App\Http\Controllers\API\V1\PostsController::class, 'create']);
        Route::get("/{postId}", [\App\Http\Controllers\API\V1\PostsController::class, 'getPost']);
        Route::put("/{postId}", [\App\Http\Controllers\API\V1\PostsController::class, 'update']);
        Route::delete("/{delete}", [\App\Http\Controllers\API\V1\PostsController::class, 'delete']);
    });

    Route::get("/crawler", \App\Http\Controllers\API\V1\CrawlerController::class);

});
