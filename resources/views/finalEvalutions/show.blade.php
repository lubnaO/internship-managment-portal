@extends('layout')

@section('content')


<div class ="container">
<div class="jumbotron">

<div class="card">
  <h5 class="card-header"> Student Report</h5>
  <div class="card-body">
  
    <table class="table table-striped table-hover table-bordered px-3">
  <thead>
    <tr>
      <th scope="col">Trainee Name</th>
      <td scope="row"><p>{{ $finalEvalution->TraineeName }}  </p></td>
      
    </tr>
  </thead>
  <tbody>

  
    <tr>
    <th scope="col"> Trainee ID</th>

    <td scope="row"><p>{{ $finalEvalution->TraineeID }}</p></td>
    

      
    </tr>
    

  </tbody>

</table>
  </div>
</div>

</div>

</div>

=======
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
  <div class="card-header pl-3 text-white">Final Evalutions Reports</div>
  <div class="card-body">

  <h1 class="display-4"><small>Trainee Information</small></h1>

  <dl class="row">
  <dt class="col-sm-3">Trainee Name</dt>
  <h5 class="">{{$finalEvalution->TraineeName}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Trainee ID</dt>
  <h5 class="">{{$finalEvalution->TraineeID}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Trainee Department</dt>
  <h5 class=" ">{{$finalEvalution->TraineeDepartment}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Trinee Major</dt>
  <h5 class=" ">{{$finalEvalution->Traineemajor}}</h5>
</dl>


<dl class="row">
  <dt class="col-sm-3">Trainee Phone</dt>
  <h5 class=" ">{{$finalEvalution->TraineePhone}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Trainee Email</dt>
  <h5 class=" ">{{$finalEvalution->TraineeEmail}}</h5>
</dl>

<h1 class="display-4"><small>Supervisor Information</small></h1>

<dl class="row">
<dt class="col-sm-3">Supervisor Name</dt>
<h5 class="">{{$finalEvalution->SupervisorName}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Supervisor Department</dt>
<h5 class="">{{$finalEvalution->SupervisorDepartment}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Supervisor Phone</dt>
<h5 class=" ">{{$finalEvalution->SupervisorPhone}}</h5>
</dl>

<dl class="row">
<dt class="col-sm-3">Supervisor Email</dt>
<h5 class=" ">{{$finalEvalution->SupervisorEmail}}</h5>
</dl>

<h1 class="display-4"><small> Training Department Information</small></h1>

  <dl class="row">
  <dt class="col-sm-3">Orgnization Name<</dt>
  <h5 class="">{{$finalEvalution->OrganizationName}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Head of trining dept. Name</dt>
  <h5 class="">{{$finalEvalution->OrganizationD}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Organization Phone</dt>
  <h5 class=" ">{{$finalEvalution->OrganizationPhone}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Organization Fax</dt>
  <h5 class=" ">{{$finalEvalution->OrganizationFax}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Organization Email</dt>
  <h5 class=" ">{{$finalEvalution->OrganizationEmail}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Organization Signature</dt>
  <h5 class=" ">{{$finalEvalution->OrganizationSignature}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Signature Date</dt>
  <h5 class=" ">{{$finalEvalution->SignatureDate}}</h5>
</dl>

<h1 class="display-4"><small> Evaluation Criteria</small></h1>
<h3 class="4"><small> Job Performance</small></h3>
  <dl class="row">
  <dt class="col-sm-3">Attendance & Punctuality</dt>
  <h5 class="">{{$finalEvalution->Score1}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Meeting work plan requirment</dt>
  <h5 class="">{{$finalEvalution->Score2}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Ability & Enthusiasm to learn </dt>
  <h5 class="">{{$finalEvalution->Score3}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Ability to apply knowledge </dt>
  <h5 class="">{{$finalEvalution->Score4}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Quality of work produced (productivity) </dt>
  <h5 class="">{{$finalEvalution->Score5}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Ability to follow instruction</dt>
  <h5 class="">{{$finalEvalution->Score6}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Quality of report generation(if applicable) </dt>
  <h5 class="">{{$finalEvalution->Score7}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Overall organizaion </dt>
  <h5 class="">{{$finalEvalution->Score8}}</h5>
</dl>

<h3 class="4"><small> Personal Charactries</small></h3>
  <dl class="row">
  <dt class="col-sm-3">Conduct nd discipline</dt>
  <h5 class="">{{$finalEvalution->Score9}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Responsibility</dt>
  <h5 class="">{{$finalEvalution->Score10}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Self confidence & independence </dt>
  <h5 class="">{{$finalEvalution->Score11}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Problem solving skills </dt>
  <h5 class="">{{$finalEvalution->Score12}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Creativity </dt>
  <h5 class="">{{$finalEvalution->Score13}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">General appearance</dt>
  <h5 class="">{{$finalEvalution->Score14}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Cooperation with colleagues</dt>
  <h5 class="">{{$finalEvalution->Score15}}</h5>
</dl>

<dl class="row">
  <dt class="col-sm-3">Communication Skills</dt>
  <h5 class="">{{$finalEvalution->Score16}}</h5>
</dl>

  </div>
  </div>
</div>
</body>
</html>
>>>>>>> f0ab39d7d5ce019d0483a8ca82225fce2f51d3d9

@endsection