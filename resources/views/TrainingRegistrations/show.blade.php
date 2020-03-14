
@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Registration Report</title>

</head>
<body>
<div class="container pt-5">
<div class="jumbotorn">
<div class="card">
  <div class="card-header pl-3 text-white">Training Registration Reports</div>
  <div class="card-body">

  <h3 class="display-4"><small>Trainee Information</small></h3>

  <dl class="row">
  <dt class="col-sm-3">Trainee Name</dt>
  <h5 class="">{{$tregis->StudentName}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Trainee ID</dt>
  <h5 class="">{{$tregis->StudentID}}</h5>
</dl>




<dl class="row">
<dt class="col-sm-3">Training Major</dt>
<h5 class="">{{$tregis->SMajor}}</h5>
</dl>
<h3 class="display-4"><small>Training Information</small></h3>
<dl class="row">
<dt class="col-sm-3">Training Organization</dt>
<h5 class="">{{$tregis->TrainingOrganization}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Department Name</dt>
<h5 class=" ">{{$tregis->DepartmentName}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Supervisor Info</dt>
<h5 class=" ">{{$tregis->SupervisorInfo}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Trainee Taske</dt>
<h5 class=" ">{{$tregis->TraineeTaske}}</h5>
</dl>



  <dl class="row">
  <dt class="col-sm-3">Traine Houre</dt>
  <h5 class="">{{$tregis->TraineHoure}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Traine Start Date</dt>
  <h5 class="">{{$tregis->TraineDate}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Supervisor Name</dt>
  <h5 class=" ">{{$tregis->SupervisorName}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Supervisor Job</dt>
  <h5 class=" ">{{$tregis->SupervisorJob}}</h5>
</dl>



        
        
        @endsection

