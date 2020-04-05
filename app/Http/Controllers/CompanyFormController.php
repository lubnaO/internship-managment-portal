<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Announcament;
use App\Http\Requests\CompanyformRequest;


class CompanyFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('company.index')->with('company',Company::all()); 


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyformRequest $request)
    {
        CompanyForm::create([
            'name'=>$request->name,
            'city'=>$request->city,
            'description'=>$request->description,
            'contact'=>$request->contact, 
            'history'=>$request->history,
            'phone'=>$request->phone, 
            'create'=>$request->create, 
            'c_id'=>$request->c_id,
            'img'=>$request->img->store('images','public')]);
         
            session()->flash('success', 'post created successfully');
       
         return redirect (route('company.index'));
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view ('profile')->with('company',Company::find($id));

     
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
