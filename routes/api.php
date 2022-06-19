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
    Route::post('update_profile', [ApiController::class, 'update_profile']);
    Route::post('home_slider', [ApiController::class, 'home_slider']);
    Route::post('single_artists', [ApiController::class, 'single_artists']);
    Route::post('news', [ApiController::class, 'news_list']);
    Route::post('news_bytype', [ApiController::class, 'news_list_bytype']);
    Route::post('new_detail', [ApiController::class, 'new_detail']);
    Route::post('mtvs', [ApiController::class, 'mtvs_list']);
    Route::post('band_detail', [ApiController::class, 'band_detail']);
    Route::post('bands_group', [ApiController::class, 'bands_group']);
    Route::post('bands_group_bytype', [ApiController::class, 'bands_group_bytype']);
    Route::post('single_artists_detail', [ApiController::class, 'single_artists_detail']);
    Route::post('artist_detail', [ApiController::class, 'artist_detail']);

    Route::post('add_like_unlike', [ApiController::class, 'add_like_unlike']);
    Route::post('add_comment', [ApiController::class, 'add_comment']);
    Route::post('get_comment', [ApiController::class, 'get_comment']);
    Route::post('add_favourite', [ApiController::class, 'add_favourite']);
    Route::post('get_favourite_news', [ApiController::class, 'get_favourite_news']);
    Route::post('get_favourite_videos', [ApiController::class, 'get_favourite_videos']);
    Route::post('get_favourite_bands', [ApiController::class, 'get_favourite_bands']);
    Route::post('get_favourite_solo', [ApiController::class, 'get_favourite_solo']);

    Route::post('quiz', [ApiController::class, 'quiz_list']);
    Route::post('add_quiz_result', [ApiController::class, 'add_quiz_result']);
    Route::post('get_quiz_result', [ApiController::class, 'get_quiz_result']);
});

Route::post('login', [ApiController::class, 'login']);
Route::post('register', [ApiController::class, 'register']);
