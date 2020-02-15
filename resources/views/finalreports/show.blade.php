
@extends('layouts.app') 


@section('content')
<<div class="container pt-5">
<div class="jumbotorn">
<div class="card">
  <h5 class="card-header top-bar pl-3 text-white">Annoancment</h5>
  <div class="card-body">
    <h5 class="card-title ">final report from student</h5>

<ul>@foreach ($finalReports as $finalReport)


<li><a href="{{url('storage/'.$finalReport->finalre)}}">file</a></li>


@endforeach
</ul>

@endsection 