<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    public function getfile($id){
        $image = image::find($id);
        return $image->file;
    }

    public function updateData($id,$filename){
        $image = image::find($id);
        $image->file = $filename;
        $image->save();
    }
}
