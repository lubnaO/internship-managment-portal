@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Training Registration </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script> 

<style>
/*@import url('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css');*/
.signature-pad {

background-color: #F5F5F5; 
}
.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
    margin-top:30px;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
.container{
    border:  dot orange;
    margin-top:150px;
   
}
body{

background-image: url("/images/in.jpg");
height:50px;

}
.btn-primary{
  background-color: #f26427
}
.button2 {
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

.button2:hover {
  background-color: #FF8C00; /* Orange */
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>


            <div class="stepwizard">
      
        <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step col-xs-3"> 
                <a href="#step-1" type="button" class=" btn btn-primary btn-circle active" disabled="disabled">1</a>
                <p><small>Student Information</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-2" type="button" class=" btn btn-primary btn-circle" disabled="disabled">2</a>
                <p><small>Supervisor Information</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-3" type="button" class="btn btn-primary btn-circle" disabled="disabled">3</a>
                <p><small>Training Information</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-4" type="button" class="btn btn-primary btn-circle" disabled="disabled">4</a>
                <p><small>Contract</small></p>
            </div>
           
        </div>
    </div>
    
    <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
           
            </div>
          
            <div class="panel-body">
                <div class="form-group ">
                <form role="form" enctype="multipart/form-data" action="{{route('TrainingRegistrations.store')}}" method="POST">
                   @csrf
                    <label class="control-label col-3">Student Name</label>
                    <input maxlength="100"  name="StudentName" type="text" required="required" class="form-control"  placeholder="Your name"/>
                </div>
                <div class="form-group">
                    <label class="control-label col-3">ID</label>
                    <input maxlength="100" name ="StudentID" type="text" required="required" class="form-control" placeholder="e.g 150000"/>
                </div>

                <div class="form-group">
                    <label class="control-label col-3">Major</label>
                    <input maxlength="100" name="SMajor" type="text" required="required" class="form-control" placeholder="e.g Accounting" />
                </div>

            
               

                <button class="btn btn-primary nextBtn float-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-3">Training organization Name</label>
                    <input maxlength="200" name="TrainingOrganization" type="text" required="required" class="form-control" placeholder="Company name" />
                </div>
                <div class="form-group">
                    <label class="control-label col-3">Supervisor Name </label>
                    <input maxlength="200" name="SupervisorName" type="text" required="required" class="form-control" placeholder="Supervisor name" />
                </div>

                <div class="form-group">
                    <label class="control-label col-3">Designation: </label>
                    <input maxlength="200"  name="SupervisorJob" type="text" required="required" class="form-control" placeholder="Designation"/>
                </div>

                <div class="form-group">
                    <label class="control-label col-3">Email</label>
                    <input maxlength="200"   name="SupervisorInfo" type="text" required="required" class="form-control" placeholder="example@example.com"/>
                </div>

                <button class="btn btn-primary nextBtn float-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-3">Work Hours:</label>
                    <input maxlength="200" type="text" required="required" class="form-control" name="TraineHoure" placeholder="e.g 280 hours" />
                </div>
                <div class="form-group">
                    <label class="control-label col-3">Joining date:</label>
                    <input maxlength="200" type="date" required="required" class="form-control" name ="TraineDate" />
                </div>
                
		<div class="form=group ">
        <label class="control-label col-3" > Trainee Responsibilities:    </label>
		<textarea class="form-control" rows="5" id="respon" name="TraineeTaske" placeholder="Trainee Responsibilities"></textarea>
        <input type="hidden" value="{{Auth::user()->student->id}}" name="s_id"/>

        </div>
          
        <button class="btn btn-primary nextBtn float-right" type="button">Next</button>
            </div> 
            </div> 
        <div class="panel panel-primary setup-content" id="step-4">
            <div class="panel-heading">
                
            </div>
            <div class="panel-body">
            <div class="container">
 <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            <div class="card">
            <div class="col-5 "> <h6 class="font-weight-bold"> <u> By the Student: </u> </h6> </div> 

<div class="col-12"> <p> I hereby state that all information provided above is correct and the responsibility of its
authenticity solely lies on me. In case of any fallacious information, college hold the right to
cancel the training registration.: </p>
                             

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
        
                <button class="btn btn-primary pull-right" type="submit" id="btnsubmit">Submit!</button>
            </div>
          
            </div> 
            </div>
            </div> 
        </div>
         
       
    </form>
</div>
    







<script src="{{ url('js/app.js') }} " charset="utf-8"></script>
      <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script> 

<script>
$(document).ready(function () {

var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn');

allWells.hide();

navListItems.click(function (e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
        $item = $(this);

    if (!$item.hasClass('disabled')) {
        navListItems.removeClass('btn-success').addClass('btn-default');
        $item.addClass('btn-success');
        allWells.hide();
        $target.show();
        $target.find('input:eq(0)').focus();
    }
});

allNextBtn.click(function () {
    var curStep = $(this).closest(".setup-content"),
        curStepBtn = curStep.attr("id"),
        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
        curInputs = curStep.find("input[type='text'],input[type='url']"),
        isValid = true;

    $(".form-group").removeClass("has-error");
    for (var i = 0; i < curInputs.length; i++) {
        if (!curInputs[i].validity.valid) {
            isValid = false;
            $(curInputs[i]).closest(".form-group").addClass("has-error");
        }
    }

    if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
});

$('div.setup-panel div a.btn-success').trigger('click');
});
</script>   
<script>
         $(function(){

           
               var canvas = document.getElementById('signature-pad');

               var signaturePad = new SignaturePad(canvas, {
               });
            
           
            });

      </script>


</body>

</html>
           
        
        @endsection