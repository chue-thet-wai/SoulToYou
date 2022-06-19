<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\IdolNewsController;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class UserHomeController extends Controller
{
    public function logout()
    {        
        Auth::logout();
        return redirect('/');
    }
    
    public function home_user()
    {
        $bands_res = DB::select('select * from idol_bands where band_type != "12" order by created_at limit 4');

        $breaking_new = DB::select('select * from idol_news where type="1" order by created_at limit 1');
        $trending_new = DB::select('select * from idol_news where type="2" order by created_at limit 1');
        $popular_new = DB::select('select * from idol_news where type="3" order by created_at limit 1');

        $mtv_res = DB::select('select * from idol_mtvs order by created_at limit 6');   
        
        /*$solo_res = DB::select('select idol_artists.* from idol_artists left join idol_bands on idol_artists.band_id=idol_bands.band_id
         where idol_bands.band_type="12" ');*/
        $solo_res = DB::select('select * from idol_bands where band_type="12" ');

        return view('welcome',['bands_slide' => $bands_res,"breaking_new"=>$breaking_new,"trending_new"=>$trending_new,
        "popular_new"=>$popular_new,"mtv_list"=>$mtv_res,"solo_res"=>$solo_res]);
    }

    public function user_news($type=null)
    {
        if($type=="breaking"){
            $allnews_res = DB::select('select * from idol_news where type="1" order by created_at');
        }else if($type=="trending"){
            $allnews_res = DB::select('select * from idol_news where type="2" order by created_at');
        }else if($type=="popular"){
            $allnews_res = DB::select('select * from idol_news where type="3" order by created_at');
        }else{
            $allnews_res = DB::select('select * from idol_news order by created_at');
        }   

        $news_type=(new IdolNewsController)->news_type();

        return view('user.news',['allnews_res' => $allnews_res,"news_type"=>$news_type]);
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
        $bands_res = DB::table('idol_bands')
            ->paginate(3);      
        return view('user.artists',['idol_bands' => $bands_res]);
    }
    
    public function user_artists_detail($id)
    {
        $band_detail_res = DB::select('select * from idol_bands where band_id="'.$id.'"');        
        $current_members = DB::select('select * from idol_artists where band_id="'.$id.'" and 
                                        member_type =100'); 
        $old_members     = DB::select('select * from idol_artists where band_id="'.$id.'" and 
                                        member_type =101'); //old member type is 101
        $album_list      = DB::select('select * from idol_albums where band_id="'.$id.'"');
        $solo_res = DB::select('select idol_artists.* from idol_artists left join idol_bands on idol_artists.band_id=idol_bands.band_id
         where idol_bands.band_id="'.$id.'" ');
        $video_list      = DB::select('select m.* from idol_mtvs as m left join idol_albums as a on m.album_id=a.album_id
                           where a.band_id="'.$id.'"order by m.created_at limit 6');

        return view('user.artistsdetail',[
                    'band_detail_res' => $band_detail_res,
                    'current_members'=>$current_members,
                    'old_members'=>$old_members,
                    'album_list' =>$album_list,
                    'video_list' =>$video_list,
                    'solo_list'  =>$solo_res,
                ]);
    }

    public function user_artists_boygroup()
    {
       //boy group
        $boy_bands = DB::table('idol_bands')
        ->where("band_type","=","11")
        ->paginate(3); 
        
        return view('user.artists_boygroup',['boy_bands' => $boy_bands]);
    }
    public function user_artists_girlgroup()
    {
        $girl_bands = DB::table('idol_bands')
        ->where("band_type","=","10")
        ->paginate(3); 
        
        return view('user.artists_girlgroup',['girl_bands' => $girl_bands]);
    }
    public function user_artists_solo()
    {
        $solo_bands = DB::table('idol_bands')
        ->where("band_type","=","12")
        ->paginate(3); 
        return view('user.artists_solo',['solo_bands' => $solo_bands]);
    }

    //Saved
    public function show_usersavednews(){
        return view('user.save_news_artists');
    }
    public function show_usersavedvideos(){
        return view('user.save_videos_artists');
    }
    public function show_usersavedartists(){
        return view('user.save_solo_artists');
    }
    public function show_usersavedbands(){
        return view('user.save_group_artists');
    }
   

}
