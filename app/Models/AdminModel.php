<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    public function data(){
        return DB::table('admin')->get();
    }

    public function detail($id){
        return DB::table('admin')->where('nomor',$id)->first();
    }

    public function add($data){
        return DB::table('admin')->insert($data);
    }
}
