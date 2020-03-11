@extends('layout')

@section('content')

<style>
body{

background-image: url("/images/back10.jpg");
height:50px;

}
.btn-primary{
  background-color: #f26427
}
</style>

<div class="container pt-5">
<div class="jumbotorn">
<div class="card">
  <div class="card-header pl-3 text-white">Create Your Profile in 
  Our Website</div>
  <div class="card-body">

  <form action = "{{route ('company.store')}}"  method ="POST">
  @csrf
  <div class="form-group">
    <label for="name">Company Name</label>
    <input type="text"  name ="name" class= "form-control"> 
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1"> City</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="city">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Berif Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Contact with us</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="contact">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Value</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="create">
  </div>





  <div class="form-group">
    <label for="exampleFormControlInput1">Out history</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name ="history">
  </div>

 <!-- <div class="form-group">
    <label for="exampleFormControlInput1">image</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name ="image">
  </div>--> 


  <button type="submit" class=" button btn btn-primary  px-5 font-size-15">Puplish</button>

  
</form>

  
  </div>
</div>









@endsection 