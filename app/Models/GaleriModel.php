<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GaleriModel extends Model
{
    
    public function Data(){
        return DB::table('images')->get();
    }

    public function updateGambar($id,$file){
        $image = image::find($id);
        $image->file = $filename;
        $image->save();
    }

}
