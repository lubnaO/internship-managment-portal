@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<style>
/*@import url('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css');*/

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
</style>
</head>
<body>
<form  action="{{ route('CV.store')}}" method ="POST"> 
@csrf
<div class="container" >

    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-1" type="button" class="btn-primary btn-circle">1</a>
                <p><small> Personal Information</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-2" type="button" class=" btn btn-primary btn-circle" disabled="disabled">2</a>
                <p><small> Education </small></p>
            </div>
            
        </div>
    </div>
    
    <form role="form">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label"> Name</label>
                    <input maxlength="100"  name="Name" type="text" required="required" class="form-control"  />
                </div>
                <!--<div class="form-group">
                    <label class="control-label">Nationality</label>
                    <input maxlength="100" name ="Nationality" type="text" required="required" class="form-control"  />
                </div>--> 

                <div class="form-group">
                    <label class="control-label">Address</label>
                    <input maxlength="100" name="address" type="text" required="required" class="form-control" />
                </div>

                <div class="form-group">
                    <label class="control-label">Brith date</label>
                    <input maxlength="100" name="date" type="date" required="required" class="form-control" />
                </div>

            
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input maxlength="100" name="email" type="text" required="required" class="form-control"  />
                </div>

                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Formal education </label>
                    <input maxlength="200" name="formal" type="text" required="required" class="form-control"  />
                </div>
                

                <div class="form-group">
                    <label class="control-label">Courses</label>
                    <textarea   name="courses" type="text" required="required" class="form-control"></textarea> 
                </div>

                <div class="form-group">
                    <label class="control-label">Skills</label>
                    <textarea   name="skills"  required="required" row="3" class="form-control" ></textarea>
                </div>

            
        
                <button class="btn btn-primary pull-right" type="submit">Submit!</button>
            </div>
        </div>
</div>
</form>

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
</body>
</html>
@endsection