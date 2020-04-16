<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CV;
Use Alert;

class CVCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('CV.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('CV.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

$request->validate([

    "address"=>"required|:c_v_s"
     
]);

$request->validate([

    "date"=>"required|:c_v_s"
     
]);



$request->validate([

    "formal"=>"required|:c_v_s"
     
]);


$request->validate([

    "courses"=>"required|:c_v_s"
     
]);


$request->validate([

    "skills"=>"required|:c_v_s"
     
]);

$request->validate([

    "nationality"=>"required|:c_v_s"
     
]);

        CV::create($request->all());


        return redirect( route('home'))->with('success', 'CV created Successfully!');
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
