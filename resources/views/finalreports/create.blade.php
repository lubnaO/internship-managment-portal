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
                <p><small>Trainee Information</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p><small>Supervisor Information</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p><small>Department Information</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p><small>Fill Parts</small></p>
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
                    <input maxlength="100"  name="TrineeName" type="text" required="required" class="form-control"  />
                </div>
                <div class="form-group">
                    <label class="control-label">ID</label>
                    <input maxlength="100" name ="TraineeID" type="text" required="required" class="form-control"  />
                </div>

                <div class="form-group">
                    <label class="control-label">Department</label>
                    <input maxlength="100" name="TraineeDeprtment " type="text" required="required" class="form-control" />
                </div>

                <div class="form-group">
                    <label class="control-label">Major</label>
                    <input maxlength="100" name="Traineemajor" type="text" required="required" class="form-control" />
                </div>

                <div class="form-group">
                    <label class="control-label">Phone</label>
                    <input maxlength="100" name="TraineePhone" type="text" required="required" class="form-control" />
                </div>

                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input maxlength="100" name="TraineeEmail" type="text" required="required" class="form-control"  />
                </div>

                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                 
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Name</label>
                    <input maxlength="200" name="SupervisorName" type="text" required="required" class="form-control"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Department</label>
                    <input maxlength="200" name="SupervisorDepartment " type="text" required="required" class="form-control" />
                </div>

                <div class="form-group">
                    <label class="control-label">Phone</label>
                    <input maxlength="200"  name="SupervisorPhone" type="text" required="required" class="form-control"/>
                </div>

                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input maxlength="200"   name="SupervisorEmail" type="text" required="required" class="form-control" />
                </div>

                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Orgnization Name</label>
                    <input maxlength="200" type="text" required="required" class="form-control" name="OrganizationName" />
                </div>
                <div class="form-group">
                    <label class="control-label">Head of Training Dept. Name</label>
                    <input maxlength="200" type="text" required="required" class="form-control" name ="OrganizationD" />
                </div>

                <div class="form-group">
                    <label class="control-label">Phone</label>
                    <input maxlength="200" type="text" required="required" class="form-control" name="OrganizationPhone" />
                </div>

                <div class="form-group">
                    <label class="control-label">Fax</label>
                    <input maxlength="200" type="text" required="required" class="form-control" name="OrganizationFax" />
                </div>

                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input maxlength="200" type="text" required="required" class="form-control" name="OrganizationEmail" />
                </div>

                <div class="form-group">
                    <label class="control-label">Signature</label>
                    <input maxlength="200" type="text" required="required" class="form-control" name="OrganizationSignature" />
                </div>

                <div class="form-group">
                    <label class="control-label">Date</label>
                    <input maxlength="200" type="text" required="required" class="form-control" name="date" />
                </div>

                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-4">
            <div class="panel-heading">
               
            </div>
            <div class="panel-body">

            <div class="form-group">
    <label for="exampleFormControlTextarea1">Part 1: Elaborate the training organization and its major operations</label>
    <textarea class="form-control" name="q1"id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Part 2: Elaborate your major responsibilities during training period. </label>
    <textarea class="form-control" name = "q2" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Part 3: Elaborate the technologies and tools that you worked with during training and what functions you performed with those technologies</label>
    <textarea class="form-control" name = "q3" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Part 4: List your major achievements and challenges during training period</label>
    <textarea class="form-control" name = "q4" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Part 05: Elaborate how this training will help in your education and professional growth</label>
    <textarea class="form-control" name="q5" id="exampleFormControlTextarea1" rows="3"></textarea>
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