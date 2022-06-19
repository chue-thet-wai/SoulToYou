<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IdolArtist;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class IdolArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists_res = DB::table('idol_artists')
            ->leftjoin('idol_bands', 'idol_artists.band_id', '=', 'idol_bands.band_id')
            ->select('idol_artists.*', 'idol_bands.name as bandName')
            //->get()
            ->paginate(10);

        return view('admin.idolartists.index',['artists' => $artists_res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bands_res = DB::select('select * from idol_bands');
        $member_type=$this->artist_member_type();
        return view('admin.idolartists.create',['bands_list' => $bands_res,"member_type"=>$member_type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userid = Auth::id(); 

        $request->validate([
            'name'      =>'required|min:1',
            'about'     =>'required|min:3',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
            'artist_image' =>'required | mimes:jpeg,jpg,png | max:1000',
        ]);

        $n=new IdolArtist();
        $artist_id=$n->get_unique_artist_id();

        if($request->hasFile('artist_image')){
            $image=$request->file('artist_image');
            //$image_name=time() .'-'.$image->getClientOriginalName();
             $extension = $image->extension();
             $prefix="main";
             $image_name = $artist_id . "_" . time() . "_" . $prefix . "." . $extension;
        }else{
            $image_name="";
        }        

        $imgData=[];
        if($request->hasfile('imageFile')) {
            $count=1;
            foreach($request->file('imageFile') as $file)
            {
                $extension = $file->extension();
                $name = $artist_id . "_" . time() . "_" . $count . "." . $extension;
                $file->move(public_path('artists_images'), $name);  
                $imgData[] = $name;
                $count++;   
            }
        }   
        
        $n->artist_id =$artist_id;
        $n->name      =$request->name;
        $n->member_type =$request->member_type;
        $n->birth_name =$request->birth_name;
        $n->korea_name =$request->korea_name;
        $n->birth_date =$request->birth_date;
        $n->joined_date =$request->joined_date;
        $n->zondic     =$request->zondic;
        $n->height     =$request->height;
        $n->blood_type =$request->blood_type;
        $n->mbti       =$request->mbti;
        $n->about     =$request->about;
        $n->about_mm  =$request->about_mm;
        $n->main_image  =$image_name;
        $n->images        =json_encode($imgData);
        $n->band_id   =$request->band_id;
        $n->created_by    =$userid;
        $n->status    =$request->status;        
        if($n->save()){
            $image->move(public_path('artists_images'),$image_name);
            return redirect(route('artists.index'))->with('success',$request->name.' Created Successfully!');
        }else{
            return redirect()->back()->with('danger','Artist Created Fail !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist_res = DB::table('idol_artists')
            ->leftjoin('idol_bands', 'idol_artists.band_id', '=', 'idol_bands.band_id')
            ->where('idol_artists.artist_id',$id)
            ->select('idol_artists.*', 'idol_bands.name as bandName')
            ->get();

        return view('admin.idolartists.show',['artist_res' => $artist_res]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artists_res = DB::table('idol_artists')
            ->leftjoin('idol_bands', 'idol_artists.band_id', '=', 'idol_bands.band_id')
            ->where('idol_artists.artist_id',$id)
            ->select('idol_artists.*', 'idol_bands.name as bandName')
            ->get();

        $bands_res = DB::select('select * from idol_bands');
        $member_type=$this->artist_member_type();

        return view('admin.idolartists.update',['artists_res'=>$artists_res,'bands_list' => $bands_res,"member_type"=>$member_type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userid = Auth::id(); 
        $request->validate([
            'name'=>'required|min:1',
            'about'=>'required|min:3',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
        ]);

        $fields=array(
            'name' => $request->name,
            'about'=> $request->about,
            'about_mm'=> $request->about_mm,
            'band_id'=> $request->band_id,
            'member_type' =>$request->member_type,
            'birth_name' =>$request->birth_name,
            'korea_name' =>$request->korea_name,
            'birth_date' =>$request->birth_date,
            'joined_date' =>$request->joined_date,
            'zondic'     =>$request->zondic,
            'height'     =>$request->height,
            'blood_type' =>$request->blood_type,
            'mbti'       =>$request->mbti,
            'about'       => $request->about,
            'about_mm'    => $request->about_mm,
            'updated_by'    =>$userid,
            'status'       =>$request->status,
        );
        
        if($request->hasFile('artist_image')){
            //To delete previous image
            $previous_img=$request->previous_image;
            @unlink(public_path('artists_images/'. $previous_img));

            $image=$request->file('artist_image');
            //$image_name=time() .'-'.$image->getClientOriginalName();
            $extension = $image->extension();
            $prefix="main";
            $image_name = $id . "_" . time() . "_" . $prefix . "." . $extension;

            $image->move(public_path('artists_images'),$image_name);
            $fields['main_image']=$image_name;
        }  

        //To Delete Images
        $delete_images=$request->previous_upload;
        $remain_images=array();
        $artists_res = DB::select('select * from idol_artists where artist_id="'.$id.'"');
        $images=json_decode($artists_res[0]->images);

        if($delete_images){
            foreach($delete_images as $d_img){
                @unlink(public_path('artists_images/'. $d_img));
            }            
            $remain_images=array_diff($images,$delete_images);     
        }else{
            $remain_images=(array)$images;
        }  
        
        if($request->hasfile('imageFile')) {
            $imgData=[];
            if($remain_images){
                $imgData=array_merge($remain_images,$imgData);
            }
            $count=1;
            foreach($request->file('imageFile') as $file)
            {
                $extension = $file->extension();
                //$name = $file->getClientOriginalName();
                $name = $id . "_" . time() . "_" . $count . "." . $extension;
                $file->move(public_path('artists_images'), $name);  
                $imgData[] = $name; 
                $count++; 
            }
            $fields['images']=json_encode($imgData);
        }else{
            $fields['images']=json_encode($remain_images);
        } 
        
        $result=DB::table('idol_artists')
            ->where('artist_id', $id)  
            ->limit(1)
            ->update($fields);  
        if($result){
            return redirect(route('artists.index'))->with('success','Artist Updated Successfully!');
        }else{
            return redirect(route('artists.index'))->with('danger','No Change Made!');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artists_res = DB::select('select * from idol_artists where artist_id="'.$id.'"');
        if($artists_res){
            $main_image=$artists_res[0]->main_image;
            @unlink(public_path('artists_images/'. $main_image));
            $images=$artists_res[0]->images;
            foreach(json_decode($images) as $img){
                @unlink(public_path('artists_images/'. $img));
            }
            $result = DB::delete('Delete from idol_artists where artist_id="'.$id.'"');
            if($result){
                return redirect(route('artists.index'))->with('success','Artist Deleted Successfully!');
            }
        }else{
            return redirect(route('bands.index'))->with('error','There is no result with this artist.');
        }

        
    }

    function artist_member_type(){
        return array(
            "100"=>"New Member",
            "101"=>"Old Member"
        );
    }
}