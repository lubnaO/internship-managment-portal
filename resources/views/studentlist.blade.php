@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training registration response</title>

</head>
<body>
<div class="container pt-5">
<div class="jumbotorn">
<div class="card">
  <div class="card-header pl-3 text-white">Training registration response</div>
  <div class="card-body">



<table class="table">
    <tbody>
    @foreach ($status as $sec1)
   


 
    <tr>
    <td>
    <h4>Studet name </h4><p><em>{{ $sec1->student->firstName }}</em></p></td>

   <td> <h4> Applay status:</h4><p><em>{{ $sec1->massege }}</em></p></td>

  <td>
      <form action="{{ route('garde.store') }}" class="container" method="POST" >
       @csrf
  <input type="hidden" value="{{$sec1->stu_id}}" name="stu_id"/>

    <br/> 
  
    
 <h5>garde</h5>
<div class="form-check">
  <input class="form-check-input" type="radio" name="massege" id="exampleRadios1" value="pass" checked>
  <label class="form-check-label" for="exampleRadios1">
  pass
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="massege" id="exampleRadios2" value="fail">
  <label class="form-check-label" for="exampleRadios2">
  reject
  </label>
</div>
<br/>

      
      </div>
           <button type="submit" class="btn btn-primary top-bar px-3">submit </button></td>
    
    </tr>
    @endforeach
    


  </thead>
  <tbody>

  </tbody>
</table>
@endsection
