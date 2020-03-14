





    @extends('layout')

@section('content')
            
<div class="container pt-5">
<div class="jumbotorn">
<div class="card">
  <h5 class="card-header pl-3 text-white">Requests</h5>
  <div class="card-body">
    <h5 class="card-title "></h5>
    
    <table class="table table-striped table-hover table-bordered">
    
  <thead>
    <tr>
    
      <th scope="col">Student Name</th>
      <th scope="col">Annoancment name </th>

      <th scope="col"> address </th>
      <th scope="col"> Email</th>
      <th scope="col">Birthday </th>
      <th scope="col"> nationality</th>
      <th scope="col"> formal</th>
      <th scope="col"> skills</th>
      <th scope="col"> courses</th>


    </tr>
  </thead>
  <tbody>
  @foreach (Auth::user()->company->announcaments as $annu)
  @foreach ($annu->applicants as $apply)
 




    <tr>
    
      <th>{{ $apply->student->firstName }} </th>
      <th >{{$annu->title}}</th>
      <td> {{ $apply->student->cv->	address }}</td>
      <td>{{ $apply->student->cv->email }}</td>
      <td>{{ $apply->student->cv->date }}</td>
      <td>{{ $apply->student->cv->nationality }}</td>

      <td>{{ $apply->student->cv->formal }}</td>
      <td>{{ $apply->student->cv->courses }}</td>
      <td>{{ $apply->student->cv->skills }}</td>
      <td>      <button type="submit" class="btn btn-primary top-bar px-3">approval </button>
      <button type="submit" class="btn btn-primary top-bar px-3">reject </button>
</td>

      <td>
   
        @endforeach
        @endforeach




  </tbody>
</table>
<p></p>
    </div>
    </div>
    
  </div>
 
</div>

@endsection






