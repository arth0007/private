<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dhruvin_pennydrop";

session_start();
$conn =  mysqli_connect('localhost', 'root','', 'dhruvin_pennydrop');

if(!isset($_SESSION['username'])){
  echo "<script>window.open('login.php','_self');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welspun Global Service</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/FAVICON-WELSPUN.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/welspun-logo.png" alt="">
        <span class="d-none d-lg-block">WELSPUN</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

   
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

         


        </li><!-- End Notification Nav -->

      <li class="nav-item dropdown">

         
         
        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            
            <span class="d-none d-md-block dropdown-toggle ps-2">Hi Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <!--<li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>-->
            
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span onclick="location.href='logout.php';">LOGOUT</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>DASHBOARD</span>
        </a>
      </li><!-- End Dashboard Nav -->

       <li class="nav-item">
        <a class="nav-link collapsed" href="Saved-Account.php">
          <i class="bi bi-grid"></i>
          <span>Saved Account</span>
        </a>
      </li>

        <li class="nav-item">
        <a class="nav-link collapsed" href="Managed-Account.php">
          <i class="bi bi-grid"></i>
          <span>Managed Account</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Repost</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="Done.php">
              <i class="bi bi-circle"></i><span>Done</span>
            </a>
          </li>
          <li>
            <a href="Pending.php">
              <i class="bi bi-circle"></i><span>Pending</span>
            </a>
          </li>
          <li>
            <a href="Failed.php" class="active">
              <i class="bi bi-circle"></i><span>Failed</span>
            </a>
          </li>
                 
          
        </ul>
      </li><!-- End Components Nav -->
 

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>REPOST</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">DONE</li>
          <li class="breadcrumb-item">PENDING</li>
          <li class="breadcrumb-item active">FAILED</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">FAILED PAGE</h5>
              <div class="row" >
                     
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SRNO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Account no</th>
                    <th scope="col">IFSC CODE</th>
                    <th scope="col">BRANCH NAME</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>DHRUVIN</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                 
    
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>VASHU SIR</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                
    
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>YASH SIR</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                  


                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>AMOL BHAI</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                
    
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>VIJAY SIR</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                

                  </tr>

                  <tr>
                    <th scope="row">6</th>
                    <td>VIJAY SIR</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
               

                </tr>

                <tr>
                    <th scope="row">7</th>
                    <td>VIJAY SIR</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
               
                  </tr>


                </tbody>
              </table>
              
            </div>
          </div><!-- End Default Badges -->

         
        </div>

        
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>