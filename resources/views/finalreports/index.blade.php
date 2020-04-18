@extends('layout')

@section('content')
<html>
<head>

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


<div class ="container mt-5">


<div class="card">
  <h5 class="card-header text-white">Final Training Reports</h5>
  <div class="card-body">
  
  <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>

      <th scope="col">Trainee Name</th>
      <th scope="col">Action</th>
      </tr>
  </thead>
  

      <th class="th-sm col">Trainee Name
      </th>
      <th class="th-sm col">Action
      </th>
     
    </tr>
  </thead>
  <tbody>
  @foreach ($finalreports as $finalReport)

    <tr>
  
      <td>{{ $finalReport->TraineeName }}</td>
      <td scope="row"><a href ="/finalreports/{{$finalReport->id}}" class="btn btn-success"class="btn btn-success">Show Report</td>
      
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



          
          
