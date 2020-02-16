@extends('layout')

@section('content')
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>


<div class="container pt-5">
<div class="jumbotorn">
<div class="card">
  <div class="card-header top-bar pl-3 text-white font-size-30 top-bar px-5 text-capitalize">final evaluation report</div>
  <div class="card-body">

<form id="regForm" action="/action_page.php">

  <!-- One "tab" for each step in the form: -->
  <div class="tab mt-3">Trainee Information
  <div class="form-group">
    <input type="text" class="form-control" name="TraineeName" id="inputAddress" placeholder="Name">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name ="TraineeID"id="inputAddress" placeholder="ID">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="TraineeDeprtment "id="inputAddress" placeholder="Department">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="Traineemajor" id="inputAddress" placeholder="Major">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="TraineePhone"id="inputAddress" placeholder="Phone">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="TraineeEmail" id="inputAddress" placeholder="E-mail">
  </div>

   
  </div>   <!--هنا وقفنا-->
  <div class="tab">Training Supervisor Information
  <div class="form-group">
    <input type="text" class="form-control" name="SupervisorName" id="inputAddress" placeholder="Name">
  </div>
 
  <div class="form-group">
    <input type="text" class="form-control"  name="SupervisorDepartment"id="inputAddress" placeholder="Department">
  </div>
  
  <div class="form-group">
    <input type="text" class="form-control" name="SupervisorPhone"id="inputAddress" placeholder="Phone">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="SupervisorEmail" id="inputAddress" placeholder="E-mail">
  </div>
 
 
  </div>
  <div class="tab">Trainnig Department Information
  <div class="form-group">
    <input type="text" class="form-control" name="OrganizationName" id="inputAddress" placeholder="Organization Name">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name ="OrganizationD"id="inputAddress" placeholder="Head of training Dept. Name">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="OrganizationPhone "id="inputAddress" placeholder="Phone">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="OrganizationFax" id="inputAddress" placeholder="Fax">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="OrganizationEmail" id="inputAddress" placeholder="Email">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="OrganiztionSignature" id="inputAddress" placeholder="signatuer">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="SignatureDate" id="inputAddress" placeholder="Date">
  </div>
  </div>
   
  <div class="tab">Evaluation Criteria:
  <h>job Performance</h>
  <div class="form-group">
    <input type="text" class="form-control" name="Score1" id="inputAddress" placeholder="Attendance & punctuality.................................................................................................................out of 5">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name ="Score2"id="inputAddress" placeholder="Meeting work plan requirments.................................................................................................................out of 5">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="Score3 "id="inputAddress" placeholder="Ability & enthusiasm to learn.................................................................................................................out of 5">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="Score4" id="inputAddress" placeholder="Ability to apply knowledge .................................................................................................................out of 5">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="Score5" id="inputAddress" placeholder="Quality of work produced(productivity).................................................................................................................out of 5">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="Score6" id="inputAddress" placeholder="Ability to follow instruction.................................................................................................................out of 5">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="Score7" id="inputAddress" placeholder="Quality of report generation(if applicable).................................................................................................................out of 5">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="Score8" id="inputAddress" placeholder="Overall organizaion .................................................................................................................out of 5">
  </div>
  <h>Personal Charactries:</h>
  <div class="form-group">
    <input type="text" class="form-control" name="Score9" id="inputAddress" placeholder="Conduct and discipline .................................................................................................................out of 5">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name ="Score10"id="inputAddress" placeholder="Responsibility.................................................................................................................out of 5">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="Score11 "id="inputAddress" placeholder="Self confidence & independence.................................................................................................................out of 5">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="Score12" id="inputAddress" placeholder="Problem solving skills.................................................................................................................out of 5">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="Score13" id="inputAddress" placeholder="Creativity.................................................................................................................out of 5">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="Score14" id="inputAddress" placeholder="General appearance.................................................................................................................out of 5">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="Score15" id="inputAddress" placeholder="Cooperation with colleagues.................................................................................................................out of 5">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="Score16" id="inputAddress" placeholder="Communication skills.................................................................................................................out of 5">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="Score17" id="inputAddress" placeholder="Total score">
  </div>
  </div>
    
 

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button"  class="btn btn-primary font-size-15 top-bar px-5" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button"  class="btn btn-primary font-size-15 top-bar px-5" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
</div>
</div>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>

@endsection