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
<form action="{{ route('Announcaments.store') }}" class="container" method="POST" >
@csrf 

<h1>  Create Announcement </h1>


    <label ><b>Company Name</b></label>
    <input type="text" placeholder="Companys Name" name="name" required>

   <label for="psw"><b> Job title</b></label>
    <input type="text" placeholder="Engineer...,etc" name="title" required>


    <label for="psw"><b> City</b></label>
    <input type="text" placeholder="City" name="city" required> 

    <label for="psw"><b> Start duration </b></label>
    <input type="date" placeholder="1/1/2020" name="A_start" required>
    <input type="hidden" value="{{Auth::user()->company->id}}" name="Company_id"/>
    <label for="psw"><b> End duration</b></label>
    <input type="date" placeholder="20/2/2020" name="A_end" required> 

    <label for="psw"><b> Job description</b></label>
    <textarea rows="10" cols="50" placeholder="short description " name="description" required> </textarea> 
    <div>
    <button class="button" type="submit" class="btn"> publish </button>
    </div> 
</form>
</div>

</body> 
</html> 