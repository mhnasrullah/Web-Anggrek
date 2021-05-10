<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriModel;

class GaleriController extends Controller
{
    public function __construct(){
        $this->GaleriModel = new GaleriModel();
    } 
    public function index(){
        $gambars = $this->GaleriModel->Data();
        // dd($gambars);
        return view('galeri',['gambars'=> $gambars,'nama' => 'galeri']);
    }
}
