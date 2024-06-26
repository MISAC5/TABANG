<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']) == 0) {
  header('location:logout.php');
} else
  {
   if(isset($_POST['add']))
  {
    $stuname=$_POST['stuname'];
    $stuemail=$_POST['stuemail'];
    $stucourse=$_POST['stucourse'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $stuid=$_POST['stuid'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $connum=$_POST['connum'];
    $altconnum=$_POST['altconnum'];
    $stuaddress=$_POST['stuaddress'];
    $uname=$_POST['uname'];
    $stupassword=$_POST['stupassword'];
    $query-> execute();
    if($query -> rowCount() == 0)
    {
    $sql="INSERT into tblstudent(StudentName,StudentEmail,StudentClass,Gender,DOB,StuID,FatherName,MotherName,ContactNumber,AltenateNumber,Address,UserName,Password,Image,Course)values(:stuname,:stuemail,:stuclass,:gender,:dob,:stuid,:fname,:mname,:connum,:altconnum,:stuaddress,:uname,:stupassword,:stucourse)";
    $query=$dbh->prepare($sql);
    $LastInsertId=$dbh->lastInsertId();
    $query->bindParam(':stuname',$stuname,PDO::PARAM_STR);
    $query->bindParam(':stuemail',$stuemail,PDO::PARAM_STR);
    $query->bindParam(':stucourse',$stucourse,PDO::PARAM_STR);
    $query->bindParam(':gender',$gender,PDO::PARAM_STR);
    $query->bindParam(':dob',$dob,PDO::PARAM_STR);
    $query->bindParam(':stuid',$stuid,PDO::PARAM_STR);
    $query->bindParam(':fname',$fname,PDO::PARAM_STR);
    $query->bindParam(':mname',$mname,PDO::PARAM_STR);
    $query->bindParam(':connum',$connum,PDO::PARAM_STR);
    $query->bindParam(':altconnum',$altconnum,PDO::PARAM_STR);
    $query->bindParam(':stuaddress',$stuaddress,PDO::PARAM_STR);
    $query->bindParam(':uname',$uname,PDO::PARAM_STR);
    $query->bindParam(':stupassword',$stupassword,PDO::PARAM_STR);
    $query->execute();
      if ($LastInsertId>0) {
        echo "Bitch"; //'<script>alert("Student has been added.")</script>';
        //echo "<script>window.location.href ='add-students.php'</script>";
      }
      else
        {
            echo '<script>alert("Something Went Wrong. Please try again")</script>';
        }
    }

    else
    {

    echo "<script>alert('Username or Student Id  already exist. Please try again');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Student  Management System|| Add Students</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css" />
    
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
              <h3 class="page-title"> Add Students </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Add Students</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Add Students</h4>
                   
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Student Name</label>
                        <input type="text" name="stuname" value="" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Student Email</label>
                        <input type="text" name="stuemail" value="" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Student Course</label>
                        <select  name="stucourse" class="form-control" required='true'>
                          <option value="">Select Course</option>
                         <?php 

$sql2 = "SELECT * from    tblcourses ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row1)
{          
    ?>  
<option value="<?php echo htmlentities($row1->ID);?>"><?php echo htmlentities($row1->CourseCode);?> 
</option>
 <?php } ?> 
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Gender</label>
                        <select name="gender" value="" class="form-control" required='true'>
                          <option value="">Choose Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Date of Birth</label>
                        <input type="date" name="dob" value="" class="form-control" required='true'>
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputName1">Student ID</label>
                        <input type="text" name="stuid" value="" class="form-control" required='true'>
                      </div>
                      <h3>Parents/Guardian's details</h3>
                      <div class="form-group">
                        <label for="exampleInputName1">Father's Name</label>
                        <input type="text" name="fname" value="" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Mother's Name</label>
                        <input type="text" name="mname" value="" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Contact Number</label>
                        <input type="text" name="connum" value="" class="form-control" required='true' maxlength="10" pattern="[0-9]+">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Alternate Contact Number</label>
                        <input type="text" name="altconnum" value="" class="form-control" required='true' maxlength="10" pattern="[0-9]+">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                        <textarea name="stuaddress" class="form-control" required='true'></textarea>
                      </div>
<h3>Login details</h3>
<div class="form-group">
                        <label for="exampleInputName1">User Name</label>
                        <input type="text" name="uname" value="" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Password</label>
                        <input type="Password" name="stupassword" value="" class="form-control" required='true'>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2" name="add">Add</button>
                     
                    </form>
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
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html><?php }  ?>