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
            'name'      =>'required|min:1',
            'about'      =>'required|min:3',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
            'band_image' =>'required | mimes:jpeg,jpg,png | max:1000',
        ]);

        $b=new IdolBands();
        $band_id=$b->get_unique_band_id();

        if($request->hasFile('band_image')){
            $image=$request->file('band_image');
            $extension = $image->extension();
            //$image_name=time() .'-'.$image->getClientOriginalName();
            $prefix="main";
            $image_name = $band_id . "_" . time() . "_" . $prefix . "." . $extension;
        }else{
            $image_name="";
        } 
        
        $imgData=[];
        if($request->hasfile('imageFile')) {
            $count=1;
            foreach($request->file('imageFile') as $file)
            {
                $extension = $file->extension();
                //$name = $file->getClientOriginalName();
                $name = $band_id . "_" . time() . "_" . $count . "." . $extension;
                $file->move(public_path('bands_images'), $name);  
                $imgData[] = $name; 
                $count++; 
            }
        }     
    
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
            'name'      =>'required|min:1',
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
        
        //To Save Main Image
        if($request->hasFile('band_image')){
            //To delete previous image
            $previous_img=$request->previous_image;
            @unlink(public_path('bands_images/'. $previous_img));

            $image=$request->file('band_image');
            $extension = $image->extension();
            //$image_name=time() .'-'.$image->getClientOriginalName();
            $prefix="main";
            $image_name = $id . "_" . time() . "_" . $prefix . "." . $extension;
            $image->move(public_path('bands_images'),$image_name);
            $fields['main_image']=$image_name;
        }

        //To Delete Images
        $delete_images=$request->previous_upload;
        $remain_images=array();
        $bands_res = DB::select('select * from idol_bands where band_id="'.$id.'"');
        $images=json_decode($bands_res[0]->images);

        if($delete_images){
            foreach($delete_images as $d_img){
                @unlink(public_path('bands_images/'. $d_img));
            }            
            $remain_images=array_diff($images,$delete_images);     
        }else{
            $remain_images=(array)$images;
        }   

        //Upload Multiple Images
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
                $file->move(public_path('bands_images'), $name);  
                $imgData[] = $name; 
                $count++; 
            }            
            $fields['images']=json_encode($imgData);
        }else{
            $fields['images']=json_encode($remain_images);
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
        $bands_res = DB::select('select * from idol_bands where band_id="'.$id.'"');
        if($bands_res){
            $main_image=$bands_res[0]->main_image;
            @unlink(public_path('bands_images/'. $main_image));
            $images=$bands_res[0]->images;
            foreach(json_decode($images) as $img){
                @unlink(public_path('bands_images/'. $img));
            }
            $result = DB::delete('Delete from idol_bands where band_id="'.$id.'"');
            if($result){
                return redirect(route('bands.index'))->with('success','Band Deleted Successfully!');
            }
        }else{
            return redirect(route('bands.index'))->with('error','There is no result with this band.');
        }
       
        
    }

    public function band_type(){
        return array(
            "10"=>"Girl Group",
            "11"=>"Boy Group",
            "12"=>"Solo",
            //"13"=>"Other"
        );
    }

}
