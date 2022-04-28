<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class IdolMtv extends Model
{
    use HasFactory;
    public function get_unique_mtv_id () {
        $found = true;
    
        $uniqueID = "";
    
        while ($found) {
            $uniqueID = uniqid ("M", true);
           
            $result = DB::select('select * from idol_mtvs where mtv_id = "'.$uniqueID.'"');
    
            
    
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
