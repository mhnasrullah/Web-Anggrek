<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index(){
        $info = [
            'nama'=>'Tentang kami'];
        return view('index',$info);
    }
}
