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

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <!--<img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">-->
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
        <a class="nav-link" href="index.php">
          <i class="bi bi-grid"></i>
          <span>DASHBOARD</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
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
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Repost</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="Done.php">
              <i class="bi bi-circle"></i><span>Done</span>
            </a>
          </li>
          <li>
            <a href="pending.php">
              <i class="bi bi-circle"></i><span>pending</span>
            </a>
          </li>
          <li>
            <a href="Failed.php">
              <i class="bi bi-circle"></i><span>Failed</span>
            </a>
          </li>  
         
          
        </ul>
      </li><!-- End Components Nav -->

     
      </li><!-- End Forms Nav -->

     

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>DASHBOARD</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <!--<div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

              

                <div class="card-body">
                  <h5 class="card-title">TOTAL VENDOR<span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      

                    </div>
                  </div>
                </div>

              </div>
            </div>--><!-- End Sales Card -->

            <!-- Revenue Card -->
            <!--<div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                

                <div class="card-body">
                  <h5 class="card-title">TOTAL REVENUE<span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>3,264</h6>
                      

                    </div>
                  </div>
                </div>

                  </div>


            </div>--><!-- End Revenue Card -->


            <!-- Customers Card -->
            <!--<div class="col-xxl-4 col-xl-4">
              <div class="card info-card customers-card">
                
                <div class="card-body">
                  <h5 class="card-title">Customers <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>--><!-- End Customers Card -->

              <!--<div class="col-xxl-4 col-xl-4">
              <div class="card info-card customers-card">
                

                <div class="card-body">
                  <h5 class="card-title">Customers <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>--><!-- End Customers Card -->

             <!--<div class="col-xxl-4 col-xl-4">
              <div class="card info-card customers-card">
               
                <div class="card-body">
                  <h5 class="card-title">Customers <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>--><!-- End Customers Card -->

              <!--<div class="col-xxl-4 col-xl-4">
              <div class="card info-card customers-card">
                

                <div class="card-body">
                  <h5 class="card-title">Customers <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>--><!-- End Customers Card -->
           

               
                </div>

              </div>
            </div><!-- End Reports -->

            
            </div><!-- End Recent Sales -->

           
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          
                </div><!-- End activity item-->

                
                </div><!-- End activity item-->

                
                </div><!-- End activity item-->

                
                </div><!-- End activity item-->

                
                </div><!-- End activity item-->

                
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

          
          </div><!-- End Budget Report -->

         
                 
              </script>

            </div>
          </div><!-- End Website Traffic -->

          
           

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  
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