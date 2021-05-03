<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(){
        $info = [
            'nama'=>'Galeri'];
        return view('index',$info);
    }
}
