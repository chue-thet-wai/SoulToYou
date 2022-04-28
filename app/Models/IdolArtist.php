<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IdolArtist extends Model
{
    use HasFactory;

    public function get_unique_artist_id () {
        $found = true;
    
        $uniqueID = "";
    
        while ($found) {
            $uniqueID = uniqid ("S", true);
           
            $result = DB::select('select * from idol_artists where artist_id = "'.$uniqueID.'"');
    
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
