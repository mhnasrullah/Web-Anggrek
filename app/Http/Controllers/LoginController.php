<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;

class LoginController extends Controller
{
    public function __construct(){
        $this->AdminModel = new AdminModel();
    }
    public function index(){
        $admin = $this->AdminModel->data();
        return view('admin.login',['nama' => 'log in','admin' => $admin]);
    }
}
