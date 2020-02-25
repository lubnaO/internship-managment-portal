@extends('layout')

@section('content')

<div class ="container">
<div class="jumbotron">

<div class="card">
  <h5 class="card-header">All Student Reports</h5>
  <div class="card-body">
  
    <table class="table table-striped table-hover table-bordered px-3">
  <thead>
    <tr>
      <th scope="col">Trainee Name</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>

    @foreach ($finalEvalution as $finalEvalution)
  
    <tr>
    <td scope="row"><p>{{ $finalEvalution->TraineeName }}  </p></td>
    <td><input class="btn btn-primary" type="submit" value="Show Report"></td>  
    </tr>
    @endforeach
  </tbody>

</table>
  </div>
</div>

</div>

</div>


@endsection