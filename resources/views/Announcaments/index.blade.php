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
    <th scope="col">name</th>
      <th scope="col">Job Name</th>
      <th scope="col">Job Descripion</th>
      <th scope="col">City</th>
      <th scope="col">Start</th>
      <th scope="col">End</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($announcaments as $annouancment)

    <tr>
    <th scope="row"><p>"{{Auth::user()->company->name}}"}  </p></th>
      <th scope="row"><p>{{ $annouancment->title }}  </p></th>
      <td>{{ $annouancment->description}} </td>
      <td>{{ $annouancment->city}}</td>
      <td>{{ $annouancment->A_start}}</td>
      <td>{{ $annouancment->A_end}}</td>
      <td>
      <button class="btn btn-primary top-bar px-3">APPLY </button>
      </td>
    </tr>
   <!-- <tr>
      <th scope="row">{{ $annouancment->title}}</th>
      <td>{{ $annouancment->description}}</td>
      <td>{{ $annouancment->city}}</td>
      <td>{{ $annouancment->A_start}}</td>
      <td>{{ $annouancment->A_end}}</td>
      <td>
      <button class="btn btn-primary top-bar px-3">APPLY </button>
      </td>
    </tr>
    <tr>
      <th scope="row">{{ $annouancment->title}}</th>
      <td>{{ $annouancment->description}}</td>
      <td>{{ $annouancment->city}}</td>
      <td>{{ $annouancment->A_start}}</td>
      <td>{{ $annouancment->A_end}}</td>
      <td>
      <button class="btn btn-primary top-bar px-3">APPLY </button>
      </td>
    </tr>-->
        @endforeach

  </tbody>
</table>
    </div>
    </div>
    
  </div>
</div>
@endsection


