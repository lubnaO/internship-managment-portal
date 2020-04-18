<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Signature;
use Alert; 

class SignatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Signature.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)


    {
         // We create a variable to define the name of the file
             // Here it's the date and the extension signature.png
             $filename = date('mdYHis') . "-signature.png";
             // We store the signature file name in DB
             $signature = new Signature();
             $signature->signature = $filename;
             $signature->save();
             // We decode the image and store it in public folder
             $data_uri = $request->signature;
             $encoded_image = explode(",", $data_uri)[0];
             $decoded_image = base64_decode($encoded_image);
             file_put_contents($filename, $decoded_image);
           
            
        Signature::create($request->all());
        return redirect( route('home'))->with('success', 'Submission completed Successfully!');
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
