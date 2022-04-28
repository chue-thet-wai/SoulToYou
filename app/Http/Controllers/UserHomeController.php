<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\IdolNewsController;

class UserHomeController extends Controller
{
    public function home_user()
    {
        $bands_res = DB::select('select * from idol_bands');

        $breaking_new = DB::select('select * from idol_news where type="1" order by created_at limit 1');
        $trending_new = DB::select('select * from idol_news where type="2" order by created_at limit 1');
        $popular_new = DB::select('select * from idol_news where type="3" order by created_at limit 1');

        $mtv_res = DB::select('select * from idol_mtvs order by created_at limit 6');   
        
        $solo_res = DB::select('select * from idol_artists where band_id="99" ');

        return view('welcome',['bands_slide' => $bands_res,"breaking_new"=>$breaking_new,"trending_new"=>$trending_new,
        "popular_new"=>$popular_new,"mtv_list"=>$mtv_res,"solo_res"=>$solo_res]);
    }

    public function user_news()
    {
        $allnews_res = DB::select('select * from idol_news order by created_at');

        $breaking_new = DB::select('select * from idol_news where type="1" order by created_at');
        $trending_new = DB::select('select * from idol_news where type="2" order by created_at');
        $popular_new = DB::select('select * from idol_news where type="3" order by created_at');

        $news_type=(new IdolNewsController)->news_type();

        return view('user.news',['allnews_res' => $allnews_res,"breaking_new"=>$breaking_new,"trending_new"=>$trending_new,
        "popular_new"=>$popular_new,"news_type"=>$news_type]);
    }

    public function user_news_detail($id)
    {
        $new_detail_res = DB::select('select * from idol_news where new_id="'.$id.'"'); 
       
        $new_detail_related = DB::select('select * from idol_news where type="'.$new_detail_res[0]->type.'" and 
                                        new_id !="'.$new_detail_res[0]->new_id.'"');   
        
        $news_type=(new IdolNewsController)->news_type();

        return view('user.news_detail',['new_detail_res' => $new_detail_res,"news_type"=>$news_type,"related_news"=>$new_detail_related]);
    }

    public function user_videos()
    {
        $bands_res = DB::select('select * from idol_news');
        return view('user.videos',['idol_videos' => $bands_res]);
    }

    public function user_artists()
    {
        $artists_res = DB::select('select * from idol_artists');
        return view('user.artists',['idol_artists' => $artists_res]);
    }
}
