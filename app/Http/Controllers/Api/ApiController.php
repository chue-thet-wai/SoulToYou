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
            $slider_one['image']   =asset('news_images/'.$n->main_image);
            $slider_one['twitter_subscriber']  =$n->twitter_subscriber;
            $slider_one['instagram_subscriber']=$n->instagram_subscriber;
            $slider_arr[]=$slider_one;
        }       

        return response()->json($slider_arr);
    }

    public function single_artists(Request $request){
        $solo_res = DB::select('select * from idol_artists where band_id="99" ');

        $solo_arr=array();
        foreach($slider_res as $n){
            $solo_one=array();
            $solo_one['artist_id']   =$n->artist_id;
            $solo_one['name']        =$n->name;
            $solo_one['image']       =asset('news_images/'.$n->main_image);
           
            $solo_arr[]=$solo_one;
        }       

        return response()->json($solo_arr);
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
    
    

}
