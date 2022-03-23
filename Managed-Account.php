<?php
$insert = false;
$update = false;
$delete = false;

$servername = "localhost";
$username = "root";
$password = "";
$database = "dhruvin_pennydrop";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysli_connect_error());
}

session_start();
$conn =  mysqli_connect('localhost', 'root','', 'dhruvin_pennydrop');

if(!isset($_SESSION['username'])){
  echo "<script>window.open('login.php','_self');</script>";
}

if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `company_account` WHERE `id` = $id";
  $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset( $_POST['idEdit'])){
  // Update the record
    $id = $_POST["idEdit"];
    $Company_name = $_POST["Company_nameEdit"];
    $Account_no = $_POST["Account_noEdit"];
    $IFSC_CODE = $_POST["IFSC_CODEEdit"];
    $Branch_Name = $_POST["Branch_NameEdit"];
    $Amount = $_POST["AmountEdit"];
    

  // Sql query to be executed
  $sql = "UPDATE `company_account` SET `Company_name` = '$Company_name' ,`Account_no` = '$Account_no' , `IFSC_CODE` = '$IFSC_CODE', `Branch_Name` = '$Branch_Name',`Amount` = '$Amount'   WHERE `company_account`.`id` = $id";
  $result = mysqli_query($conn, $sql);
  if($result){
    $update = true;
}
else{
    echo "We could not update the record successfully";
}
}
else{
    $Company_name = $_POST["Company_name"];
    $Account_no = $_POST["Account_no"];
    $IFSC_CODE = $_POST["IFSC_CODE"];
    $Branch_Name = $_POST["Branch_Name"];
    $Amount = $_POST["Amount"];
  // Sql query to be executed
  $sql = "INSERT INTO `company_account` (`Company_name`,`Account_no`, `IFSC_CODE`, `Branch_Name`,`Amount`) VALUES ('$Company_name','$Account_no', '$IFSC_CODE', '$Branch_Name','$Amount')";
  $result = mysqli_query($conn, $sql);

   
  if($result){ 
    
      $insert = true;
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  } 
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <style>
    td{
      font-weight: normal;
    }
  </style>

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
   
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel"><B>EDIT DETAIL<B></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="/penny_drop/Managed-Account.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="idEdit" id="idEdit">
            <div class="form-group">
              <label for="name"><b>Company name<b></label>
              <input type="text" class="form-control" id="Company_nameEdit" name="Company_nameEdit" aria-describedby="emailHelp"  autocomplete="off">
            </div>
            <br>
            <div class="form-group">
              <label for="Account_no"><b>Account no<b></label>
              <input type="text" class="form-control" id="Account_noEdit" name="Account_noEdit" aria-describedby="emailHelp"  autocomplete="off">
            </div>
            <br> 
            <div class="form-group">
              <label for="IFSC_CODE"><b>IFSC CODE<b></label>
              <input type="text" class="form-control" id="IFSC_CODEEdit" name="IFSC_CODEEdit" aria-describedby="emailHelp"  autocomplete="off">
            </div>
            <br> 
            <div class="form-group">
              <label for="Branch_Name"><b>Branch Name<b></label>
              <input type="text" class="form-control" id="Branch_NameEdit" name="Branch_NameEdit" aria-describedby="emailHelp"  autocomplete="off">
            </div>
            <br>
            <div class="form-group">
              <label for="Amount"><b>Amount<b></label>
              <input type="text" class="form-control" id="AmountEdit" name="AmountEdit" aria-describedby="emailHelp"  autocomplete="off">
              </div> 
             </div>
              
          
          <!--<div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>-->
                  <div class="modal-footer">
                     <button type="submit" class="btn btn-primary">Save-changes</button> 
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> 
                    </div>

        </form>
      </div>
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="account_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><B>REGISTRATION FORM<B></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">




        <form class="forms-sample" action="/penny_drop/Managed-Account.php" method="post" onsubmit="return validate()">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Company name</label>
                      <input type="text" class="form-control" id="Company_name" name="Company_name" placeholder=" Enter your name" required  autocomplete="off"> 
                    </div>       
                    <br>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Account no</label>
                      <input type="password" class="form-control" id="Account_no" name="Account_no" placeholder="Enter your Account no"  autocomplete="off"required>
                    </div>
                    <br>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Retype Account no</label>
                      <input type="text" class="form-control" id="reaccount_no" name="reaccount_no" placeholder="Retype your Account no" 
                      onkeyup="check(this)"  autocomplete="off" required>
                      <error id="alert" style="    color: #f00;"></error>
                    </div>
                   <br>
                    <div class="form-group">
                      <label for="exampleInputEmail1">IFSC CODE</label>
                      <input type="text" class="form-control" id="IFSC_CODE" name="IFSC_CODE" placeholder="Enter your IFSC Code" required  autocomplete="off">
                    </div>
                    <br>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Branch name</label>
                      <input type="text" class="form-control" id="Branch_Name" name="Branch_Name" placeholder="Enter your Branch name" required  autocomplete="off">
                    </div>
                    <br>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Amount</label>
                      <input type="text" class="form-control" id="Amount" name="Amount" placeholder="Enter your Amount" required  autocomplete="off">
                    </div>

                    <br>
                    <!--<button type="submit" class="btn btn-primary me-2" >Submit</button>
                    <button type="button" class="btn btn-primary me-2" data-bs-dismiss="modal">Close</button>-->

                    <div class="modal-footer">
                     <button type="submit" onclick="myFunction()" class="btn btn-primary">Submit</button> 
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> 
                    </div>
                  </form>


                  <script>
                  function myFunction() {
                  alert("ARE YOU SURE YOU WANT TO SUBMIT THE FORM!");
                  }
                  </script>

                 

                  <script type="text/javascript">
                  var Account_no=document.getElementById('Account_no');
                  var flag = 1;
                  function check(elem){
                  if(elem.value.length >0){
                  if(elem.value != Account_no.value){
                  document.getElementById('alert').innerText = "Account no does not match";
                  flag=0;
                  }else{
                    document.getElementById('alert').innerText ="";
                    flag=1;
                  }
                  }else{
                    document.getElementById('alert').innerText ="Please enter confirm Account no";
                    flag=0;
                  }
                  }

                  function validate(){
                    if(flag==1){
                      return true;
                    }else{
                      return false;
                    }

                  }
                 </script>


        
        </div>
        

    </div>
  </div>
</div>

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
                <span  onclick="location.href='logout.php';">LOGOUT</span>
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
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link" href="Managed-Account.php">
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
            <a href="Pending.php">
              <i class="bi bi-circle"></i><span>Pending</span>
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
      <h1>Customer Table</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</a></li>
          <li class="breadcrumb-item">Tables</li>    
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Company Account</h5>

                <div class="row" >
                      <div class="col-md-14">
                  <button  class="btn-success float-end" data-bs-toggle="modal" data-bs-target="#account_modal">Add</button>
                    </div>

<?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SRNO</th>
                    <th scope="col">Company name</th>
                    <th scope="col">Account no</th>
                    <th scope="col">IFSC CODE</th>
                    <th scope="col">Branch Name</th>
                     <th scope="col">Amount</th>
                    <th scope="col">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    $sql = "SELECT * FROM `company_account`";
                    $result = mysqli_query($conn, $sql);
                    $id = 0;
                    while($row = mysqli_fetch_assoc($result)){
                      $id = $id + 1;
                      echo "<tr>
                      <th scope='row'>". $id . "</th>
                      <td>". $row['Company_name'] . "</td>
                      <td>". $row['Account_no'] . "</td>
                      
                      <td>". $row['IFSC_CODE'] . "</td>
                      <td>". $row['Branch_Name'] . "</td>
                      <td>". $row['Amount'] . "</td>
                      <td> <button class='edit btn btn-primary' id=".$row['id'].">Edit</button> <button class='delete btn btn-danger' id=d".$row['id'].">Delete</button>  </td>
                    </tr>";
                  } 
                    ?>
                  
                  
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

                   
         
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
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        Company_name = tr.getElementsByTagName("td")[0].innerText;
        Account_no = tr.getElementsByTagName("td")[1].innerText;
        IFSC_CODE = tr.getElementsByTagName("td")[2].innerText;
        Branch_Name = tr.getElementsByTagName("td")[3].innerText;
        Amount = tr.getElementsByTagName("td")[3].innerText;
        
        console.log(Company_name, Account_no, IFSC_CODE, Branch_Name,Amount);
        Company_nameEdit.value = Company_name;
        Account_noEdit.value = Account_no;
        IFSC_CODEEdit.value = IFSC_CODE;
        Branch_NameEdit.value = Branch_Name;
        AmountEdit.value = Amount;
        idEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        id = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `/penny_drop/Managed-Account.php?delete=${id}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>

</body>

</html>