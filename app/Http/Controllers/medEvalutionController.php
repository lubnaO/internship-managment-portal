<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medEvalution;
use RealRashid\SweetAlert\Facades\Alert;
class medEvalutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('medEvalutions.index')->with('medEvalutions',medEvalution::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medEvalutions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        medEvalution::create($request->all());
            return redirect( route('home'));

        $request->validate([

            "StudentName"=>"required" ]);
            $request->validate([

                "StudentID"=>"required" ]);
                $request->validate([

                    "TrainingOrganization"=>"required" ]);
                    $request->validate([

                        "DepartmentName"=>"required" ]);
                        $request->validate([

                            "Startdate"=>"required" ]);
                            $request->validate([

                                "Enddate"=>"required" ]);
                                $request->validate([

                                    "AccomplishedTasks"=>"required" ]);
                                    $request->validate([

                                        "SkillsAcquired"=>"required" ]);
                                        $request->validate([

                                            "KnowledgeUsed"=>"required" ]);
                                            $request->validate([

                                                "KeyMeetings"=>"required" ]);

                                                $request->validate([

                                                    "Issues"=>"required" ]);
                                                    $request->validate([

                                                        "Feedback"=>"required" ]);
                                                        $request->validate([

                                                            "TrainingSupervisor"=>"required" ]);
                                                        
      
        medEvalution::create($request->all());
        return view ('home')->with('success','Post Created Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($medEvalution)
    {
        // $finalEvalution = finalEvalution::find($finalEvalution);
        //return $finalEvalution; 
      return view('medEvalutions.show')->with('medEvalution',medEvalution::find($medEvalution));
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
