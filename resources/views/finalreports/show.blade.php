@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<div class="container pt-5">
<div class="jumbotorn">
<div class="card">
  <div class="card-header pl-3 text-white">Final Training Reports</div>
  <div class="card-body">

  <h1 class="display-4"><small>Trainee Information</small></h1>

  <dl class="row">
  <dt class="col-sm-3"> Trainee Name</dt>
  <h5 class="">{{$finalReport->TraineeName}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Trainee ID</dt>
  <h5 class="">{{$finalReport->TraineeID}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Trinee Department</dt>
  <h5 class="">{{$finalReport->TraineeDepartment}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Trainee Major</dt>
  <h5 class="">{{$finalReport->Traineemajor}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Trainee Phone</dt>
  <h5 class="">{{$finalReport->TraineePhone}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Trainee Email</dt>
  <h5 class="">{{$finalReport->TraineeEmail}}</h5>
</dl>



<h1 class="display-4"><small>Supervisor Information</small></h1>

<dl class="row">
<dt class="col-sm-3">Supervisor Name</dt>
<h5 class="">{{$finalReport->SupervisorName}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Supervisor Department</dt>
<h5 class="">{{$finalReport->SupervisorDepartment}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Phone</dt>
<h5 class=" ">{{$finalReport->SupervisorPhone}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Supervisor Email</dt>
<h5 class=" ">{{$finalReport->SupervisorEmail}}</h5>
</dl>



<h1 class="display-4"><small>Department Informtion </small></h1>

  <dl class="row">
  <dt class="col-sm-3">Organization Name</dt>
  <h5 class="">{{$finalReport->OrganizationName}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Head of Training Dept. Name</dt>
  <h5 class="">{{$finalReport->OrganizationD}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Organization Phone</dt>
  <h5 class=" ">{{$finalReport->OrganizationPhone}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Organization Fax</dt>
  <h5 class=" ">{{$finalReport->OrganizationFax}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Organization Email</dt>
  <h5 class=" ">{{$finalReport->OrganizationEmail}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Organization Signature</dt>
  <h5 class=" ">{{$finalReport->OrganizationSignature}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Signature Date</dt>
  <h5 class=" ">{{$finalReport->SignatureDate}}</h5>
</dl>


<h1 class="display-4"><small>Fill Parts</small></h1>

<dl class="row">
<dt class="col-sm-3">Part 1: Elaborate the training organization and its major operations</dt>
<h5 class="">{{$finalReport->q1}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Part 2: Elaborate your major responsibilities during training period.</dt>
<h5 class="">{{$finalReport->q2}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Part 3: Elaborate the technologies and tools that you worked with during training and what functions you performed with those technologies</dt>
<h5 class="">{{$finalReport->q3}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Part 4: List your major achievements and challenges during training period</dt>
<h5 class="">{{$finalReport->q4}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Part 05: Elaborate how this training will help in your education and professional growth</dt>
<h5 class="">{{$finalReport->q5}}</h5>
</dl>




  </div>
  </div>
</div>
</body>
</html>

@endsection