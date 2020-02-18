<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrainingRegistration;

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
        $request->validate([

            "StudentName"=>"required|:training_registrations"
             
        ]);
        
        $request->validate([

            "StudentID"=>"required|:training_registrations"
             
        ]);
        $request->validate([

            "SMajor"=>"required|:training_registrations"
             
        ]);

        $request->validate([

            "TrainingOrganization"=>"required|:training_registrations"
             
        ]);

        $request->validate([

            "SupervisorInfo"=>"required|:training_registrations"
             
        ]);

        $request->validate([

            "TraineeTaske"=>"required|:training_registrations"
             
        ]);

        $request->validate([

            "TraineHoure"=>"required|:training_registrations"
             
        ]);

        $request->validate([

            "TraineDate"=>"required|:training_registrations"
             
        ]);

        $request->validate([

            "SupervisorName"=>"required|:training_registrations"
             
        ]);
        

        $request->validate([

            "SupervisorJob"=>"required|:training_registrations"
             
        ]);

        TrainingRegistration::create($request->all());


        return redirect (route('TrainingRegistrations.index'));
        
        
        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      

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
