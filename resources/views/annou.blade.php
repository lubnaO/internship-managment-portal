@extends('layout')

@section('content')
<div class="container pt-5">
<div class="jumbotorn">
<div class="card">
  <h5 class="card-header top-bar pl-3 text-white">Annoancment</h5>
  <div class="card-body">
    <h5 class="card-title ">Available annouancment</h5>
    
    <table class="table table-striped table-hover table-bordered">
    
  <thead>
    <tr>
      <th scope="col">Job Name</th>
      <th scope="col">Job Descripion</th>
      <th scope="col">City</th>
      <th scope="col">Start</th>
      <th scope="col">End</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">CISCO</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
      <button class="btn btn-primary top-bar px-3">APPLY </button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>
      <button class="btn btn-primary top-bar px-3">APPLY </button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>
      <button class="btn btn-primary top-bar px-3">APPLY </button>
      </td>
    </tr>
   
  </tbody>
  
 
</table>
    </div>
    </div>
    
  </div>
</div>

@endsection
