@extends('layout')

@section('content')

<div class ="container">
<div class="jumbotron">

<div class="card">
  <h5 class="card-header text-white">Final Evalution Reports</h5>
  <div class="card-body">
  
    <table class="table table-striped table-hover table-bordered px-3">
  <thead>
    <tr>
      <th scope="col">Trainee Name</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>

    
  
    <tr>
    @foreach ($finalEvalutions as $finalEvalution)
    <td scope="row"><p>{{ $finalEvalution->TraineeName }}  </p></td>

    <td><a class="btn btn-primary" href="/finalEvalutions/{{$finalEvalution->id}}">Show Report</a></td>  

    <td> <a href ="/finalEvalutions/{{$finalEvalution->id}}" class="btn btn-success">Show Report</td> 

    </tr>
 
    @endforeach
  
  </tbody>
  
</table>
  </div>
</div>

</div>

</div>

@endsection