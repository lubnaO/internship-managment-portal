@extends('layout')

@section('content')

<html>
<title> Practical Training Registration </title>

<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 

<script
src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="js/bootstrap.min.js"></script> 

<style>

input, textarea{
 
 width: 100%;
 padding: 12px 20px;
margin: 8px 0;
box-sizing: border-box;
} 

.btn {

	margin-right: 20px;
	width: 10%;

}


</style>
	
</head>
<body>
<form> 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header font-size-15 top-bar  text-white"> Practical Training Registration</div>
        
        <div class="form=group col-5">
        
        <label> Student Name:  </label>
          
          <input  type="text" class="form-control" name="StudentName" >

           </div> 
          
        <div class="form=group col-5">
        <label > Student ID:  </label>
          <input type="text" class="form-control" name="StudentID" >
        </div>

        <div class="form=group col-5">
        <label > Major:  </label>
          <input type="text" class="form-control" name="SMajor" >
        </div>

        <div class="form=group col-5">

        <p class="font-weight-bold"> <u>Training organization: </u>  </p>
        <label > Name:  </label>
          <input type="text" class="form-control" name="OName" >
        </div>

        <div class="form=group col-5">
        <label > Address: </label>
          <input type="text" class="form-control" name="Address" >
        </div>

        <div class="form=group col-5">

        <p class="font-weight-bold" > <u>Training superviser contact details:  </u> </p>
        <label > Name:  </label>
          <input type="text" class="form-control" name="PName" >
        </div>

        
        <div class="form=group col-5">
        <label > Designation:  </label>
          <input type="text" class="form-control" name="Designation" >
        </div>

        <div class="form=group col-5">
        <label > Email:   </label>
          <input type="text" class="form-control" name="PEmail" >
        </div>
        
        <div class="form=group col-5">
        <label > Telephone:   </label>
          <input type="phone" class="form-control" name="phone" >
        </div>


        <div class="form=group col-5">
        <label > Work Hours: </label>
          <input type="text" class="form-control" name="Hours" >
        </div>

        <div class="form=group col-5">
        <label >Joining date:  </label>
          <input type="date" class="form-control" name="date" >
		</div>
		

		<div class="form=group col-5">
        <label > Trainee Responsibilities:    </label>
		<textarea class="form-control" rows="5" id="respon" name="respon"></textarea>

        </div>
        <div> 
		<button type="submit"  class="btn  float-right top-bar  text-white">Submit</button> </div>
      </form>



</body> 
</html>


@endsection