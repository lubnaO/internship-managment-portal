@extends('layout')

@section('content')
<html>
<head>
    <title>Training registration response</title>
    <link href="css/datatables.min.css" rel="stylesheet">
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="js/datatables.min.js"></script>
<style>table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
  bottom: .5em;
}</style>
</head>

<div class="container pt-5">

<div class="card">
  <div class="card-header text-white">Training registration response</div>
  <div class="card-body">


<!-- fali or pass from u-->
  <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    
  <thead>
    <tr>
    <td>
    <h4>Studet name </h4></td>

   <td> <h4> Applay status:</h4></td>

  <td>
      
  
    
 <h5>garde</h5>
 </td>

    </tr>
    
    

  </thead>
  <tbody>
  <tr>
  @foreach ($status as $sec1)
  <td><p><em>{{ $sec1->student->firstName }}</em></p></td>
  <td><p><em>{{ $sec1->massege }}</em></p></td>
  <td>
      <form action="{{ route('garde.store') }}" class="container" method="POST" >
       @csrf
  <input type="hidden" value="{{$sec1->stu_id}}" name="stu_id"/>
  
    <br/> 

<div class="form-check">
  <input class="form-check-input" type="radio" name="massege" id="exampleRadios1" value="pass" checked>
  <label class="form-check-label" for="exampleRadios1">
  pass
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="massege" id="exampleRadios2" value="fail">
  <label class="form-check-label" for="exampleRadios2">
  fail
  </label>
</div>
<br/>

      
      </div>
           <button type="submit" class="btn btn-primary top-bar px-3">submit </button></td>
           </tr>
           @endforeach

  </tbody>
  
</table>
</div>
</div>

</div>

</div>
<script>
// Basic example
// Basic example
// Basic example
$(document).ready(function () {
$('#dtBasicExample').DataTable({
"searching": true // false to disable search (or any other option)
});
$('.dataTables_length').addClass('bs-select');
});
</script>
<!-- MDBootstrap Datatables  -->
</html>
@endsection
