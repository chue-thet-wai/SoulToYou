<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\IdolNewsController;

class ApiController extends Controller
{

    public function login(Request $request)
    {
        $response=array();
        
        if($request->type=="facebook"){
            $isUser = User::where('fb_id', $request->facebook_id)->first();
     
            if($isUser){
                Auth::login($isUser);
                $isUser->tokens()->delete();
                $token=$isUser->createToken("Soul2U".$isUser->id); 
                  
                $response['status'] = "00";
                $response['token'] = $token->plainTextToken;
                $response['user'] = $isUser->only(['email','id']);
                $response['message'] = "Login Success";
                
            }else{
                $u=new User();
                $u->name         =$request->name;
                $u->email        =$request->email;
                $u->fb_id        =$request->facebook_id;
                $u->password     = bcrypt('fb@123');
                $u->save();   
    
                Auth::login($u);
                $token=$u->createToken("Soul2U".$u->id);   
                
                $response['status'] = "00";
                $response['token'] = $token->plainTextToken;
                $response['user'] = $u->only(['email','id']);
                $response['message'] = "Login Success";
            }
    
        }else if($request->type=="google"){
            $isUser = User::where('google_id', $request->google_id)->first();
     
            if($isUser){
                Auth::login($isUser);
                $isUser->tokens()->delete();
                $token=$isUser->createToken("Soul2U".$isUser->id); 
                
                $response['status'] = "00";
                $response['token'] = $token->plainTextToken;
                $response['user'] = $isUser->only(['email','id']);
                $response['message'] = "Login Success";
                
            }else{
                $u=new User();
                $u->name         =$request->name;
                $u->email        =$request->email;
                $u->fb_id        =$request->facebook_id;
                $u->password     = bcrypt('fb@123');
                $u->save();   
    
                Auth::login($u);
                $token=$u->createToken("Soul2U".$u->id); 
                
                $response['status'] = "00";
                $response['token'] = $token->plainTextToken;
                $response['user'] = $u->only(['email','id']);
                $response['message'] = "Login Success";
            }
            
        }else{
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);
    
            if ($validator->fails()) {
                $response['status'] = "01";
                $response['message'] = $validator->errors()->first();
            }
    
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    
                $user = Auth::user();
    
                $token=$user->createToken("Soul2U".$user->id);
                
                $response['status'] = "00";
                $response['token'] = $token->plainTextToken;
                $response['user'] = $user->only(['email','id']);
                $response['message'] = "Login Success";
    
            } else {
                $response['status'] = "01";
                $response['message'] = "Credentials do not match";
            }
        }
        
        return response()->json($response);
    }


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|max:255|email|unique:users,email',
            'password'          => array(
                'required',
                'different:name',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'
            ),
        ],['password.regex'=>trans('messages.password_regex')]);


        if ($validator->fails()) {
            $response['message'] = $validator->errors()->first();
            return response()->json($response);
        }

        $user_info = new User();
        $user_info->name = $request->name;
        $user_info->email = $request->email;
        $user_info->password = bcrypt($request->password);
        $user_info->save();


        $token=$user_info->createToken("Soul2U".$user_info->id);

        $response['status'] = "00";
        $response['message'] = "Register Success";
        $response['token'] = $token->plainTextToken;
        $response['user'] = $user_info->only(['email','id']);
   
        return response()->json($response);

    }

    public function profile(Request $request){
        $user=auth()->user();
        return response()->json([
            'status' => "00",
            'message'=>"Successful",
            'data'   =>$user,
        ]);
    }

    public function home_slider(Request $request){
        $slider_res = DB::select('select * from idol_bands order by created_at');

        $slider_arr=array();
        foreach($slider_res as $n){
            $slider_one=array();
            $slider_one['band_id']  =$n->band_id;
            $slider_one['name']    =$n->name;
            $slider_one['main_image']   =asset('bands_images/'.$n->main_image);
            $slider_one['twitter_subscriber']  =$n->twitter_subscriber;
            $slider_one['instagram_subscriber']=$n->instagram_subscriber;
            $slider_arr[]=$slider_one;
        }       

        return response()->json([
            'status' => "00",
            'message'=>"Successful",
            'data'=>$slider_arr,
        ]);
    }

    public function single_artists(Request $request){
        $solo_res = DB::select('select idol_artists.* from idol_artists left join idol_bands on idol_artists.band_id=idol_bands.band_id
        where idol_bands.band_type="12"');

        $solo_arr=array();
        foreach($solo_res as $n){
            $solo_one=array();
            $solo_one['artist_id']   =$n->artist_id;
            $solo_one['name']        =$n->name;
            $solo_one['main_image']       =asset('artists_images/'.$n->main_image);
           
            $solo_arr[]=$solo_one;
        }       

        return response()->json([
            'status' => "00",
            'message'=>"Successful",
            'data'=>$solo_arr,
        ]);
    }

    public function news_list(){
        $allnews_res = DB::select('select * from idol_news order by created_at');
        $news_type=(new IdolNewsController)->news_type();

        $news_arr=array();
        foreach($allnews_res as $n){
            $new_one=array();
            $new_one['new_id']=$n->new_id;
            $new_one['title']=$n->title;
            $new_one['title_mm']=$n->title_mm;
            $new_one['descritpion']=$n->description;
            $new_one['description_mm']=$n->description_mm;
            $new_one['image']=asset('news_images/'.$n->image);
            $new_one['type']=$news_type[$n->type];

            $news_arr[]=$new_one;

        }

        return response()->json([
            'status' => "00",
            'message'=>"Successful",
            'data'=>$news_arr,
        ]);
    }

    public function news_list_bytype(Request $request){
        $return_arr=array();
        if(!$request->type){
            $return_arr['status']="01";
            $return_arr['message']='Need New Type';
        }else{
            $type=$request->type;
            $allnews_res = DB::select('select * from idol_news where type ="'.$type.'" order by created_at');
            $news_type=(new IdolNewsController)->news_type();
            $news_arr=array();
            foreach($allnews_res as $n){
                $new_one=array();
                $new_one['new_id']=$n->new_id;
                $new_one['title']=$n->title;
                $new_one['title_mm']=$n->title_mm;
                $new_one['descritpion']=$n->description;
                $new_one['description_mm']=$n->description_mm;
                $new_one['image']=asset('news_images/'.$n->image);
                $new_one['type']=$news_type[$n->type];

                $news_arr[]=$new_one;

            }
            $return_arr['status']="00";
            $return_arr['message']='Success';
            $return_arr['data']=$news_arr;
        }
        

        return response()->json($return_arr);
    }

    public function band_detail(Request $request){
        $return_arr=array();
        if(!$request->band_id){
            $return_arr['status']="01";
            $return_arr['message']='Need Band ID';
        }else{
            $band_id=$request->band_id;
            $band_res = DB::select('select * from idol_bands where band_id ="'.$band_id.'"');

            $artists_res = DB::select('select * from idol_artists where band_id ="'.$band_id.'"');
           
            $band_detail_arr=array();
            $band_arr=array();
            foreach($band_res as $n){
                $band_arr['band_id'] =$n->band_id;
                $band_arr['name']    =$n->name;
                $band_arr['about']   =$n->about;
                $band_arr['about_mm']=$n->about_mm;
                $band_arr['main_image']=asset('bands_images/'.$n->main_image);
                $band_images=array();
                foreach(json_decode($n->images) as $img){
                    $band_images[]=asset('bands_images/'.$img);
                }
                $band_arr['images']=$band_images;
            }

            $current_artists=array();
            $former_artists=array();
            foreach($artists_res as $a){
                $artist=array();
                $artist['artist_id']=$a->artist_id;
                $artist['band_id']  =$a->band_id;
                $artist['member_type'] =$a->member_type;
                $artist['name']        =$a->name;
                $artist['main_image']        =asset('news_images/'.$a->main_image);

                if($a->member_type=="100"){//New Member
                    $current_artists[]=$artist;
                }else{//Old Member
                    $former_artists[]=$artist;
                }
            }
            $band_detail_arr["band_detail"]=$band_arr;
            $band_detail_arr["current_artists"]=$current_artists;
            $band_detail_arr["former_artists"] =$former_artists;
            $return_arr['status']="00";
            $return_arr['message']='Success';
            $return_arr['data']=$band_detail_arr;
        }
        

        return response()->json($return_arr);
    }

    public function bands_group(Request $request){
        $return_arr=array();

        $bands_res = DB::select('select * from idol_bands order by created_at');
        
        $bands_arr=array();

        $boy_group=array();
        $girl_group=array();
        $solo_group=array();
        foreach($bands_res as $n){
            $band_arr['band_id'] =$n->band_id;
            $band_arr['name']    =$n->name;
            $band_arr['about']   =$n->about;
            $band_arr['about_mm']=$n->about_mm;
            $band_arr['main_image']=asset('bands_images/'.$n->main_image);
            $band_images=array();
            foreach(json_decode($n->images) as $img){
                $band_images[]=asset('bands_images/'.$img);
            }
            $band_arr['images']=$band_images;

            if($n->band_type=="10"){
                $girl_group[]=$band_arr;
            }else if($n->band_type=="11"){
                $boy_group[]=$band_arr;
            }else{
                $solo_group[]=$band_arr;
            }
        }

        
        $bands_arr["boy_group"]=$boy_group;
        $bands_arr["girl_group"]=$girl_group;
        $bands_arr["solo_group"]=$solo_group;

        $return_arr['status']="00";
        $return_arr['message']='Success';
        $return_arr['data']=$bands_arr; 
    

        return response()->json($return_arr);
    }
     
    public function artist_detail(Request $request){
        $return_arr=array();
        if(!$request->artist_id){
            $return_arr['status']="01";
            $return_arr['message']='Need Artist ID';
        }else{
            $artist_id=$request->artist_id;
            $artist_res = DB::select('select a.*,b.band_type,b.instagram_subscriber,b.twitter_subscriber from idol_artists as a 
            left join idol_bands as b on a.band_id = b.band_id 
            where artist_id ="'.$artist_id.'"');
           
           // $artist_detail_arr=array();

            $artist_arr=array();
            foreach($artist_res as $n){
                $artist_arr['artist_id']      =$n->artist_id;
                $artist_arr['name']           =$n->name;
                $artist_arr['band_type']      =$n->band_type;
                $artist_arr['instagram_subscriber']=$n->instagram_subscriber;
                $artist_arr['twitter_subscriber']  =$n->twitter_subscriber;
                $artist_arr['birth_name']    =$n->birth_name;
                $artist_arr['korea_name']    =$n->korea_name;
                $artist_arr['birth_date']    =$n->birth_date;
                $artist_arr['zondic']        =$n->zondic;
                $artist_arr['height']        =$n->height;
                $artist_arr['blood_type']    =$n->blood_type;
                $artist_arr['mbti']          =$n->mbti;
                $artist_arr['about']   =$n->about;
                $artist_arr['about_mm']=$n->about_mm;
                $artist_arr['main_image']=asset('bands_images/'.$n->main_image);
                $artist_images=array();
                foreach(json_decode($n->images) as $img){
                    $artist_images[]=asset('artists_images/'.$img);
                }
                $artist_arr['images']=$artist_images;
            }

            $return_arr['status']="00";
            $return_arr['message']='Success';
            $return_arr['data']=$artist_arr;
        }
        

        return response()->json($return_arr);
    } 
    
    public function bands_group_bytype(Request $request){
        $return_arr=array();
        if(!$request->band_type){
            $return_arr['status']="01";
            $return_arr['message']='Need Band Type';
        }else{
            $band_type=$request->band_type;
            $bands_res = DB::select('select * from idol_bands where band_type="'.$band_type.'" order by created_at');
        
            $bands_group=array();
           
            foreach($bands_res as $n){
                $bands_arr=array();
                $band_arr['band_id'] =$n->band_id;
                $band_arr['name']    =$n->name;
                $band_arr['about']   =$n->about;
                $band_arr['about_mm']=$n->about_mm;
                $band_arr['main_image']=asset('bands_images/'.$n->main_image);
                $band_images=array();
                foreach(json_decode($n->images) as $img){
                    $band_images[]=asset('bands_images/'.$img);
                }
                $band_arr['images']=$band_images;

                $bands_group[]=$band_arr;
            }

            $return_arr['status']="00";
            $return_arr['message']='Success';
            $return_arr['data']=$bands_group; 
            
        }
        

        return response()->json($return_arr);
    }    

}
