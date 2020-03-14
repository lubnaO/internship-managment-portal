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
  <div class="card-header pl-3 text-white">Med Evalutions Reports</div>
  <div class="card-body">

  <h1 class="display-4"><small>Trainee Information</small></h1>

  <dl class="row">
  <dt class="col-sm-3">Trainee Name</dt>
  <h5 class="">{{$medEvalution->StudentName}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Trainee ID</dt>
  <h5 class="">{{$medEvalution->StudentID}}</h5>
</dl>


<h1 class="display-4"><small>Supervisor Information</small></h1>

<dl class="row">
<dt class="col-sm-3">Training Organization</dt>
<h5 class="">{{$medEvalution->TrainingOrganization}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Training Supervisor</dt>
<h5 class="">{{$medEvalution->TrainingSupervisor}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Department Name</dt>
<h5 class=" ">{{$medEvalution->DepartmentName}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Start date</dt>
<h5 class=" ">{{$medEvalution->Startdate}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">End date</dt>
<h5 class=" ">{{$medEvalution->Enddate}}</h5>
</dl>


<h1 class="display-4"><small>Student evaluation </small></h1>

  <dl class="row">
  <dt class="col-sm-3">Accomplished Tasks</dt>
  <h5 class="">{{$medEvalution->AccomplishedTasks}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Skills Acquired</dt>
  <h5 class="">{{$medEvalution->SkillsAcquired}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Knowledge Used</dt>
  <h5 class=" ">{{$medEvalution->KnowledgeUsed}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Key Meetings</dt>
  <h5 class=" ">{{$medEvalution->KeyMeetings}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Issues with Trainee</dt>
  <h5 class=" ">{{$medEvalution->Issues}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Supervisor Feedback</dt>
  <h5 class=" ">{{$medEvalution->Feedback}}</h5>
</dl>



  </div>
  </div>
</div>
</body>
</html>

@endsection