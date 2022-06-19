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
    Route::get('userlist/edit/{id}','IdolManageUser@edit_user'); 
    Route::post('userlist/update/{id}','IdolManageUser@update_user'); 
    Route::post('userlist/delete/{id}','IdolManageUser@destroy_user');   
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
Route::get('/news/{type}',[App\Http\Controllers\UserHomeController::class, 'user_news']);
Route::get('/news/detail/{id}', [App\Http\Controllers\UserHomeController::class, 'user_news_detail']);
Route::get('/videos',[App\Http\Controllers\UserHomeController::class, 'user_videos']);
Route::get('/artists',[App\Http\Controllers\UserHomeController::class, 'user_artists']);
Route::get('/artists/detail/{id}',[App\Http\Controllers\UserHomeController::class, 'user_artists_detail']);
Route::get('/artists/boygroup',[App\Http\Controllers\UserHomeController::class, 'user_artists_boygroup']);
Route::get('/artists/girlgroup',[App\Http\Controllers\UserHomeController::class, 'user_artists_girlgroup']);
Route::get('/artists/solo',[App\Http\Controllers\UserHomeController::class, 'user_artists_solo']);

//Saved
Route::get('/saved_news',[App\Http\Controllers\UserHomeController::class, 'show_usersavednews']);
Route::get('/saved_videos',[App\Http\Controllers\UserHomeController::class, 'show_usersavedvideos']);
Route::get('/saved_artists',[App\Http\Controllers\UserHomeController::class, 'show_usersavedartists']);
Route::get('/saved_bands',[App\Http\Controllers\UserHomeController::class, 'show_usersavedbands']);

//Ajax
Route::group(['namespace'=>'App\Http\Controllers'],function(){
    Route::post('isReact','AjaxController@isReact');
});


//Login
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout',[App\Http\Controllers\UserHomeController::class, 'logout']);

Route::get('auth/facebook', [App\Http\Controllers\SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [App\Http\Controllers\SocialController::class, 'loginWithFacebook']);

Route::get('auth/google', [App\Http\Controllers\SocialController::class, 'googleRedirect']);
Route::get('auth/google/callback', [App\Http\Controllers\SocialController::class, 'loginWithGoogle']);


