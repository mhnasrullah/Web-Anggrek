<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        $info = [
            'nama'=>'Beranda'];
        return view('index',$info);
    }
}
