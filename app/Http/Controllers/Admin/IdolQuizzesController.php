<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\IdolQuizzes;

class IdolQuizzesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzes_res = DB::table('idol_quizzes')
           ->paginate(10);
        return view('admin.idolquiz.index',['quizzes' => $quizzes_res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quiz_answer=$this->quiz_answer_array();
        return view('admin.idolquiz.create',['quiz_answer'=>$quiz_answer]);
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
            'question'      =>'required|min:3',
            'option_1'      =>'required|min:3',
            'option_2'      =>'required|min:3',
            'option_3'      =>'required|min:3',
            'option_4'      =>'required|min:3',
            'image'         =>'mimes:jpeg,jpg,png | max:1000',
        ]);

        $n=new IdolQuizzes();
        $quiz_id=$n->get_unique_quiz_id();

        if($request->hasFile('image')){
            $image=$request->file('image');
            //$image_name=time() .'-'.$image->getClientOriginalName();
            $extension = $image->extension();
            $image_name = $quiz_id . "_" . time() . "." . $extension;
        }else{
            $image_name="";
        }
        
        
        $n->quiz_id         =$quiz_id;
        $n->question        =$request->question;
        $n->option_one      =$request->option_1;
        $n->option_two      =$request->option_2;
        $n->option_three    =$request->option_3;
        $n->option_four     =$request->option_4;
        $n->answer          =$request->answer;
        $n->status         =$request->status;
        $n->image          =$image_name;
        $n->created_by     =$userid;
        if($n->save()){
            $image->move(public_path('quiz_images'),$image_name);
            return redirect(route('quiz.index'))->with('success',$request->title.' Created Successfully!');
        }else{
            return redirect()->back()->with('danger','Quiz Created Fail !');
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
        $quiz_res = DB::select('select * from idol_quizzes where quiz_id="'.$id.'"');
        $quiz_answer=$this->quiz_answer_array();
        return view('admin.idolquiz.show',['quiz_res' => $quiz_res,'quiz_answer'=>$quiz_answer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quiz_res = DB::select('select * from idol_quizzes where quiz_id="'.$id.'"');
        $quiz_answer=$this->quiz_answer_array();
        return view('admin.idolquiz.update',['quiz_res'=>$quiz_res,'quiz_answer'=>$quiz_answer]);
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
            'question'      =>'required|min:3',
            'option_1'      =>'required|min:3',
            'option_2'      =>'required|min:3',
            'option_3'      =>'required|min:3',
            'option_4'      =>'required|min:3',
        ]);
        $fields=array(
            'question'        => $request->question,
            'option_one'      => $request->option_1,
            'option_two'      => $request->option_2,
            'option_three'    => $request->option_3,
            'option_four'     => $request->option_4,
            'answer'          => $request->answer,
            'status'          => $request->status,
            'updated_by'      =>$request->$userid,
        );
        
        
        if($request->hasFile('image')){
            //To delete previous image
            $previous_img=$request->previous_image;
            @unlink(public_path('quiz_images/'. $previous_img));
            
            $image=$request->file('image');
            // $image_name=time() .'-'.$image->getClientOriginalName();
            $extension = $image->extension();
            $image_name = $id . "_" . time() . "." . $extension;
            $image->move(public_path('quiz_images'),$image_name);

            $fields['image']=$image_name;
        }      
        
        $result=DB::table('idol_quizzes')
            ->where('quiz_id', $id)  
            ->limit(1)
            ->update($fields);  
        if($result){
            return redirect(route('quiz.index'))->with('success','Quiz Updated Successfully!');
        }else{
            return redirect(route('quiz.index'))->with('danger','No Change Made!');
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
        $quiz_res = DB::select('select * from idol_quizzes where quiz_id="'.$id.'"');
        if($quiz_res){
            $image=$quiz_res[0]->image;
            @unlink(public_path('quiz_images/'. $image));
            
            $result = DB::delete('Delete from idol_quizzes where quiz_id="'.$id.'"');
            if($result){
                return redirect(route('quiz.index'))->with('success','Quiz Deleted Successfully!');
            }
        }else{
            return redirect(route('albums.index'))->with('error','There is no result with this quiz.');
        }

        
    }

    public function quiz_answer_array(){
        return array(
            '1'=>'A',
            '2'=>'B',
            '3'=>'C',
            '4'=>'D',
        );
    }
}
