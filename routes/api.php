<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::middleware('auth:sanctum')->group( function () {
    Route::post('profile', [ApiController::class, 'profile']);
    Route::post('home_slider', [ApiController::class, 'home_slider']);
    Route::post('single_artists', [ApiController::class, 'single_artists']);
    Route::post('news', [ApiController::class, 'news_list']);
    Route::post('news_bytype', [ApiController::class, 'news_list_bytype']);
    Route::post('band_detail', [ApiController::class, 'band_detail']);
    Route::post('bands_group', [ApiController::class, 'bands_group']);
    Route::post('bands_group_bytype', [ApiController::class, 'bands_group_bytype']);
    Route::post('artist_detail', [ApiController::class, 'artist_detail']);
});

Route::post('login', [ApiController::class, 'login']);
Route::post('register', [ApiController::class, 'register']);
