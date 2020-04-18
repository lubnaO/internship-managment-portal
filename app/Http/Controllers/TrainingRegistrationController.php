<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrainingRegistration;
use App\Http\Requests\trainingRequest;
Use Alert;
class TrainingRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        return view ('TrainingRegistrations.index');

    }
    public function indo()
    {
        return view ('tregis')->with('tregis',TrainingRegistration::all());;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    
    {   
        
      
        return view ('TrainingRegistrations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        

         
        
         TrainingRegistration::create($request->all());
         
         //return redirect( route('Signature.create'));
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
        return view ('TrainingRegistrations.show')->with('tregis',TrainingRegistration::find($id));


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
