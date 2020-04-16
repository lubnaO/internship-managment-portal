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
<div class="alert alert-danger">
    <strong>Attention!</strong> You must be register as student to apply.
  </div>
<div class="container pt-5">
<div class="jumbotorn">
<div class="card">
  <h5 class="card-header pl-3 text-white">Available job</h5>
  <div class="card-body">
    
    
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    
  <thead>
    <tr>
    <th scope="col">name</th>
      <th scope="col">Jobb Name</th>
      <th scope="col">Job Descripion</th>
      <th scope="col">City</th>
      <th scope="col">Start</th>
      <th scope="col">End</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($announcaments as $annouancment)

    <tr>
    
    <th scope="row"><a href="/profiles/{{$annouancment->Company_id}}">{{$annouancment->Company['name']}}  </a></th>
    
      <th scope="row"><p>{{ $annouancment->title }}  </p></th>
      <td>{{ $annouancment->description}} </td>
      <td>{{ $annouancment->city}}</td>
      <td>{{ $annouancment->A_start}}</td>
      <td>{{ $annouancment->A_end}}</td>
      <td>
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

