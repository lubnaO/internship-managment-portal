@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<!-- show respons from u to s -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student grade</title>

</head>
<body>
<div class="container pt-5">
<div class="jumbotorn">
<div class="card">
  <div class="card-header pl-3 text-white">Insert Grade</div>
  <div class="card-body">

<h4>Student Name:</h4><p>{{$id->firstName}}</p>

  <form action="/student/{{$id->id}}" class="container" method="POST" >
       @csrf
  
    <br/> 

<div class="form-check">
  <input class="form-check-input" type="radio" name="massege" id="exampleRadios1" value="pass" checked>
  <label class="form-check-label" for="exampleRadios1">
  pass
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="massege" id="exampleRadios2" value="fail">
  <label class="form-check-label" for="exampleRadios2">
  fail
  </label>
</div>
<br/>
<button type="submit" class="btn btn-primary top-bar px-3">insert </button></td>
</form>


@endsection



