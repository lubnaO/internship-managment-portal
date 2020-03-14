<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\finalEvalution;

class finalEvalutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('finalEvalutions.index')->with('finalEvalutions',finalEvalution::all());
    

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('finalEvalutions.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        finalEvalution::create($request->all());
            return redirect( route('home'));
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($finalEvalution)
    {
<<<<<<< HEAD
      // return $id;
        return view ('finalEvalutions.show')->with('finalEvalution',finalEvalution::find($id));
=======
>>>>>>> 5cbf7f89c60844420c27772797494f9fe3e2719f

       
       // $finalEvalution = finalEvalution::find($finalEvalution);
        //return $finalEvalution; 
      return view('finalEvalutions.show')->with('finalEvalution',finalEvalution::find($finalEvalution));
    
<<<<<<< HEAD

=======

      // return $id;
        return view ('finalEvalutions.show')->with('finalEvalution',finalEvalution::find($id));


>>>>>>> 5cbf7f89c60844420c27772797494f9fe3e2719f
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
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
