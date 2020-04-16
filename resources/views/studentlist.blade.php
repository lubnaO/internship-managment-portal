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
  <td scope="row"><a href ="/student/{{$sec1->stu_id}}/edit" class="btn btn-success"class="btn btn-success">Insert grade</td>

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
