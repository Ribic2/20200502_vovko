<?php

namespace App\Http\Controllers;

use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class webappController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $path = $request->input('path');
        if(is_dir($path)){
            DB::update('UPDATE users set imgPath = ? where username = ?', [$path, 'dijak1']);
        }
        else{
            return redirect('/webapp')->with('display', "Napačen vpis poti ali pa vnesena pot ne obstaja!");
        }
        return redirect('/webapp')->with('display', 'Pot nastavljena na: '.$path);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $path = DB::select('select imgPath from users where username = ?', ['dijak1']);
       //Uploads image

       $pathUser = $path[0]->imgPath;
       $img = $_FILES['img']['name'];
       $img_tmp = $_FILES['img']['tmp_name'];

       move_uploaded_file($img_tmp, $pathUser."/".$img);

       return redirect('/webapp');

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
        //
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
