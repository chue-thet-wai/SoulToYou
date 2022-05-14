<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IdolMtv;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class IdolMtvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $mtv_res = DB::table('idol_mtvs')
            ->leftjoin('idol_albums', 'idol_albums.album_id', '=', 'idol_mtvs.album_id')
            ->leftjoin('idol_bands', 'idol_albums.band_id', '=', 'idol_bands.band_id')
            ->leftjoin('idol_artists', 'idol_albums.artist_id', '=', 'idol_artists.artist_id')
            ->select('idol_mtvs.*', 'idol_albums.title as albumName','idol_bands.name as bandName','idol_artists.name as artistName')
            //->get()
            ->paginate(10);

       
        return view('admin.idolmtvs.index',['mtvs' => $mtv_res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ablums_list = DB::select('select * from idol_albums');
        return view('admin.idolmtvs.create',['albums_list' => $ablums_list]);
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
            'url'       =>'required|min:3',
        ]);
        

        $m=new IdolMtv();
        $mtv_id=$m->get_unique_mtv_id();
        $m->mtv_id         =$mtv_id;
        $m->title          =$request->title;
        $m->video_title    =$request->video_title;
        $m->duration       =$request->duration;
        $m->viewer         =$request->viewer;
        $m->album_id       =$request->album;
        $m->description    =$request->description;
        $m->description_mm =$request->description_mm;
        $m->url            =$request->url;
        $m->status         =$request->status;  
        $m->created_by     =$userid;     
        if($m->save()){
            return redirect(route('mtvs.index'))->with('success',$request->title.' Created Successfully!');
        }else{
            return redirect()->back()->with('danger','MTV Created Fail !');
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
        $mtv_res = DB::table('idol_mtvs')
            ->leftjoin('idol_albums', 'idol_albums.album_id', '=', 'idol_mtvs.album_id')
            ->where('idol_mtvs.mtv_id',$id)
            ->select('idol_mtvs.*', 'idol_albums.title as albumName')
            ->get();
        return view('admin.idolmtvs.show',['mtv_res' => $mtv_res]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mtvs_res = DB::select('select * from idol_mtvs where mtv_id="'.$id.'"');
        $ablums_list = DB::select('select * from idol_albums');
        return view('admin.idolmtvs.update',['mtvs_res'=>$mtvs_res,'albums_list' => $ablums_list]);
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
            'title'=>'required|min:3',
            'url' =>'required|min:3'
        ]);
        $fields=array(
            'title'         => $request->title,
            'description'   => $request->description,
            'description_mm'=> $request->description_mm,
            'url'           => $request->url,
            'album_id'      => $request->album,
            'video_title'   => $request->video_title,
            'duration'      => $request->duration,
            'viewer'        => $request->viewer,
            'updated_by'    => $userid,
        );   
        
        $result=DB::table('idol_mtvs')
            ->where('mtv_id', $id)  
            ->limit(1)
            ->update($fields);  
        if($result){
            return redirect(route('mtvs.index'))->with('success','MTV Updated Successfully!');
        }else{
            return redirect(route('mtvs.index'))->with('danger','No Change Made!');
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
        $result = DB::delete('Delete from idol_mtvs where mtv_id="'.$id.'"');
        if($result){
            return redirect(route('mtvs.index'))->with('success','MTV Deleted Successfully!');
        }
    }

    function get_unique_mtv_id () {
        $retry = 10;
    
        $uniqueID = "";
    
        while ($retry) {
            $uniqueID = uniqid ("M", true);
           
            $result=DB::table('idol_mtvs')
                ->where('mtv_id', $uniqueID)  
                ->limit(1)
                ->select();
    
            $found = false;
    
            foreach ($result as $row) {
                $found = true;
                break;
            }
    
            if (!$found) break; // it's unique
    
            $retry--;
    
            // no more retries so just add a timestamp to the end to make it unique
            if (!$retry) $uniqueID = $uniqueID . "." . time();
        }
    
        return $uniqueID;
    }
}
