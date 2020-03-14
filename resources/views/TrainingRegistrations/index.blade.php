@extends('layout')

@section('content')
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="_token" content="{{csrf_token()}}" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
        <title>Signature</title>
    <style>
    
    .signature-pad {

     background-color: #F5F5F5; 
    }
    .card-header{
        background-color: #193870; 
    }
    .button1 {
  background-color: #193870; /* Dark blue */ 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
}

.button1:hover {
  background-color: #FF8C00; /* Orange */
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
    </style>

    </head>
    <body>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script> 

<!-- This simple signature pad form register the signatures with AJAX  -->
<!-- The signatures are stored in Public folder and in DB (here signature -> file) -->


<!-- Signature pad form made with Boostrap components -->


<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header font-size-15   text-white"> Contract </div>
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

            <div class="alert alert-success" style="display:none"></div>

              <div class="wrapper">
                <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
              </div>
              <div class="form=group col-12">
               <h7 class="font-weight-bold"> Note: </h7> 
               <p> Without receiving of filled registration form, the college will assume the training not to have initiated.</p> 
                </div> 

              <br>
              <button  class="button1" id="save">Save</button>
              <button class="button1" id="clear">Clear</button>

            </div>
            </form> 
        </div>
        </html> 
        @endsection

<!-- Link to js file in folder app and CDN used for the signature pad :  Jquery, ajax, signature pad -->
      <script src="{{ url('js/app.js') }} " charset="utf-8"></script>
      <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script> 


<!-- AJAX to save signature pad content -->

      <script>
         $(function(){

               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

               var canvas = document.getElementById('signature-pad');

               var signaturePad = new SignaturePad(canvas, {
               });

               var saveButton = document.getElementById('save');
               var clearButton = document.getElementById('clear');

               saveButton.addEventListener('click', function (event) {

               $.ajax({
                  url: "{{ url('storage/images') }}",
                  method: 'post',
                  data: {
                     signature: signaturePad.toDataURL('image/png'),
                  },
                  success: function(result){
                     jQuery('.alert').show();
                     jQuery('.alert').html(result.success);
                  }});
               });

                clearButton.addEventListener('click', function () {
                  signaturePad.clear();
                });

            });
      </script>

    </body>

</html>
<<<<<<< HEAD
           
        
        @endsection
