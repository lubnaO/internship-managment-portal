





    @extends('layout')

@section('content')
            
<div class="container pt-5">
<div class="jumbotorn">
<div class="card">
  <h5 class="card-header pl-3 text-white">Requests</h5>
  @foreach (Auth::user()->company->announcaments as $annu)
  @foreach ($annu->applicants as $apply)
  <div class="card-body">
    <h5 class="card-title "></h5>
    
    <table class="table table-striped table-hover table-bordered">
    
    <tbody>
  
    <tr>
    <td >
      <h5>Student Name:</h5>
      <p>{{ $apply->student->firstName }} </p>
      <h5 scope="col">Annoancment name: </h5>
      <p >{{$annu->title}}</th>
      <h5> address:</h5>
      <p> {{ $apply->student->cv->address }}</p>
      <h5> Email:</h5>
      <p>{{ $apply->student->cv->email }}</p>
      <h5>Birthday   </h5>
      <p>{{ $apply->student->cv->date }}</p>
      <h5> nationality</h5>
      <p>{{ $apply->student->cv->nationality }}</p>
      <h5> formal</h5>
     <p>{{ $apply->student->cv->formal }}</p>
      <h5> skills</h5>
      <p>{{ $apply->student->cv->skills }}</p>
      <h5> courses</h5>
      <p>{{ $apply->student->cv->courses }}</p>
      <td>
      
      <form action="{{ route('record.store') }}" class="container" method="POST" >
       @csrf
  <input type="hidden" value="{{$apply->student->id}}" name="student_id"/>
      <input type="hidden" value="{{ $annu->id }}" name="announ_id"/>

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

  <div class="form-group">
    <h5>The tasks assigned to the student: </h5>
      <textarea class="form-control" name ="tasks" id="exampleFormControlTextarea1" rows="16"></textarea>
      
      </div>
           <button type="submit" class="btn btn-primary top-bar px-3">submit </button>
           
           
     </td>

     </form>
    

      
    </tr>
  
 
 



<!--
    <tr>
    
   
      
      
      
      <td>{{ $apply->student->cv->date }}</td>
      <td>{{ $apply->student->cv->nationality }}</td>

      <td>{{ $apply->student->cv->formal }}</td>
      <td>{{ $apply->student->cv->courses }}</td>
      <td>{{ $apply->student->cv->skills }}</td>
      <td>      <button type="submit" class="btn btn-primary top-bar px-3">approval </button>
      <button type="submit" class="btn btn-primary top-bar px-3">reject </button>
</td>

      <td> -->
   
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






