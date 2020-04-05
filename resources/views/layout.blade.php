<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">

<Style>
.navbar{
  background-color: #193870
  
}
 .btn-primary{
  background-color: #f26427
}
.card-header{
  background-color:#193870
}

.background{
background-image: url('/images/impback2.jpg');
height: 950px;
/* Center and scale the image nicely */
background-position: center ;
background-repeat: no-repeat;
background-size: cover;
width:100%;

}
.logo{
  height:100%;
  margin-top:-3px;
  margin-right:5px;
}

</Style>

</head>
<body>
<div class="background ">
<div id="hero">
<div id ="hero-overlay"></div>
</div>
<nav class ="navbar navbar-expand-lg navbar-light">

<a href ="#" class ="navbar-brand text-white"> Internship Managment Portal</a>
<div class="collapse navbar-collapse">
<ul class ="navbar-nav ml-auto">
<li class="nav-item">
<a href="#" class="nav-link text-white"> Register</a>
 
</li>
</ul>
<img id="logo" src="'/images/impback1.jpg'" width="30" height="30" class="d-inline-block align-top " alt="">
</div>

</nav>
    
    @yield('content') 
      
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
 
</body>
</html> 