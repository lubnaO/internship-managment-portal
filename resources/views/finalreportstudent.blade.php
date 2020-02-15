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
  <div class="card-header top-bar pl-3 text-white font-size-30 top-bar px-5 text-capitalize">final training report</div>
  <div class="card-body">


<form id="regForm" action="/action_page.php">
  <!-- One "tab" for each step in the form: -->
  <div class="tab mt-3">Trainee Information
  <div class="form-group">
    <input type="text" class="form-control" name="TrineeName" id="inputAddress" placeholder="Name">
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
    <input type="text" class="form-control" name="TraineePhone" id="inputAddress" placeholder="Phone">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="TraineeEmail" id="inputAddress" placeholder="E-mail">
  </div>
   
  </div>
  
  <div class="tab">Training Supervisor Information
  <div class="form-group">
    <input type="text" class="form-control" name="SupervisorName" id="inputAddress" placeholder="Name">
  </div>
 
  <div class="form-group">
    <input type="text" class="form-control"  name="SupervisorDepartment "id="inputAddress" placeholder="Department">
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
    <input type="text" class="form-control" name ="OrganizationD" id="inputAddress" placeholder="Head of training Dept. Name">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="OrganizationPhone"id="inputAddress" placeholder="Phone">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="OrganizationFax" id="inputAddress" placeholder="Fax">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="OrganizationEmail" id="inputAddress" placeholder="Email">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="OrganizationSignature" id="inputAddress" placeholder="Signatuer">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="data" id="inputAddress" placeholder="Date">
  </div>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button"  id="prevBtn" class="btn btn-primary font-size-15 top-bar px-5" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" class="btn btn-primary font-size-15 top-bar px-5" onclick="nextPrev(1)">Next</button>
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

<div class="container pt-5">
<div class="jumbotorn">
<div class="card">
  <div class="card-header top-bar pl-3 text-white font-size-30 top-bar px-5 text-capitalize">Fill Parts</div>
  <div class="card-body">

<form>
  <div class="form-group">
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
</form>

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
