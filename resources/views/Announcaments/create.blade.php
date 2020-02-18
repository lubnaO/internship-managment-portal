
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

<div >
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-1" type="button" class="btn-primary btn-circle">1</a>
                <p><small>Create Announcaments</small></p>
            </div>
           
           
           
        </div>
    </div>
    
   
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                
            </div>
            <form role="form" action="{{ route('Announcaments.store') }}" class="container" method="POST">
    @csrf
            <div class="panel-body">
        
                <div class="form-group">
                    <label class="control-label"> Company Name </label>
                    <input maxlength="100"  name="name" type="text" required="required" class="form-control"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Job title</label>
                    <input maxlength="100" name ="title" type="text" required="required" class="form-control"  />
                </div>

                <div class="form-group">
                    <label class="control-label">City</label>
                    <input maxlength="100" name="city" type="text" required="required" class="form-control" />
                </div>
                <input type="hidden" value="{{Auth::user()->company->id}}" name="Company_id"/>

                <div class="form-group">
                    <label class="control-label">Start durationn </label>
                    <input maxlength="100" name="A_start" type="date" required="required" class="form-control" />
                </div>

                <div class="form-group">
                    <label class="control-label">End duration</label>
                    <input maxlength="100" name="A_end" type="date" required="required" class="form-control" />
                </div>

                <div class="form-group">
                    <label class="control-label">Job description</label>
                    <textarea maxlength="100" name="description" type="text" required="required" class="form-control"></textarea>  
                </div>

            </div>
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