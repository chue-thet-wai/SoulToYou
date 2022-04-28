<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IdolBands;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class IdolBandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bands_res = DB::table('idol_bands')
            ->paginate(2);
        return view('admin.idolbands.index',['bands' => $bands_res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $band_type=$this->band_type();
        return view('admin.idolbands.create',['band_type'=>$band_type]);
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
            'name'      =>'required|min:3',
            'about'      =>'required|min:3',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
            'band_image' =>'required | mimes:jpeg,jpg,png | max:1000',
        ]);
        if($request->hasFile('band_image')){
            $image=$request->file('band_image');
            $image_name=time() .'-'.$image->getClientOriginalName();
        }else{
            $image_name="default.png";
        } 
        
        $imgData=[];
        if($request->hasfile('imageFile')) {
            foreach($request->file('imageFile') as $file)
            {
                $name = $file->getClientOriginalName();
                echo $name;
                $file->move(public_path('bands_images'), $name);  
                $imgData[] = $name;  
            }
        }     
    
        $b=new IdolBands();
        $band_id=$b->get_unique_band_id();
        $b->band_id       =$band_id;
        $b->name          =$request->name;
        $b->about         =$request->about;
        $b->about_mm      =$request->about_mm;
        $b->twitter_subscriber   =$request->twitter_subscriber;
        $b->instagram_subscriber =$request->instagram_subscriber;
        $b->status        =$request->status;
        $b->band_type     =$request->type;
        $b->main_image    =$image_name;
        $b->images        =json_encode($imgData);
        $b->created_by    =$userid;
        if($b->save()){
            $image->move(public_path('bands_images'),$image_name);
            return redirect(route('bands.index'))->with('success',$request->name.' Created Successfully!');
        }else{
            return redirect()->back()->with('danger','Band Created Fail !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($band_id)
    {
        $band_res = DB::select('select * from idol_bands where band_id="'.$band_id.'"');
        return view('admin.idolbands.show',['band_res' => $band_res]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bands_res = DB::select('select * from idol_bands where band_id="'.$id.'"');
        $band_type=$this->band_type();
        return view('admin.idolbands.update',['bands_res'=>$bands_res,'band_type'=>$band_type]);
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
            'name'      =>'required|min:3',
            'about'      =>'required|min:3',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
        ]);

        $fields=array(
            'name' => $request->name,
            'about'=> $request->about,
            'about_mm'=> $request->about_mm,
            'twitter_subscriber'=> $request->twitter_subscriber,
            'instagram_subscriber'=> $request->instagram_subscriber,
            'status'              => $request->status,
            'band_type'           => $request->type,
            'updated_by'         => $userid,           
        );
        
        if($request->hasFile('band_image')){
            $image=$request->file('band_image');
            $image_name=time() .'-'.$image->getClientOriginalName();
            $image->move(public_path('bands_images'),$image_name);
            $fields['main_image']=$image_name;
        }
        
        if($request->hasfile('imageFile')) {
            $imgData=[];
            foreach($request->file('imageFile') as $file)
            {
                $name = $file->getClientOriginalName();
                echo $name;
                $file->move(public_path('bands_images'), $name);  
                $imgData[] = $name;  
            }
            $fields['images']=json_encode($imgData);
        }  
        
        $result=DB::table('idol_bands')
            ->where('band_id', $id)  
            ->limit(1)
            ->update($fields);  
        if($result){
            return redirect(route('bands.index'))->with('success','Band Updated Successfully!');
        }else{
            return redirect(route('bands.index'))->with('danger','No Change Made!');
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
        $result = DB::delete('Delete from idol_bands where band_id="'.$id.'"');
        if($result){
            return redirect(route('bands.index'))->with('success','Band Deleted Successfully!');
        }
    }

    public function band_type(){
        return array(
            "10"=>"Girl Group",
            "11"=>"Boy Group",
            "12"=>"Other"
        );
    }

}
