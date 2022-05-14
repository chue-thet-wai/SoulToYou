<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IdolAlbum;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;


class IdolAlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $albums_res = DB::table('idol_albums')
            ->leftjoin('idol_bands', 'idol_albums.band_id', '=', 'idol_bands.band_id')
            ->leftjoin('idol_artists', 'idol_albums.artist_id', '=', 'idol_artists.artist_id')
            ->select('idol_albums.*', 'idol_bands.name as bandName','idol_artists.name as artistName')
            //->get()
            ->paginate(10);
        return view('admin.idolalbums.index',['albums' => $albums_res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bands_res = DB::select('select * from idol_bands');
        $artists_res = DB::select('select * from idol_artists');
        return view('admin.idolalbums.create',['bands_list' => $bands_res,'artists_list' => $artists_res]);
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
            'title'      =>'required|min:3',
            'description'=>'required|min:3',
            'album_image' =>'required | mimes:jpeg,jpg,png | max:1000',
        ]);
        if($request->band=="99" && $request->artist==""){
            $request->validate([
                'artist'      =>'required',
            ]);
        }

        $n=new IdolAlbum();
        $album_id=$n->get_unique_album_id();

        if($request->hasFile('album_image')){
            $image=$request->file('album_image');
            //$image_name=time() .'-'.$image->getClientOriginalName();
            $extension = $image->extension();
            $image_name = $album_id . "_" . time() . "." . $extension;
        }else{
            $image_name="";
        }        
        
        $n->album_id        =$album_id;
        $n->title           =$request->title;
        $n->description     =$request->description;
        $n->description_mm  =$request->description_mm;
        $n->image           =$image_name;
        $n->band_id         =$request->band;
        if($request->band=="99"){
            $n->artist_id       =$request->artist;
        }else{
            $n->artist_id       ="";
        }
       
        $n->status          =$request->status;
        $n->created_by      =$userid;
        
        if($n->save()){
            $image->move(public_path('albums_images'),$image_name);
            return redirect(route('albums.index'))->with('success',$request->title.' Created Successfully!');
        }else{
            return redirect()->back()->with('danger','Albums Created Fail !');
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
        $album_res = DB::table('idol_albums')
            ->where('idol_albums.album_id',$id)
            ->select('idol_albums.*')
            ->get();
        return view('admin.idolalbums.show',['album_res' => $album_res]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $albums_res = DB::table('idol_albums')
            ->leftjoin('idol_bands', 'idol_albums.band_id', '=', 'idol_bands.band_id')
            ->leftjoin('idol_artists', 'idol_albums.artist_id', '=', 'idol_artists.artist_id')
            ->where('idol_albums.album_id',$id)
            ->select('idol_albums.*', 'idol_bands.name as bandName','idol_artists.name as artistName')
            ->get();

        $bands_res = DB::select('select * from idol_bands');
        $artists_res = DB::select('select * from idol_artists');

        return view('admin.idolalbums.update',['albums_res'=>$albums_res,'bands_list' => $bands_res,'artists_list' => $artists_res]);
        
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
            'title'       =>'required|min:3',
            'description'=>'required|min:3',
        ]);
        if($request->band=="99" && $request->artist==""){
            $request->validate([
                'artist'      =>'required',
            ]);
        }

        $fields=array(
            'title'         => $request->title,
            'description'   => $request->description,
            'description_mm'=> $request->description_mm,
            'band_id'       => $request->band,
            'updated_by'    =>$userid,
            'status'        =>$request->status,
        );
        if($request->band=="99"){
            $fields['artist_id']       =$request->artist;
        }else{
            $fields['artist_id']     ="";
        }
        
        if($request->hasFile('album_image')){
            //To delete previous image
            $previous_img=$request->previous_image;
            @unlink(public_path('albums_images/'. $previous_img));
            
            $image=$request->file('album_image');
            //$image_name=time() .'-'.$image->getClientOriginalName();
            $extension = $image->extension();
            $image_name = $id . "_" . time() . "." . $extension;
            $image->move(public_path('albums_images'),$image_name);

            $fields['image']=$image_name;
        }      
        
        $result=DB::table('idol_albums')
            ->where('album_id', $id)  
            ->limit(1)
            ->update($fields);  
        if($result){
            return redirect(route('albums.index'))->with('success','Album Updated Successfully!');
        }else{
            return redirect(route('albums.index'))->with('danger','No Change Made!');
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
        $album_res = DB::select('select * from idol_albums where album_id="'.$id.'"');
        if($album_res){
            $image=$album_res[0]->image;
            @unlink(public_path('albums_images/'. $image));
            
            $result = DB::delete('Delete from idol_albums where album_id="'.$id.'"');
            if($result){
                return redirect(route('albums.index'))->with('success','Albums Deleted Successfully!');
            }
        }else{
            return redirect(route('albums.index'))->with('error','There is no result with this album.');
        }

        
    }
}
