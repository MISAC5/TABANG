<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsstuid']==0)) {
  header('location:logout.php');
  } else{
   // Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql="delete from tblcourses where ID=:rid";
$query=$dbh->prepare($sql);
$query->bindParam(':rid',$rid,PDO::PARAM_STR);
$query->execute();
 echo "<script>alert('Data deleted');</script>"; 
  echo "<script>window.location.href = 'manage-course.php'</script>";     


}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Student  Management System | Statement of Account</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
   
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     <?php include_once('includes/header.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include_once('includes/sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
             <div class="page-header">
              <h3 class="page-title"> Statement of Account </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Statement Of Account</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <center><h4>Statement of Account</h4></center>

                  <table>
                    <tr>
                        <th>Course</th>
                        <th>File</th>
                    </tr>

                    <tr>
                        <td style = "margin-right: 10vw;">Bachelor of Science in Criminology</td>
                        <td> <a href="bscrimsoa.php">CRIM - SOA</a> </td>
                    </tr>

                    <tr>
                        <td style = "margin-right: 10px;">Bachelor of Science in Information Technology</td>
                        <td> <a href="bsitsoa.php">IT - SOA</a> </td>
                    </tr>

                    <tr>
                        <td style = "margin-right: 10px;">Bachelor of Science in Nursing</td>
                        <td> <a href="bsnsoa.php">NURSING - SOA</a> </td>
                    </tr>

                    <tr>
                        <td style = "margin-right: 10px;">Bachelor of Science in Electrical Engineering</td>
                        <td> <a href="bseesoa.php">EE - SOA</a> </td>
                    </tr>
                  </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include_once('includes/footer.php');?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html><?php }  ?>