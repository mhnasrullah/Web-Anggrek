<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;

class GaleriController extends Controller
{
    public function __construct(){
        $this->image = new image();
    } 
    public function index(){
        $imagefile = [];
        for ($i=0; $i < 25; $i++) { 
            $imagefile[$i] = $this->image->getfile($i+1);
        }
        // dd($gambars);
        return view('galeri',['gambars'=> $imagefile,'nama' => 'galeri']);
    }
}
