

@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</style>
</head>
<body>

<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                <p><small>Student Information</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p><small>Training  Information</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p><small>Student evaluation</small></p>
            </div>
            
        </div>
    </div>
    
    <form role="form" action="{{ route('medEvalutions.store') }}" class="container" method="POST">
    @csrf
    <div class="panel panel-primary setup-content" id="step-1">
    <div class="panel-heading">
                
                </div>
                <form role="form" action="{{ route('medEvalutions.store') }}" class="container" method="POST">
    @csrf
                <div class="panel-body">
                <div class="form-group">
                    <label class="control-label"> Student Name </label>
                    <input type="text" placeholder="Student Name" name="StudentName" maxlength="100"  type="text" required="required" class="form-control"required>
                </div>
                <div class="form-group">
                    <label class="control-label">Student ID</label>
                    <input type="text" placeholder="16000000" name="StudentID" maxlength="100" type="text" required="required" class="form-control" required>
                </div>

                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-primary setup-content" id="step-2">
        <div class="panel-heading">
                 
                 </div>
            <div class="form-group">
                    <label class="control-label">Training Organization</label>
                    <input type="text" placeholder="Training Organization" name="TrainingOrganization" maxlength="100"   type="text" required="required" class="form-control" required> 
                </div>

                <div class="form-group">
                    <label class="control-label">Training Supervisor</label>
                    <input type="text" placeholder="Training Supervisor" name="TrainingSupervisor" maxlength="100"  type="text" required="required" class="form-control" required>
                </div>

                <div class="form-group">
                    <label class="control-label">Department Name</label>
                    <input type="text" placeholder="Department Name" name="DepartmentName"  maxlength="100" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="control-label">Start date</label>
                    <input maxlength="100"   required="required" class="form-control"  type="date" placeholder="1\1\2020 " name="Startdate" required> </input>
                </div>
                <div class="form-group">
                    <label class="control-label">End date</label>
                    <input maxlength="100"   required="required" class="form-control"   type="date" placeholder="1\1\2020 " name="Enddate" required> </input>
                </div>

            
            
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-3">
        <div class="panel-heading">
               
               </div>
               <div class="panel-body">
               
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="control-label">Accomplished Tasks</label>
                    <textarea class="form-control"  id="exampleFormControlTextarea1" rows="3" placeholder="Accomplished Tasks " name="AccomplishedTasks" required> </textarea class="form-control"> 
                </div>
                <div class="form-group">
                    <label class="control-label">Skills Acquired</label>
                    <textarea class="form-control"  id="exampleFormControlTextarea1" rows="3" placeholder="Skills Acquired" name="SkillsAcquired" required> </textarea> 
                </div>

                <div class="form-group">
                    <label class="control-label">Knowledge Used</label>
                    <textarea class="form-control"  id="exampleFormControlTextarea1" rows="3" placeholder="Knowledge Used " name="KnowledgeUsed" required> </textarea> 
                </div>

                <div class="form-group">
                    <label class="control-label">Key Meetings</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Key Meetings" name="KeyMeetings" required> </textarea> 
                </div>

                <div class="form-group">
                    <label class="control-label">Issues with Trainee</label>
                    <textarea class="form-control"  id="exampleFormControlTextarea1" rows="3" placeholder="Issues with Trainee" name="Issues" required> </textarea> 
                </div>

                <div class="form-group">
                    <label class="control-label">Supervisor Feedback</label>
                    <textarea class="form-control"  id="exampleFormControlTextarea1" rows="3" placeholder="Supervisor Feedback" name="Feedback" required> </textarea> 
                </div>

          
                <button class="btn btn-primary pull-right" type="submit">Submit!</button>
            </div>
        </div>
    </form>
</div>
    
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