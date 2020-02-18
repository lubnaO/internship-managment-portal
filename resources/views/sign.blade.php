
@extends('layout')

@section('content')

<html>

<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 

</head>
<body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script> 

<form> 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header font-size-15   text-white"> Contract </div>
                <div class="col-5 "> <h6 class="font-weight-bold"> <u> By the Training Organization Representative: </u> </h6> </div> 
                
                <div class="col-12"> <p> By signing this registration form I understand that: </p>
                                     <ul>
 <li>  The student is required to undergo rigorous formal training in the responsibilities mentioned above for the agreed hours.</li>
  <li>  Any update about student, his performance, behavior would be promptly communicated to college via assigned email address and will be kept confidential from the student.</li>                                    
  <li>The organization understands that student responsibilities in the organization are purely voluntary and no monetary exchange is mandated by the college.</li> 
  <li>In case of any information furnished by the student proving wrong, both parties have right to terminate the training program after intimation.</li>                                  
                                     
                                     </ul> </div> 
                 
        <div class="form=group col-5">
        
        <label> Trainee Supervisor Name:  </label>
          
          <input  type="text" class="form-control" name="SupervisorName" >

           </div> 
          
        <div class="form=group col-5">
        <label > Trainee Supervisor Designation:  </label>
          <input type="text" class="form-control" name="StudentID" >
        </div>

        <div class="form=group col-5">
        <label > Trainee Supervisor Signature: </label>
          <input type="text" class="form-control" name="SMajor" >
        </div>

        <div class="col-5 "> <h6 class="font-weight-bold"> <u> By the Student: </u> </h6> </div> 

        <div class="col-12"> <p> I hereby state that all information provided above is correct and the responsibility of its
authenticity solely lies on me. In case of any fallacious information, college hold the right to
cancel the training registration.: </p>
                                     
<div class="form=group col-5">
        
        <label> Student Name:  </label>
          
          <input  type="text" class="form-control" name="SupervisorName" >

           </div> 
          
        <div class="form=group col-5">
        <label > Student ID:  </label>
          <input type="text" class="form-control" name="StudentID" >
        </div>

        <div class="form=group col-5">
        <label > Student Signature: </label>
          <input type="text" class="form-control" name="SMajor" >
        </div>
 
        <div class="form=group col-5"> <h7 class="font-weight-bold"> Note: </h7>  <p> Without receiving of filled registration form, the college will assume the training not to have initiated.</p>  </div> 
        
    
</body>
</html>


@endsection