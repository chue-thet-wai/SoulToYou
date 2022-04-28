<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IdolBands extends Model
{
    use HasFactory;

    public function get_unique_band_id () {
        $found = true;
    
        $uniqueID = "";
    
        while ($found) {
            $uniqueID = uniqid ("B", true);
           
            $result = DB::select('select * from idol_bands where band_id = "'.$uniqueID.'"');
    
            
    
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
