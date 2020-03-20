@extends('layout')

@section('content')

<div class ="container mt-5">


<div class="card">
  <h5 class="card-header text-white">Final Training Reports</h5>
  <div class="card-body">
  
    <table class="table table-striped table-hover table-bordered px-3">
  <thead>
    <tr>
      <th scope="col">Trainee Name</th>
      <th scope="col">Action</th>
      </tr>
  </thead>
  
    <tr>
    @foreach ($finalreports as $finalReport)
    <td scope="row"><p>{{ $finalReport->TraineeName }}  </p></td>
    <td> <a href ="/finalreports/{{$finalReport->id}}" class="btn btn-success">Show Report</td> 
    </tr>
  @endforeach
  </thead>
  <tbody>

  
  </tbody>
</table>
  </div>
</div>

</div>

</div>

@endsection
          
          
