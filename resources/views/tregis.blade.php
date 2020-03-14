

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
      <th scope="col">status</th>
      
    </tr>
  </thead>
  <tbody>

    
  
    <tr>
    @foreach ($tregis as $tregiss)
    <td scope="row"><p>{{ $tregiss->StudentName }}  </p></td>
    <td> <a href ="/TrainingRegistrations/{{$tregiss->id}}" class="btn btn-success">Show Report</td> 
    <td><form action="{{ route('status.store') }}" class="container" method="POST" >
       @csrf
  <input type="hidden" value="{{$tregiss->s_id}}" name="stu_id"/>

    <br/> 
  
    
 <h5>Applay status</h5>
<div class="form-check">
  <input class="form-check-input" type="radio" name="massege" id="exampleRadios1" value="approval" checked>
  <label class="form-check-label" for="exampleRadios1">
  approval
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="massege" id="exampleRadios2" value="reject">
  <label class="form-check-label" for="exampleRadios2">
  reject
  </label>
</div>
<br/>

      
      </div>
           <button type="submit" class="btn btn-primary top-bar px-3">submit </button>
           
           
     </td>

     </form> </td>
    </tr>
 
    @endforeach
  
  </tbody>
  
</table>
  </div>
</div>

</div>

</div>

@endsection
=======