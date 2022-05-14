<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IdolNews;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\Admin\IdolNewsController;
use Illuminate\Support\Facades\Auth;

class IdolNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_res = DB::table('idol_news')
           ->paginate(10);
        return view('admin.idolnews.index',['news' => $news_res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news_type=$this->news_type();
        return view('admin.idolnews.create',['news_type'=>$news_type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id(); 

        $request->validate([
            'title'      =>'required|min:3',
            'title_mm'      =>'required|min:3',
            'description'=>'required|min:3',
            'description_mm'=>'required|min:3',
            'image'      =>'required | mimes:jpeg,jpg,png | max:1000',
        ]);

        $n=new IdolNews();
        $new_id=$n->get_unique_new_id();

        if($request->hasFile('image')){
            $image=$request->file('image');
            //$image_name=time() .'-'.$image->getClientOriginalName();
            
            $extension = $image->extension();
            $image_name = $new_id . "_" . time() . "." . $extension;
        }else{
            $image_name="";
        }
        
        
        $n->new_id         =$new_id;
        $n->title          =$request->title;
        $n->title_mm       =$request->title_mm;
        $n->description    =$request->description;
        $n->description_mm =$request->description_mm;
        $n->type           =$request->type;
        $n->status         =$request->status;
        $n->viewer         =$request->viewer;
        $n->image          =$image_name;
        $n->created_by     =$id;
        if($n->save()){
            $image->move(public_path('news_images'),$image_name);
            return redirect(route('news.index'))->with('success',$request->title.' Created Successfully!');
        }else{
            return redirect()->back()->with('danger','News Created Fail !');
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
        $new_res = DB::select('select * from idol_news where new_id="'.$id.'"');
        return view('admin.idolnews.show',['new_res' => $new_res]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news_res = DB::select('select * from idol_news where new_id="'.$id.'"');
        $news_type=$this->news_type();
        return view('admin.idolnews.update',['news_res'=>$news_res,'news_type'=>$news_type]);
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
            'title'      =>'required|min:3',
            'title_mm'      =>'required|min:3',
            'description'=>'required|min:3',
            'description_mm'=>'required|min:3',
        ]);
        $fields=array(
            'title'        => $request->title,
            'title_mm'     => $request->title_mm,
            'description'  => $request->description,
            'description_mm'=> $request->description_mm,
            'type'         => $request->type,
            'status'       => $request->status,
            'viewer'       => $request->viewer,
            'updated_by'   =>$request->$userid,
        );
        
        
        if($request->hasFile('image')){
            //To delete previous image
            $previous_img=$request->previous_image;
            @unlink(public_path('news_images/'. $previous_img));
            
            $image=$request->file('image');
            // $image_name=time() .'-'.$image->getClientOriginalName();
            $extension = $image->extension();
            $image_name = $id . "_" . time() . "." . $extension;
            $image->move(public_path('news_images'),$image_name);

            $fields['image']=$image_name;
        }      
        
        $result=DB::table('idol_news')
            ->where('new_id', $id)  
            ->limit(1)
            ->update($fields);  
        if($result){
            return redirect(route('news.index'))->with('success','New Updated Successfully!');
        }else{
            return redirect(route('news.index'))->with('danger','No Change Made!');
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
        $new_res = DB::select('select * from idol_news where album_id="'.$id.'"');
        if($new_res){
            $image=$new_res[0]->image;
            @unlink(public_path('news_images/'. $image));
            
            $result = DB::delete('Delete from idol_news where new_id="'.$id.'"');
            if($result){
                return redirect(route('news.index'))->with('success','New Deleted Successfully!');
            }
        }else{
            return redirect(route('albums.index'))->with('error','There is no result with this new.');
        }

        
    }

    function news_type(){
        return array(
            "1"=>"Breaking News",
            "2"=>"Trending News",
            "3"=>"Popular News"
        );
    }
}
