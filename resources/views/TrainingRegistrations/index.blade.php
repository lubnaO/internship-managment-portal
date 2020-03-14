
@extends('layout')

@section('content')

<div class ="container">
<div class="jumbotron">

<div class="card">
  <h5 class="card-header text-white">Training Registrations </h5>
  <div class="card-body">
  
    <table class="table table-striped table-hover table-bordered px-3">
  <thead>
    <tr>
      <th scope="col">Student Name</th>
      <th scope="col">Action</th>
      <th scope="col">grade</th>
      
    </tr>
  </thead>
  <tbody>

    
  
    <tr>
    @foreach ($medEvalutions as $medEvalution)
    <td scope="row"><p>{{ $medEvalution->StudentName }}  </p></td>
    <td> <a href ="/medEvalutions/{{$medEvalution->id}}" class="btn btn-success">Show Report</td> 
    <td></td>
    </tr>
 
    @endforeach
  
  </tbody>
  
</table>
  </div>
</div>

</div>

</div>

@endsection