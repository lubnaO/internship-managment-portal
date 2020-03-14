@extends('layout')

@section('content')

<div class ="container mt-5">


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

<<<<<<< HEAD
    <td><a class="btn btn-primary" href="/finalEvalutions/{{$finalEvalution->id}}">Show Report</a></td>  

    <td> <a href ="/finalEvalutions/{{$finalEvalution->id}}" class="btn btn-success">Show Report</td> 

=======
    <td> <a href ="/finalEvalutions/{{$finalEvalution->id}}" class="btn btn-success">Show Report</td> 

    

>>>>>>> 5cbf7f89c60844420c27772797494f9fe3e2719f
    </tr>
 
    @endforeach
  
  </tbody>
  
</table>
  </div>
</div>

</div>

</div>

@endsection