<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IdolAlbum extends Model
{
    use HasFactory;

    public function get_unique_album_id () {
        $found = true;
    
        $uniqueID = "";
    
        while ($found) {
            $uniqueID = uniqid ("A", true);
           
            $result = DB::select('select * from idol_albums where album_id = "'.$uniqueID.'"');
    
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
