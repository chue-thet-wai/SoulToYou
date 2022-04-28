<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

//Admin
Route::group(['prefix'=>'admin','namespace'=>'App\Http\Controllers\Admin','middleware'=>['admin']],function(){
    Route::resource('news','IdolNewsController');
    Route::resource('mtvs','IdolMtvController');
    Route::resource('bands','IdolBandsController');
    Route::resource('albums','IdolAlbumController');
    Route::resource('artists','IdolArtistController');
    Route::resource('quiz','IdolQuizzesController'); 
    Route::get('/userlist','IdolManageUser@show_userlist');   
    Route::get('/profile','IdolManageUser@show_profile'); 
    Route::get('/logout','IdolManageUser@logout');   
});

/*Route::group(['prefix'=>'admin','namespace'=>'App\Http\Controllers\Admin','middleware'=>'auth'],function(){  
});*/



//Api
/*Route::group(['prefix'=>'api','namespace'=>'App\Http\Controllers\Api'],function(){
    Route::post('register','ApiController@register');
    Route::post('login','ApiController@login');   
    
});*/

/*Route::group(['prefix'=>'api','namespace'=>'App\Http\Controllers\Api','middleware'=>['auth:sanctum']],function(){
    Route::post('profile','ApiController@profile');
});*/
//Route::middleware('auth:sanctum')->get('/profile', [App\Http\Controllers\Api\ApiController::class, 'profile']);


//User
Route::get('/',[App\Http\Controllers\UserHomeController::class, 'home_user']);
Route::get('/news',[App\Http\Controllers\UserHomeController::class, 'user_news']);
Route::get('/news/detail/{id}', [App\Http\Controllers\UserHomeController::class, 'user_news_detail']);
Route::get('/videos',[App\Http\Controllers\UserHomeController::class, 'user_videos']);
Route::get('/artists',[App\Http\Controllers\UserHomeController::class, 'user_artists']);


//Login
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/facebook', [App\Http\Controllers\SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [App\Http\Controllers\SocialController::class, 'loginWithFacebook']);

Route::get('auth/google', [App\Http\Controllers\SocialController::class, 'googleRedirect']);
Route::get('auth/google/callback', [App\Http\Controllers\SocialController::class, 'loginWithGoogle']);


