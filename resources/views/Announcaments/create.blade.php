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
}

button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
    </style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<div>
<form action="{{ route('Announcaments.store') }}" class="container" method="POST" >
@csrf 

<h1>  Create Announcment </h1>


    <label for="email"><b>Company Name</b></label>
    <input type="text" placeholder="Companys Name" name="Campany_Name" required>

    <label for="psw"><b> Job title</b></label>
    <input type="text" placeholder="Engineer...,etc" name="Job_tit" required>


    <label for="psw"><b> City</b></label>
    <input type="text" placeholder="City" name="City" required>

    <label for="psw"><b> Start duration </b></label>
    <input type="date" placeholder="1/1/2020" name="Start_duration" required>

    <label for="psw"><b> End duration</b></label>
    <input type="date" placeholder="20/2/2020" name="End_duration" required> 

    <label for="psw"><b> Job description</b></label>
    <textarea rows="10" cols="50" placeholder="short description "> </textarea> 

    <button class="button" type="submit" class="btn"> publish </button>

</form>
</div>

</body> 
</html> 