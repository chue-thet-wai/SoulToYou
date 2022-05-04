<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IdolQuizzes extends Model
{
    public function get_unique_quiz_id () {
        $found = true;
    
        $uniqueID = "";
    
        while ($found) {
            $uniqueID = uniqid ("Q", true);
           
            $result = DB::select('select * from idol_quizzes where quiz_id = "'.$uniqueID.'"');           
    
            if ($result) {
                $found=true;
            }else{
                $found=false;
                $uniqueID = $uniqueID . "." . time();
            }
        }
    
        return $uniqueID;
    }
}
