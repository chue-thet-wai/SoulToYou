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

    public function timeAgo($time_ago)
    {
        $time_ago = strtotime($time_ago);
        $cur_time   = time();
        $time_elapsed   = $cur_time - $time_ago;
        $seconds    = $time_elapsed ;
        $minutes    = round($time_elapsed / 60 );
        $hours      = round($time_elapsed / 3600);
        $days       = round($time_elapsed / 86400 );
        $weeks      = round($time_elapsed / 604800);
        $months     = round($time_elapsed / 2600640 );
        $years      = round($time_elapsed / 31207680 );
        // Seconds
        if($seconds <= 60){
            return "just now";
        }
        //Minutes
        else if($minutes <=60){
            if($minutes==1){
                return "1 minute";
            }
            else{
                return "$minutes minutes";
            }
        }
        //Hours
        else if($hours <=24){
            if($hours==1){
                return "1 hour";
            }else{
                return "$hours hours";
            }
        }
        //Days
        else if($days <= 7){
            if($days==1){
                return "1 day";
            }else{
                return "$days days";
            }
        }
        //Weeks
        else if($weeks <= 4.3){
            if($weeks==1){
                return "1 week";
            }else{
                return "$weeks weeks";
            }
        }
        //Months
        else if($months <=12){
            if($months==1){
                return "1 month";
            }else{
                return "$months months";
            }
        }
        //Years
        else{
            if($years==1){
                return "1 year";
            }else{
                return "$years years";
            }
        }
    }
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
        $user_id=$user->id;
        $user_res = DB::select('select * from users where id='.$user_id);

        $user_arr=array();
        if($user_res){
            $user_res=$user_res[0];
            $user_arr["name"]=$user_res->name;
            $user_arr["email"]=$user_res->email;
            $user_arr["phone"]=$user_res->phone;
            if($user_res->image !=""){
                $user_arr["image"]=asset('user_profile/'.$user_res->image);
            }else{
                $user_arr["image"]="";
            }
            
        }
        return response()->json([
            'status' => "00",
            'message'=>"Successful",
            'data'   =>$user_arr,
        ]);
    }

    public function update_profile(Request $request){
        $user=auth()->user();
        $user_id=$user->id;
        $request->validate([
            'name'  =>'min:3',
            'phone  '=>'min:3',
        ]);

        $fields=array(
            'phone'         => $request->phone,
            'name'          => $request->name,
        );
         
        if($request->image){
            //decode string base64 image to image 
            $image = base64_decode($request->image);
            //create image name
            $extension="png";
            $image_name = $user_id . "_" . time() . "." . $extension;
            
           // $image->move(public_path('user_profile'),$image_name);
           $file =public_path('user_profile') .'/'. $image_name;
           file_put_contents($file, $image);
            $fields['image']=$image_name;
        }
        
        $result=DB::table('users')
            ->where('id', $user_id)  
            ->limit(1)
            ->update($fields);  
        if($result){
            $user_res = DB::select('select * from users where id='.$user_id);

            $user_arr=array();
            if($user_res){
                $user_res=$user_res[0];
                $user_arr["name"]=$user_res->name;
                $user_arr["email"]=$user_res->email;
                $user_arr["phone"]=$user_res->phone;
                if($user_res->image !=""){
                    $user_arr["image"]=asset('user_profile/'.$user_res->image);
                }else{
                    $user_arr["image"]="";
                }
                
            }
            return response()->json([
                'status' => "00",
                'message'=>"Profile Update Successful",
                'data'   =>$user_arr,
            ]);
        }else{
            $user_res = DB::select('select * from users where id='.$user_id);

            $user_arr=array();
            if($user_res){
                $user_res=$user_res[0];
                $user_arr["name"]=$user_res->name;
                $user_arr["email"]=$user_res->email;
                $user_arr["phone"]=$user_res->phone;
                if($user_res->image !=""){
                    $user_arr["image"]=asset('user_profile/'.$user_res->image);
                }else{
                    $user_arr["image"]="";
                }
                
            }
            return response()->json([
                'status' => "01",
                'message'=>"Profile Update Fail",
                'data'   =>$user_arr,
            ]);
        }
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
        $solo_res = DB::select('select * from idol_bands where band_type="12"');

        $solo_arr=array();
        foreach($solo_res as $n){
            $solo_one=array();
            $solo_one['band_id']     =$n->band_id;
            $solo_one['name']        =$n->name;
            $solo_one['main_image']       =asset('bands_images/'.$n->main_image);
           
            $solo_arr[]=$solo_one;
        }       

        return response()->json([
            'status' => "00",
            'message'=>"Successful",
            'data'=>$solo_arr,
        ]);
    }

    public function news_list(){
        $user=auth()->user();
        $user_id=$user->id;

        $allnews_res = DB::select('select * from idol_news as n
                        left join (select content_id as rcontent_id,is_like as like_reaction 
                                    from idol_reactions where user_id='.$user_id.' and type="new") as r on r.rcontent_id = n.new_id
                        left join (select content_id as lcontent_id,count(is_like) as like_count 
                                    from idol_reactions where is_like=1 and type="new" group by content_id) as l on l.lcontent_id = n.new_id
                        left join (select content_id as ulcontent_id,count(is_like) as unlike_count 
                                    from idol_reactions where is_like=2 and type="new" group by content_id) as ul on ul.ulcontent_id = n.new_id
                        left join (select content_id as ccontent_id,count(comment) as comment_count 
                                    from idol_comments where type="new" group by content_id) as c on c.ccontent_id = n.new_id
                        left join (select content_id as fcontent_id,count(content_id) as is_favourite 
                                    from idol_favourites where user_id='.$user_id.' and type="new" group by content_id ) as f on f.fcontent_id = n.new_id
                        order by n.created_at');
        //print_r($allnews_res);exit();
        $news_type=(new IdolNewsController)->news_type();

        $news_arr=array();
        foreach($allnews_res as $n){
            $new_one=array();
            $new_one['new_id']=$n->new_id;
            $new_one['title']=$n->title;
            $new_one['title_mm']=$n->title_mm;
            $new_one['descritpion']=$n->description;
            $new_one['description_mm']=$n->description_mm;
            $new_one['creation_date']=$n->created_at;
            $new_one['image']=asset('news_images/'.$n->image);
            $new_one['type']=$news_type[$n->type];
            $is_like=false;
            $is_unlike=false;
            $like_count=0;
            $unlike_count=0;
            $comment_count=0;
            $is_favourite=false;
            if(isset($n->like_reaction)){
                if($n->like_reaction=="1"){
                    $is_like=true;
                }else if($n->like_reaction=="2"){
                    $is_unlike=true;
                }
            }

            if(isset($n->like_count)){
                $like_count=$n->like_count;
            }

            if(isset($n->unlike_count)){
                $unlike_count=$n->unlike_count;
            }
            
            if(isset($n->comment_count)){
                $comment_count=$n->comment_count;
            }

            if(isset($n->is_favourite)){
                if($n->is_favourite>0){
                    $is_favourite=true;
                }
            }
            $new_one['is_like']=$is_like;
            $new_one['is_unlike']=$is_unlike;
            $new_one['like_count']=$like_count;
            $new_one['unlike_count']=$unlike_count;
            $new_one['comment_count']=$comment_count;
            $new_one['is_favourite']=$is_favourite;
            
            $timeago=ApiController::timeAgo($n->created_at);
            $new_one['time_ago']=$timeago;

            $news_arr[]=$new_one;

        }

        return response()->json([
            'status' => "00",
            'message'=>"Successful",
            'data'=>$news_arr,
        ]);
    }

    public function news_list_bytype(Request $request){
        $user=auth()->user();
        $user_id=$user->id;
        $return_arr=array();
        if(!$request->type){
            $return_arr['status']="01";
            $return_arr['message']='Need New Type';
        }else{
            $type=$request->type;

            $allnews_res = DB::select('select * from idol_news as n
                        left join (select content_id as rcontent_id,is_like as like_reaction 
                                    from idol_reactions where user_id='.$user_id.' and type="new") as r on r.rcontent_id = n.new_id
                        left join (select content_id as lcontent_id,count(is_like) as like_count 
                                    from idol_reactions where is_like=1 and type="new" group by content_id) as l on l.lcontent_id = n.new_id
                        left join (select content_id as ulcontent_id,count(is_like) as unlike_count 
                                    from idol_reactions where is_like=2 and type="new" group by content_id) as ul on ul.ulcontent_id = n.new_id
                        left join (select content_id as ccontent_id,count(comment) as comment_count 
                                    from idol_comments where type="new" group by content_id) as c on c.ccontent_id = n.new_id
                        left join (select content_id as fcontent_id,count(content_id) as is_favourite 
                                    from idol_favourites where user_id='.$user_id.' and type="new" group by content_id ) as f on f.fcontent_id = n.new_id
                        where type ="'.$type.'" order by created_at');

            $news_type=(new IdolNewsController)->news_type();
            $news_arr=array();
           
            foreach($allnews_res as $n){
                $new_one=array();
                $new_one['new_id']=$n->new_id;
                $new_one['title']=$n->title;
                $new_one['title_mm']=$n->title_mm;
                $new_one['descritpion']=$n->description;
                $new_one['description_mm']=$n->description_mm;
                $new_one['creation_date']=$n->created_at;
                $new_one['image']=asset('news_images/'.$n->image);
                $new_one['type']=$news_type[$n->type];

                $is_like=false;
                $is_unlike=false;
                $like_count=0;
                $unlike_count=0;
                $comment_count=0;
                $is_favourite=false;
                if(isset($n->like_reaction)){
                    if($n->like_reaction=="1"){
                        $is_like=true;
                    }else if($n->like_reaction=="2"){
                        $is_unlike=true;
                    }
                }
                if(isset($n->like_count)){
                    $like_count=$n->like_count;
                }
                if(isset($n->unlike_count)){
                    $unlike_count=$n->unlike_count;
                }

                if(isset($n->is_favourite)){
                    if($n->is_favourite>0){
                        $is_favourite=true;
                    }
                }
                $new_one['is_like']=$is_like;
                $new_one['is_unlike']=$is_unlike;
                $new_one['like_count']=$like_count;
                $new_one['unlike_count']=$unlike_count;
                $new_one['comment_count']=$comment_count;
                $new_one['is_favourite']=$is_favourite;

                $timeago=ApiController::timeAgo($n->created_at);
                $new_one['time_ago']=$timeago;

                $news_arr[]=$new_one;

            }
           
            $return_arr['status']="00";
            $return_arr['message']='Success';
            $return_arr['data']=$news_arr;
        }
        

        return response()->json($return_arr);
    }

    public function new_detail(Request $request){
        $return_arr=array();
        if(!$request->new_id){
            $return_arr['status']="01";
            $return_arr['message']='Need New ID';
        }else{
            $new_id=$request->new_id;
            $new_res = DB::select('select * from idol_news where new_id ="'.$new_id.'"');

            $new_detail_related = DB::select('select * from idol_news where type="'.$new_res[0]->type.'" and 
                                        new_id !="'.$new_res[0]->new_id.'"'); 

            $news_type=(new IdolNewsController)->news_type();
           
            $new_detail_arr=array();
           
            foreach($new_res as $n){
                $new_arr=array();
                $new_arr['new_id']   =$n->new_id;
                $new_arr['title']    =$n->title;
                $new_arr['title_mm'] =$n->title_mm;
                $new_arr['description']=$n->description;
                $new_arr['description_mm']=$n->description_mm;
                $new_arr['creation_date']=$n->created_at;
                $new_arr['image']=asset('news_images/'.$n->image);
                $new_arr['type']=$news_type[$n->type];

                $timeago=ApiController::timeAgo($n->created_at);
                $new_arr['time_ago']=$timeago;
                
                $new_detail_arr[]=$new_arr;
            }

            $related_news_arr=array();

            foreach($new_detail_related as $r){
                $related=array();
                $related['new_id']          =$r->new_id;
                $related['title']           =$r->title;
                $related['title_mm']        =$r->title_mm;
                $related['description']     =$r->description;
                $related['description_mm']  =$r->description_mm;
                $related['creation__date']  =$r->created_at;
                $related['image']           =asset('news_images/'.$r->image);

                $related_news_arr[]=$related;
            }

            $data_array=array();
            
            $data_array["news_detail"]=$new_detail_arr;
            $data_array["related_news"] =$related_news_arr;
           
            $return_arr['status']="00";
            $return_arr['message']='Success';
            $return_arr['data']=$data_array;
        }
        

        return response()->json($return_arr);
    }

    public function mtvs_list(){
        $user=auth()->user();
        $user_id=$user->id;
        $allvideos_res = DB::select('select *,a.title as album_title from idol_mtvs as m 
                                    left join idol_albums as a on m.album_id=a.album_id
                                    left join (select content_id as rcontent_id,is_like as like_reaction 
                                        from idol_reactions where user_id='.$user_id.' and type="video") as r on r.rcontent_id = m.mtv_id
                                    left join (select content_id as lcontent_id,count(is_like) as like_count 
                                        from idol_reactions where is_like=1 and type="video" group by content_id) as l on l.lcontent_id = m.mtv_id
                                    left join (select content_id as ulcontent_id,count(is_like) as unlike_count 
                                        from idol_reactions where is_like=2 and type="video" group by content_id) as ul on ul.ulcontent_id = m.mtv_id
                                    left join (select content_id as ccontent_id,count(comment) as comment_count 
                                        from idol_comments where type="video" group by content_id) as c on c.ccontent_id = m.mtv_id
                                    left join (select content_id as fcontent_id,count(content_id) as is_favourite 
                                        from idol_favourites where user_id='.$user_id.' and type="video" group by content_id ) as f on f.fcontent_id = m.mtv_id
                                    order by m.created_at limit 3');
        
        $videos_arr=array();
        foreach($allvideos_res as $n){
            $video_one=array();
            $video_one['mtv_id']       =$n->mtv_id;
            $video_one['title']         =$n->title;
            $video_one['description']   =$n->description;
            $video_one['descritpion_mm']=$n->description_mm;
            $video_one['creation_date'] =$n->created_at;
            $video_one['url']           =$n->url;
            $video_one['album_tile']   =$n->album_title;

            $is_like=false;
            $is_unlike=false;
            $like_count=0;
            $unlike_count=0;
            $comment_count=0;
            $is_favourite=false;
            if(isset($n->like_reaction)){
                if($n->like_reaction=="1"){
                    $is_like=true;
                }else if($n->like_reaction=="2"){
                    $is_unlike=true;
                }
            }
            
            if(isset($n->like_count)){
                $like_count=$n->like_count;
            }

            if(isset($n->unlike_count)){
                $unlike_count=$n->unlike_count;
            }

            if(isset($n->comment_count)){
                $comment_count=$n->comment_count;
            }

            if(isset($n->is_favourite)){
                if($n->is_favourite>0){
                    $is_favourite=true;
                }
            }
            $video_one['is_like']=$is_like;
            $video_one['is_unlike']=$is_unlike;
            $video_one['like_count']   =$like_count;
            $video_one['unlike_count'] =$unlike_count;
            $video_one['comment_count']=$comment_count;
            $video_one['is_favourite']=$is_favourite;

		    $timeago=ApiController::timeAgo($n->created_at);
            $video_one['time_ago']=$timeago;

            $videos_arr[]=$video_one;

        }

        return response()->json([
            'status' => "00",
            'message'=>"Successful",
            'data'=>$videos_arr,
        ]);
    }

    public function band_detail(Request $request){
        $user=auth()->user();
        $user_id=$user->id;
        $return_arr=array();
        if(!$request->band_id){
            $return_arr['status']="01";
            $return_arr['message']='Need Band ID';
        }else{
            $band_id=$request->band_id;
            $band_res = DB::select('select * from idol_bands where band_id ="'.$band_id.'"');

            $artists_res = DB::select('select * from idol_artists where band_id ="'.$band_id.'"');

            $videos_res = DB::select('select *,a.title as album_title from idol_mtvs as m 
                                        join idol_albums as a on m.album_id=a.album_id
                                        left join (select content_id as rcontent_id,is_like as like_reaction 
                                            from idol_reactions where user_id='.$user_id.' and type="video") as r on r.rcontent_id = m.mtv_id
                                        left join (select content_id as lcontent_id,count(is_like) as like_count 
                                            from idol_reactions where is_like=1 and type="video" group by content_id) as l on l.lcontent_id = m.mtv_id
                                        left join (select content_id as ulcontent_id,count(is_like) as unlike_count 
                                            from idol_reactions where is_like=2 and type="video" group by content_id) as ul on ul.ulcontent_id = m.mtv_id
                                        left join (select content_id as ccontent_id,count(comment) as comment_count 
                                            from idol_comments where type="video" group by content_id) as c on c.ccontent_id = m.mtv_id
                                        left join (select content_id as fcontent_id,count(content_id) as is_favourite 
                                            from idol_favourites where user_id='.$user_id.' and type="video" group by content_id ) as f on f.fcontent_id = m.mtv_id
                                        where a.band_id ="'.$band_id.'"');
           
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

            $videos_arr=array();
            foreach($videos_res as $n){
                $video_one=array();
                $video_one['mtv_id']       =$n->mtv_id;
                $video_one['title']         =$n->title;
                $video_one['description']   =$n->description;
                $video_one['descritpion_mm']=$n->description_mm;
                $video_one['creation_date'] =$n->created_at;
                $video_one['url']           =$n->url;
                $video_one['album_tile']   =$n->album_title;

                $is_like=false;
                $is_unlike=false;
                $like_count=0;
                $unlike_count=0;
                $comment_count=0;
                $is_favourite=false;
                if(isset($n->like_reaction)){
                    if($n->like_reaction=="1"){
                        $is_like=true;
                    }else if($n->like_reaction=="2"){
                        $is_unlike=true;
                    }
                }
                
                if(isset($n->like_count)){
                    $like_count=$n->like_count;
                }

                if(isset($n->unlike_count)){
                    $unlike_count=$n->unlike_count;
                }

                if(isset($n->comment_count)){
                    $comment_count=$n->comment_count;
                }

                if(isset($n->is_favourite)){
                    if($n->is_favourite>0){
                        $is_favourite=true;
                    }
                }
                $video_one['is_like']=$is_like;
                $video_one['is_unlike']=$is_unlike;
                $video_one['like_count']=$like_count;
                $video_one['unlike_count']=$unlike_count;
                $video_one['comment_count']=$comment_count;
                $video_one['is_favourite']=$is_favourite;

                $timeago=ApiController::timeAgo($n->created_at);
                $video_one['time_ago']=$timeago;

                $videos_arr[]=$video_one;

            }

            $band_detail_arr["band_detail"]=$band_arr;
            $band_detail_arr["current_artists"]=$current_artists;
            $band_detail_arr["former_artists"] =$former_artists;
            $band_detail_arr["videos"]        =$videos_arr;
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
    
    public function single_artists_detail(Request $request){
        $return_arr=array();
        if(!$request->band_id){
            $return_arr['status']="01";
            $return_arr['message']='Need band ID';
        }else{
            $band_id=$request->band_id;
            $artist_res = DB::select('select a.*,b.band_id,b.band_type,b.instagram_subscriber,b.twitter_subscriber from idol_bands as b 
            left join idol_artists as a on a.band_id = b.band_id 
            where b.band_id ="'.$band_id.'"');
           
           // $artist_detail_arr=array();

            $artist_arr=array();
            foreach($artist_res as $n){
                $artist_arr['band_id']        =$n->band_id;
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
                $artist_arr['about']         =$n->about;
                $artist_arr['about_mm']      =$n->about_mm;
                $artist_arr['main_image']    =asset('bands_images/'.$n->main_image);
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

    public function add_like_unlike(Request $request){
        $user=auth()->user();
        $user_id=$user->id;
        $return_arr=array();
        if(!$request->is_like){
            $return_arr['status']="01";
            $return_arr['message']='Need is_like';
        }else if(!$request->content_id){
            $return_arr['status']="01";
            $return_arr['message']='Need Content id';
        }else if(!$request->type){
            $return_arr['status']="01";
            $return_arr['message']='Need Type';
        }else{

            $reaction_res = DB::select('select * from idol_reactions where user_id='.$user_id);

            $fields=array(
                'content_id'      => $request->content_id,
                'type'            => $request->type,
                "user_id"         => $user_id
            );
            $now = date('Y-m-d G:i:s');	  
            if($reaction_res){
                $reaction_res=$reaction_res[0];
                $islike=$request->is_like;
                if($reaction_res->is_like == $request->is_like){
                    $islike=0;
                }
                $fields['is_like']=$islike;
                $fields['updated_at']=$now;

                $result=DB::table('idol_reactions')
                ->where('user_id', $user_id)  
                ->limit(1)
                ->update($fields); 
            }else{
                $fields['is_like']=$request->is_like;
                $fields['created_at']=$now;
                $fields['updated_at']=$now;

                $result= DB::table('idol_reactions')
                ->insert($fields);
            }
            
             
            if($result){
                $return_arr['status']="00";
                $return_arr['message']='Insert Success';
            }else{
                $return_arr['status']="00";
                $return_arr['message']='Insert Fail';
            }
        }
        return response()->json($return_arr);
    }

    public function add_comment(Request $request){
        $user=auth()->user();
        $user_id=$user->id;
        $return_arr=array();
        if(!$request->comment){
            $return_arr['status']="01";
            $return_arr['message']='Need comment';
        }else if(!$request->content_id){
            $return_arr['status']="01";
            $return_arr['message']='Need Content id';
        }else if(!$request->type){
            $return_arr['status']="01";
            $return_arr['message']='Need Type';
        }else{

            $fields=array(
                'comment'         => $request->comment,
                'content_id'      => $request->content_id,
                'type'            => $request->type,
                "user_id"         => $user_id
            );
            $now = date('Y-m-d G:i:s');	
            $fields['created_at']=$now;
            $fields['updated_at']=$now;  

            $result= DB::table('idol_comments')
                ->insert($fields);
            
             
            if($result){
                $return_arr['status']="00";
                $return_arr['message']='Insert Success';
            }else{
                $return_arr['status']="00";
                $return_arr['message']='Insert Fail';
            }
        }
        return response()->json($return_arr);
    }

    public function add_favourite(Request $request){
        $user=auth()->user();
        $user_id=$user->id;
        $return_arr=array();
        if(!$request->content_id){
            $return_arr['status']="01";
            $return_arr['message']='Need Content id';
        }else if(!$request->type){
            $return_arr['status']="01";
            $return_arr['message']='Need Type';
        }else{

            $fav_res = DB::select('select * from idol_favourites where user_id='.$user_id.' and content_id="'.$request->content_id.'"');

            $fields=array(
                'content_id'      => $request->content_id,
                'type'            => $request->type,
                "user_id"         => $user_id
            );
            $now = date('Y-m-d G:i:s');	
            

            if($fav_res){   
                $fields['updated_at']=$now; 
                $result=DB::table('idol_favourites')
                ->where([
                        ['user_id', $user_id],
                        ['content_id', $request->content_id],
                        ]
                    )
                ->limit(1)
                ->update($fields); 
            }else{
                $fields['created_at']=$now;
                $fields['updated_at']=$now;
                $result= DB::table('idol_favourites')
                ->insert($fields);
            }
            
             
            if($result){
                $return_arr['status']="00";
                $return_arr['message']='Insert Success';
            }else{
                $return_arr['status']="00";
                $return_arr['message']='Insert Fail';
            }
        }
        return response()->json($return_arr);
    }

    public function quiz_list(){
        $allquiz_res = DB::select('select * from idol_quizzes order by created_at');

        $quiz_arr=array();
        foreach($allquiz_res as $n){
            $quiz_one=array();
            $quiz_one['quiz_id']     =$n->quiz_id;
            $quiz_one['question']    =$n->question;
            $quiz_one['option_one']  =$n->option_one;
            $quiz_one['option_two']  =$n->option_two;
            $quiz_one['option_three']=$n->option_three;
            $quiz_one['option_four'] =$n->option_four;
            $quiz_one['answer']      =$n->answer;
            $quiz_one['image']      =asset('quiz_images/'.$n->image);

            $quiz_arr[]=$quiz_one;

        }

        return response()->json([
            'status' => "00",
            'message'=>"Successful",
            'data'=>$quiz_arr,
        ]);
    }

    public function add_quiz_result(Request $request){
        $user=auth()->user();
        $user_id=$user->id;
        $return_arr=array();
        if(!$request->quiz_id){
            $return_arr['status']="01";
            $return_arr['message']='Need Quiz ID';
        }else if(!$request->selected_answer){
            $return_arr['status']="01";
            $return_arr['message']='Need Selected Answer';
        }else{

            $quiz_res = DB::select('select * from idol_quiz_users 
            where user_id='.$user_id.' and quiz_id="'.$request->quiz_id.'"');

            $fields=array(
                'quiz_id'           => $request->quiz_id,
                'selected_answer'   => $request->selected_answer,
                "user_id"           => $user_id
            );
            $now = date('Y-m-d G:i:s');

            if($quiz_res){
                $fields['updated_at']=$now;    
                $result=DB::table('idol_quiz_users')
                ->where('user_id', $user_id)
                ->where('quiz_id', $request->quiz_id)  
                ->limit(1)
                ->update($fields); 
            }else{
                $fields['created_at']=$now;
                $fields['updated_at']=$now;
                $result= DB::table('idol_quiz_users')
                ->insert($fields);
            }
            
             
            if($result){
                $return_arr['status']="00";
                $return_arr['message']='Insert Success';
            }else{
                $return_arr['status']="00";
                $return_arr['message']='Insert Fail';
            }
        }
        return response()->json($return_arr);
    }

    public function get_quiz_result(){
        $user=auth()->user();
        $user_id=$user->id;
        $quiz_res = DB::select('select u.selected_answer as selected_answer,q.answer as correct_answer
                                from idol_quiz_users as u 
                                left join idol_quizzes as q on u.quiz_id=q.quiz_id
                                where user_id='.$user_id.' and u.selected_answer=q.answer');

        $total_score=count($quiz_res);

        return response()->json([
            'status'     => "00",
            'message'    =>"Successful",
            'total_score'=>$total_score,
        ]);
    }

    
    public function get_comment(Request $request){

        $return_arr=array();
        if(!$request->content_id){
            $return_arr['status']="01";
            $return_arr['message']='Need Content ID';
        }if(!$request->type){
            $return_arr['status']="01";
            $return_arr['message']='Need Type';
        }else{
            $content_id=$request->content_id;
            $type=$request->type;
            $comment_res = DB::select('select c.*,u.name from idol_comments as c
                            left join users as u on u.id=c.user_id
                            where content_id ="'.$content_id.'" and type="'.$type.'"');

            $comment_arr=array();
            foreach($comment_res as $n){
                $comment_one=array();
                $comment_one['contnet_id']       =$n->content_id;
                $comment_one['name']              =$n->name;
                $comment_one['comment']           =$n->comment;
                $comment_one['creation_date']     =$n->created_at;

                $timeago=ApiController::timeAgo($n->created_at);
                $comment_one['time_ago']=$timeago;

                $comment_arr[]=$comment_one;
               
            }

            $return_arr['status']="00";
            $return_arr['message']='Success';
            $return_arr['data']=$comment_arr;
        }
        

        return response()->json($return_arr);
    } 
    public function get_favourite_news(Request $request){
        $user=auth()->user();
        $user_id=$user->id;
        $return_arr=array();
       
        $news_res = DB::select('select * from idol_favourites as f
                            left join idol_news as n on n.new_id=f.content_id
                            left join (select content_id as rcontent_id,is_like as like_reaction 
                                        from idol_reactions where user_id='.$user_id.' and type="new") as r on r.rcontent_id = n.new_id
                            left join (select content_id as lcontent_id,count(is_like) as like_count 
                                        from idol_reactions where is_like=1 and type="new" group by content_id) as l on l.lcontent_id = n.new_id
                            left join (select content_id as ulcontent_id,count(is_like) as unlike_count 
                                        from idol_reactions where is_like=2 and type="new" group by content_id) as ul on ul.ulcontent_id = n.new_id
                            left join (select content_id as ccontent_id,count(comment) as comment_count 
                                        from idol_comments where type="new" group by content_id) as c on c.ccontent_id = n.new_id
                            where f.user_id="'.$user_id.'"and f.type="new"');

        //print_r($news_res);exit();
    
        $news_type=(new IdolNewsController)->news_type();
        $news_arr=array();
               
        foreach($news_res as $n){
            $new_one=array();
            $new_one['new_id']=$n->new_id;
            $new_one['title']=$n->title;
            $new_one['title_mm']=$n->title_mm;
            $new_one['descritpion']=$n->description;
            $new_one['description_mm']=$n->description_mm;
            $new_one['creation_date']=$n->created_at;
            $new_one['image']=asset('news_images/'.$n->image);
            $new_one['type']=$news_type[$n->type];

            $is_like=false;
            $is_unlike=false;
            $like_count=0;
            $unlike_count=0;
            $comment_count=0;
            $is_favourite=false;
            if(isset($n->like_reaction)){
                if($n->like_reaction=="1"){
                    $is_like=true;
                }else if($n->like_reaction=="2"){
                    $is_unlike=true;
                }
            }
            if(isset($n->like_count)){
                $like_count=$n->like_count;
            }
            if(isset($n->unlike_count)){
                $unlike_count=$n->unlike_count;
            }

            
            $new_one['is_like']=$is_like;
            $new_one['is_unlike']=$is_unlike;
            $new_one['like_count']=$like_count;
            $new_one['unlike_count']=$unlike_count;
            $new_one['comment_count']=$comment_count;

            $timeago=ApiController::timeAgo($n->created_at);
            $new_one['time_ago']=$timeago;

            $news_arr[]=$new_one;

        }
            
        $return_arr['status']="00";
        $return_arr['message']='Success';
        $return_arr['data']=$news_arr;
        

        return response()->json($return_arr);
    }

    public function get_favourite_videos(Request $request){
        $user=auth()->user();
        $user_id=$user->id;
        $return_arr=array();
       
        $videos_res = DB::select('select *,al.title as album_title from idol_favourites as f
                            left join idol_mtvs as m on m.mtv_id=f.content_id
                            left join idol_albums as al on m.album_id=al.album_id
                            left join (select content_id as rcontent_id,is_like as like_reaction 
                                        from idol_reactions where user_id='.$user_id.' and type="video") as r on r.rcontent_id = m.mtv_id
                            left join (select content_id as lcontent_id,count(is_like) as like_count 
                                        from idol_reactions where is_like=1 and type="video" group by content_id) as l on l.lcontent_id = m.mtv_id
                            left join (select content_id as ulcontent_id,count(is_like) as unlike_count 
                                        from idol_reactions where is_like=2 and type="video" group by content_id) as ul on ul.ulcontent_id = m.mtv_id
                            left join (select content_id as ccontent_id,count(comment) as comment_count 
                                        from idol_comments where type="video" group by content_id) as c on c.ccontent_id = m.mtv_id
                            where f.user_id="'.$user_id.'" and f.type="video"');

        //print_r($videos_res);exit();
        $videos_arr=array();
        foreach($videos_res as $n){
            $video_one=array();
            $video_one['mtv_id']       =$n->mtv_id;
            $video_one['title']         =$n->title;
            $video_one['description']   =$n->description;
            $video_one['descritpion_mm']=$n->description_mm;
            $video_one['creation_date'] =$n->created_at;
            $video_one['url']           =$n->url;
            $video_one['album_tile']   =$n->album_title;

            $is_like=false;
            $is_unlike=false;
            $like_count=0;
            $unlike_count=0;
            $comment_count=0;
            $is_favourite=false;
            if(isset($n->like_reaction)){
                if($n->like_reaction=="1"){
                    $is_like=true;
                }else if($n->like_reaction=="2"){
                    $is_unlike=true;
                }
            }
            
            if(isset($n->like_count)){
                $like_count=$n->like_count;
            }

            if(isset($n->unlike_count)){
                $unlike_count=$n->unlike_count;
            }

            if(isset($n->comment_count)){
                $comment_count=$n->comment_count;
            }

            $video_one['is_like']=$is_like;
            $video_one['is_unlike']=$is_unlike;
            $video_one['like_count']=$like_count;
            $video_one['unlike_count']=$unlike_count;
            $video_one['comment_count']=$comment_count;

            $timeago=ApiController::timeAgo($n->created_at);
            $video_one['time_ago']=$timeago;

            $videos_arr[]=$video_one;

        }
            
        $return_arr['status']="00";
        $return_arr['message']='Success';
        $return_arr['data']=$videos_arr;
        

        return response()->json($return_arr);
    }

    public function get_favourite_bands(Request $request){
        $user=auth()->user();
        $user_id=$user->id;
        $return_arr=array();
       
        $bands_res = DB::select('select b.* from idol_favourites as f
                            left join idol_bands as b on b.band_id=f.content_id
                            where f.user_id="'.$user_id.'" and f.type="band" and b.band_type != "12"');

    
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
        

        return response()->json($return_arr);
    }

    public function get_favourite_solo(Request $request){
        $user=auth()->user();
        $user_id=$user->id;
        $return_arr=array();
       
        $artist_res = DB::select('select b.*,a.* from idol_favourites as f
                            left join idol_bands as b on b.band_id=f.content_id
                            left join idol_artists as a on a.band_id = b.band_id 
                            where f.user_id="'.$user_id.'" and f.type="solo" and b.band_type ="12" ');
        
        // $artist_detail_arr=array();

        $artist_arr=array();
        foreach($artist_res as $n){
            $artist_arr['band_id']        =$n->band_id;
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
            $artist_arr['about']         =$n->about;
            $artist_arr['about_mm']      =$n->about_mm;
            $artist_arr['main_image']    =asset('bands_images/'.$n->main_image);
            $artist_images=array();
            foreach(json_decode($n->images) as $img){
                $artist_images[]=asset('artists_images/'.$img);
            }
            $artist_arr['images']=$artist_images;
        }

        $return_arr['status']="00";
        $return_arr['message']='Success';
        $return_arr['data']=$artist_arr;
        

        return response()->json($return_arr);
    }
    
    

}
