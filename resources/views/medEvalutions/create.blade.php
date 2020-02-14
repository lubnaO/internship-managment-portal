<html>
<head>

<link rel="stylesheet" href="css/style.css">

<style>
   input, textarea{
 
   width: 100%;
   padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
 

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-top: 100px;
  margin-left: 100px;
  margin-bottom: 100px;
margin-right: 100px; }


  .button[type=Submit] {
  width: 100%;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  transition-duration: 0.4s;
  background: #7a5e86;
  background: -moz-linear-gradient(left, #7a5e86 0%, #a75e67 51%, #f77b2e 100%);
  background: -webkit-gradient(left top, right top, color-stop(0%, #7a5e86), color-stop(51%, #a75e67), color-stop(100%, #f77b2e));
  background: -webkit-linear-gradient(left, #7a5e86 0%, #a75e67 51%, #f77b2e 100%);
  background: -o-linear-gradient(left, #7a5e86 0%, #a75e67 51%, #f77b2e 100%);
  background: -ms-linear-gradient(left, #7a5e86 0%, #a75e67 51%, #f77b2e 100%);
  background: -webkit-gradient(linear, left top, right top, from(#7a5e86), color-stop(51%, #a75e67), to(#f77b2e));
  background: linear-gradient(to right, #7a5e86 0%, #a75e67 51%, #f77b2e 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7a5e86', endColorstr='#f77b2e', GradientType=1 ); }

}

button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

body{

  background-image: url("/images/hero_3.jpg");

}


    </style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<div>
<form action="{{ route('medEvalutions.store') }}" class="container" method="POST" >
@csrf 


<h2> MIDTERM EVALUATION REPORT</h2>


    <label ><b>Student Name</b></label>
    <input type="text" placeholder="Companys Name" name="StudentName" required>

   <label for="psw"><b> Student ID</b></label>
    <input type="text" placeholder="16000000" name="StudentID" required>
    <label for="psw"><b> Training Supervisor</b></label>
    <input type="text" placeholder="Training Supervisor" name="TrainingSupervisor" required>


    <label for="psw"><b> Training Organization</b></label>
    <input type="text" placeholder="Training Organization" name="TrainingOrganization" required> 

    <label for="psw"><b> Department Name </b></label>
    <input type="date" placeholder="Department Name" name="DepartmentName" required>


    <label for="psw"><b>#Training Details</b></label>
    <label for="psw"><b> Start date</b></label>
    <input rows="10" cols="50"  type="date" placeholder="1\1\2020 " name="Startdate" required> </input>
    <label for="psw"><b> End date</b></label>
    <input rows="10" cols="50"   type="date" placeholder="1\1\2020 " name="Enddate" required> </input>
    <label for="psw"><b> Accomplished Tasks</b></label>
    <textarea rows="10" cols="50" placeholder="Accomplished Tasks " name="AccomplishedTasks" required> </textarea> 
    <label for="psw"><b> Skills Acquired</b></label>
    <textarea rows="10" cols="50" placeholder="Skills Acquired" name="SkillsAcquired" required> </textarea> 
    <label for="psw"><b> Knowledge Used</b></label>
    <textarea rows="10" cols="50" placeholder="Knowledge Used " name="KnowledgeUsed" required> </textarea> 
    <label for="psw"><b> Key Meetings</b></label>
    <textarea rows="10" cols="50" placeholder="Key Meetings" name="KeyMeetings" required> </textarea> 
    <label for="psw"><b> Issues with Trainee</b></label>
    <textarea rows="10" cols="50" placeholder="Issues with Trainee" name="Issues" required> </textarea> 
    <label for="psw"><b> Supervisor Feedback</b></label>
    <textarea rows="10" cols="50" placeholder="Supervisor Feedback" name="Feedback" required> </textarea> 
     
    <div>
    <button class="button" type="submit" class="btn"> publish </button>
    </div> 
</form>
</div>

</body> 
</html> 