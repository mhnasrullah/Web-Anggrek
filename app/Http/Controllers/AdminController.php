<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriModel;
use App\Models\image;

class AdminController extends Controller
{
    public function __construct(){
        $this->GaleriModel = new GaleriModel();
        $this->image = new image();
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(url('/img'));
        $imagefile = [];
        for ($i=1; $i < 26; $i++) { 
            $imagefile[$i] = $this->image->getfile($i);
        }
        // dd($imagefile);
        return view('admin/index',['gambars'=>$imagefile,'nama'=>'Admin-galeri']);

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request,$id)
    {
        // return $request->file('file')->store('img');
        $filex = $request->file->extension();
        $filename = $id.'.png';

        $path = $request->file('file')->storeAs(
            'public/img',$filename
        );

        $this->image->updateData($id,$filename);

        return redirect()->route('setdata');
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
