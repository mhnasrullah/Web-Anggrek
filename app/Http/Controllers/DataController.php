<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->AdminModel = new AdminModel();
    }
    
    public function index()
    {
        $data = $this->AdminModel->data();
        return view('admin.data',["data"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store()
    {
        request()->validate([
            'nomor' => 'required|unique:admin,nomor|max:8|min:8',
            'nama' => 'required',
            'email' => 'required',
            'pass' => 'required',
        ]);
        // request()->old('nomor'|'nama'|'email'|'pass');
        
        $nomor = Request()->nomor;
        $nama = Request()->nama;
        $email = Request()->email;
        $pass = Request()->pass;
        
        $data = [
            'nomor' =>$nomor,
            'nama' =>$nama,
            'email' =>$email,
            'pass'=>$pass
        ];

        $this->AdminModel->add($data);
        return redirect()->route('dataAdmin')->with('pesan','data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->AdminModel->detail($id);
        // dd($data);
        return view('admin.datadetail',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
