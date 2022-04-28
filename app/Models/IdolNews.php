<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IdolNews extends Model
{
    public function get_unique_new_id () {
        $found = true;
    
        $uniqueID = "";
    
        while ($found) {
            $uniqueID = uniqid ("N", true);
           
            $result = DB::select('select * from idol_news where new_id = "'.$uniqueID.'"');
    
            
    
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
