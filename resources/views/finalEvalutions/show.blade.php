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


@endsection