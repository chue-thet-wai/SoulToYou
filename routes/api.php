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
    Route::post('news', [ApiController::class, 'news_list']);
    Route::post('news_bytype', [ApiController::class, 'news_list_bytype']);
});

Route::post('login', [ApiController::class, 'login']);
Route::post('register', [ApiController::class, 'register']);
