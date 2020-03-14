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
.btn-primary{
  background-color: #f26427
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
                <p><small>Evaluation Criteria</small></p>
            </div>
        </div>
    </div>
 
    
   
   
        <div class="panel panel-primary setup-content " id="step-1">
            <div class="panel-heading">
                
            </div>
            <form action ="{{route('finalEvalutions.store')}}" method="POST">
  @csrf 
      
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label"> Name</label>
                    <input maxlength="100"  name="TraineeName" type="text" required="required" class="form-control"  />
                </div>
                <div class="form-group">
                    <label class="control-label">ID</label>
                    <input maxlength="100" name ="TraineeID" type="text" required="required" class="form-control"  />
                </div>

                <div class="form-group">
                    <label class="control-label">Department</label>
                    <input maxlength="100" name="TraineeDepartment" type="text" required="required" class="form-control" />
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
                    <input maxlength="200" name="SupervisorDepartment" type="text" required="required" class="form-control" />
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
                    <label class="control-label"> date</label>
                    <input maxlength="100"   required="required" class="form-control"  type="date" placeholder="1\1\2020 " name="SignatureDate" required> </input>
                </div>


                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-4">
            <div class="panel-heading">
            <h3 class="panel-title">Job Performance</h3>    
            </div>
            <div class="panel-body">
            <div class="form-group">
            <label class="control-label">Attendance & Punctuality</label>
    <input type="text" class="form-control" name="Score1" id="inputAddress" placeholder="out of 5">
  </div>
  <div class="form-group">
  <label class="control-label">Meeting work plan requirment</label>
    <input type="text" class="form-control" name ="Score2"id="inputAddress" placeholder="out of 5">
  </div>
  <div class="form-group">
  <label class="control-label">Ability & Enthusiasm to learn </label>
    <input type="text" class="form-control"  name="Score3 "id="inputAddress" placeholder="out of 5">
  </div>
  <div class="form-group">
  <label class="control-label">Ability to apply knowledge</label>
    <input type="text" class="form-control"  name="Score4" id="inputAddress" placeholder="out of 5">
  </div>
  <div class="form-group">
  <label class="control-label">Quality of work produced (productivity)</label>
    <input type="text" class="form-control"  name="Score5" id="inputAddress" placeholder="out of 5">
  </div>
  <div class="form-group">
  <label class="control-label">Ability to follow instruction</label>
    <input type="text" class="form-control"  name="Score6" id="inputAddress" placeholder="out of 5">
  </div>
  <div class="form-group">
  <label class="control-label">Quality of report generation(if applicable)</label>
    <input type="text" class="form-control"  name="Score7" id="inputAddress" placeholder="out of 5">
  </div>
  <div class="form-group">
  <label class="control-label">Overall organizaion</label>
    <input type="text" class="form-control"  name="Score8" id="inputAddress" placeholder="out of 5">
  </div>

  <div class="panel-heading">
            <h3 class="panel-title">Personal Charactries</h3>    
            </div>

            <div class="form-group">
            <label class="control-label">Conduct and discipline</label>
    <input type="text" class="form-control" name="Score9" id="inputAddress" placeholder="out of 5">
  </div>
  <div class="form-group">
  <label class="control-label">Responsibility</label>
    <input type="text" class="form-control" name ="Score10"id="inputAddress" placeholder="out of 5">
  </div>
  <div class="form-group">
  <label class="control-label">Self confidence & independence</label>
    <input type="text" class="form-control"  name="Score11 "id="inputAddress" placeholder="out of 5">
  </div>
  <div class="form-group">
  <label class="control-label">Problem solving skills</label>
    <input type="text" class="form-control"  name="Score12" id="inputAddress" placeholder="out of 5">
  </div>
  <div class="form-group">
  <label class="control-label">Creativity</label>
    <input type="text" class="form-control"  name="Score13" id="inputAddress" placeholder="out of 5">
  </div>
  <div class="form-group">
  <label class="control-label">General appearance</label>
    <input type="text" class="form-control"  name="Score14" id="inputAddress" placeholder="out of 5">
  </div>
  <div class="form-group">
  <label class="control-label">Cooperation with colleagues</label>
    <input type="text" class="form-control"  name="Score15" id="inputAddress" placeholder="out of 5">
  </div>
  <div class="form-group">
  <label class="control-label">Communication Skills</label>
    <input type="text" class="form-control"  name="Score16" id="inputAddress" placeholder="out of 5">
  </div>
  
  </div>
    
 
  
  <button class ="btn btn-primary pull-right"  type="submit">Submit!</button>
   
            </div>
            <
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