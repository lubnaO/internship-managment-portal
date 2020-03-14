@extends('layout')

@section('content')

<div class ="container mt-5">


<div class="card">
  <h5 class="card-header text-white">Med Evalution Reports</h5>
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
    @foreach ($medEvalutions as $medEvalution)
    <td scope="row"><p>{{ $medEvalution->StudentName }}  </p></td>
    <td> <a href ="/medEvalutions/{{$medEvalution->id}}" class="btn btn-success">Show Report</td> 
    </tr>
 
    @endforeach
  
  </tbody>
  
</table>
  </div>
</div>

</div>

</div>

@endsection