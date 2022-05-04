<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\IdolReactions;

class AjaxController extends Controller
{
    public function isReact(){
        $type      =$_POST['type'];
        $id        =$_POST['id'];
        $react     =$_POST['react'];

        $userid = Auth::id();
        $reaction_res = DB::select('select * from idol_reactions where user_id="'.$userid.'" && content_id="'.$id.'"');
        if($reaction_res){
            $result=DB::table('idol_reactions')
                ->where('user_id', $userid) 
                ->where('content_id', $id)  
                ->limit(1)
                ->update(['is_like' => $react]);
                if($result){
                    return response()->json(array('id'=>$id), 200);
                } 
        }else{
            $n=new IdolReactions();        
            $n->user_id        =$userid;
            $n->is_like        =$react;
            $n->content_id     =$id;
            $n->type           =$type;        
            if($n->save()){
                return response()->json(array('id'=>$id), 200);
            } 
        }
             
    }
}
