<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

  <Style>
  .logo {
  background-color: #193870
}
.sidebar-wrapper{
  background-color: #193870
}
.myDIV {
  data-color: #6495ED; /* Blue text color */
}

  </Style>

</head>

<body class="">
  <div class="wrapper">
  
    <div class="sidebar" >
    
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    @if (Auth::user()->user_type == 's')
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Student Profile 
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li>
        <a href="/CV/create">
              <i class="now-ui-icons users_single-02"></i>
              <p>Student CV</p>
            </a>
          </li>
          </li>
        <li>
          <a href="http://localhost:8000/Announcaments">
              <i class="now-ui-icons education_atom "></i>
              <p>Annoucaments </p>
            </a>
          </li>
          <li>
            <a href="http://localhost:8000/record">
              <i class="now-ui-icons location_map-big"></i>
              <p>My Requests</p>
            </a>
          </li>

          <li>
            <a href="./tables.html">
              <i class="now-ui-icons location_map-big"></i>
              <p>grade</p>
            </a>
          </li>
         
          
          <li>
            <a href="/finalreports/create">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Final Report</p>
            </a>
          </li>

          <li>
            <a href="TrainingRegistrations/create">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>registeration Form</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
          </li>
        </ul>
      </div>
    </div>

                  
                  @endif

                  @if (Auth::user()->user_type == 'c')
                  <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          
        </a>
        <a href="" class="simple-text logo-normal">
          Company Profile

        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li>
        <a href="http://localhost:8000/company/create">
              <i class="now-ui-icons users_single-02" ></i>
              <p>My Profile</p>
            </a>
          </li>
          </li>
        <li>
          <a href="http://localhost:8000/Announcaments/create">
              <i class="now-ui-icons education_atom "></i>
              <p>Create Announcament</p>
            </a>
          </li>
          <li>
            <a href="http://localhost:8000/Announcaments/show">
              <i class="now-ui-icons location_map-big"></i>
              <p>Requests</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
        <!--  <li>
            <a href="./user.html">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>-->
          <li>
            <a href="http://localhost:8000/medEvalutions/create">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>MED Evaloution</p>
            </a>
          </li>
          <li>
            <a href="http://localhost:8000/finalreports/create">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Final Evaloution</p>
            </a>
          </li>
         <!-- <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>-->
          </li>
        </ul>
      </div>
    </div>
                  @endif

                  @if (Auth::user()->user_type == 'u')
                  <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          SEU
        </a>
        </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li>
        <a href="./user.html">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          </li>
          <li>
            <a href="./tables.html">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications </p>
            </a>
          </li>
        <li>
          <a href="./icons.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Final reports</p>
            </a>
          </li>

        

          <li>
<<<<<<< HEAD

            <a href="./map.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Midterm reports</p>

            <a href="/finalEvalutions/index">
              <i class="now-ui-icons location_map-big"></i>
              <p>Reports</p>

=======
            <a href="/finalreports/index">
              <i class="now-ui-icons location_map-big"></i>
              
              <p>Final reports </p>
>>>>>>> c22a5658935b47e1528ae0cf5a2bcba14f70b76f
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p> Student final reports </p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p> Registration forms </p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="fas fa-graduation-cap"></i>
              <p>Students grades</p>
            </a>
          </li>
         
          </li>
        </ul>
      </div>
    </div>
                  @endif
    

      <!-- Navbar -->
  
      <!-- End Navbar -->

       
      </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Global Sales</h5>
                <h4 class="card-title">Shipped Products</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChartExample"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">2018 Sales</h5>
                <h4 class="card-title">All products</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Email Statistics</h5>
                <h4 class="card-title">24 Hours Performance</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="barChartSimpleGradientsNumbers"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
                </div>
              </div>
            </div>
          </div>
        </div>
       
      
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>
@endsection