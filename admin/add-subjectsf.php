<?php
session_start();
error_reporting(0);
$date = date('F-d-Y');
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']==0)) {
  header('location:logout.php');
  } else{
   if(isset($_POST['submit1']))
  {
    $cyear=$_POST['cyear'];
    $course=$_POST['course'];
    $semester=$_POST['semester'];
    $subject1c=$_POST['subject1c'];
    $subject1d=$_POST['subject1d'];
    $subject1s=$_POST['subject1s'];
    $subject1t=$_POST['subject1t'];
    $subject1u=$_POST['subject1u'];
    
$sql1="INSERT into tblsubjects(CollegiateYear,Semester,CourseCode,SubjectCode,SubjectDescription,Schedule,Time,Units)
VALUES(:cyear,:semester,:course,:subject1c,:subject1d,:subject1s,:subject1t,:subject1u)";
$query1=$dbh->prepare($sql1);
$query1->bindParam(':cyear',$cyear,PDO::PARAM_STR);
$query1->bindParam(':course',$course,PDO::PARAM_STR);
$query1->bindParam(':semester',$semester,PDO::PARAM_STR);
$query1->bindParam(':subject1c',$subject1c,PDO::PARAM_STR);
$query1->bindParam(':subject1d',$subject1d,PDO::PARAM_STR);
$query1->bindParam(':subject1s',$subject1s,PDO::PARAM_STR);
$query1->bindParam(':subject1t',$subject1t,PDO::PARAM_STR);
$query1->bindParam(':subject1u',$subject1u,PDO::PARAM_STR);

 $query1->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Subject has been added.")</script>';
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
  ?>

<?php
session_start();
error_reporting(0);
$date = date('F-d-Y');
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']==0)) {
  header('location:logout.php');
  } else{
   if(isset($_POST['submit2']))
  {
    $cyear=$_POST['cyear'];
    $course=$_POST['course'];
    $semester=$_POST['semester'];
    $subject2c=$_POST['subject2c'];
    $subject2d=$_POST['subject2d'];
    $subject2s=$_POST['subject2s'];
    $subject2t=$_POST['subject2t'];
    $subject2u=$_POST['subject2u'];
    
$sql2="INSERT into tblsubjects(CollegiateYear,Semester,CourseCode,SubjectCode,SubjectDescription,Schedule,Time,Units)
VALUES(:cyear,:semester,:course,:subject2c,:subject2d,:subject2s,:subject2t,:subject2u)";
$query2=$dbh->prepare($sql2);
$query2->bindParam(':cyear',$cyear,PDO::PARAM_STR);
$query2->bindParam(':course',$course,PDO::PARAM_STR);
$query2->bindParam(':semester',$semester,PDO::PARAM_STR);
$query2->bindParam(':subject2c',$subject2c,PDO::PARAM_STR);
$query2->bindParam(':subject2d',$subject2d,PDO::PARAM_STR);
$query2->bindParam(':subject2s',$subject2s,PDO::PARAM_STR);
$query2->bindParam(':subject2t',$subject2t,PDO::PARAM_STR);
$query2->bindParam(':subject2u',$subject2u,PDO::PARAM_STR);

 $query2->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Subject has been added.")</script>';
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
  ?>

<?php
session_start();
error_reporting(0);
$date = date('F-d-Y');
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']==0)) {
  header('location:logout.php');
  } else{
   if(isset($_POST['submit3']))
  {

    $cyear=$_POST['cyear'];
    $course=$_POST['course'];
    $semester=$_POST['semester'];
    $subject3c=$_POST['subject3c'];
    $subject3d=$_POST['subject3d'];
    $subject3s=$_POST['subject3s'];
    $subject3t=$_POST['subject3t'];
    $subject3u=$_POST['subject3u'];
    
$sql3="INSERT into tblsubjects(CollegiateYear,Semester,CourseCode,SubjectCode,SubjectDescription,Schedule,Time,Units)
VALUES(:cyear,:semester,:course,:subject3c,:subject3d,:subject3s,:subject3t,:subject3u)";
$query3=$dbh->prepare($sql3);
$query3->bindParam(':cyear',$cyear,PDO::PARAM_STR);
$query3->bindParam(':course',$course,PDO::PARAM_STR);
$query3->bindParam(':semester',$semester,PDO::PARAM_STR);
$query3->bindParam(':subject3c',$subject3c,PDO::PARAM_STR);
$query3->bindParam(':subject3d',$subject3d,PDO::PARAM_STR);
$query3->bindParam(':subject3s',$subject3s,PDO::PARAM_STR);
$query3->bindParam(':subject3t',$subject3t,PDO::PARAM_STR);
$query3->bindParam(':subject3u',$subject3u,PDO::PARAM_STR);


 $query3->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Subject has been added.")</script>';
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
  ?>

<?php
session_start();
error_reporting(0);
$date = date('F-d-Y');
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']==0)) {
  header('location:logout.php');
  } else{
   if(isset($_POST['submit4']))
  {
    $cyear=$_POST['cyear'];
    $course=$_POST['course'];
    $semester=$_POST['semester'];
    $subject4c=$_POST['subject4c'];
    $subject4d=$_POST['subject4d'];
    $subject4s=$_POST['subject4s'];
    $subject4t=$_POST['subject4t'];
    $subject4u=$_POST['subject4u'];
    
$sql4="INSERT into tblsubjects(CollegiateYear,Semester,CourseCode,SubjectCode,SubjectDescription,Schedule,Time,Units)
VALUES(:cyear,:semester,:course,:subject4c,:subject4d,:subject4s,:subject4t,:subject4u)";
$query4=$dbh->prepare($sql4);
$query4->bindParam(':cyear',$cyear,PDO::PARAM_STR);
$query4->bindParam(':course',$course,PDO::PARAM_STR);
$query4->bindParam(':semester',$semester,PDO::PARAM_STR);
$query4->bindParam(':subject4c',$subject4c,PDO::PARAM_STR);
$query4->bindParam(':subject4d',$subject4d,PDO::PARAM_STR);
$query4->bindParam(':subject4s',$subject4s,PDO::PARAM_STR);
$query4->bindParam(':subject4t',$subject4t,PDO::PARAM_STR);
$query4->bindParam(':subject4u',$subject4u,PDO::PARAM_STR);

 $query4->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Subject has been added.")</script>';
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
  ?>

<?php
session_start();
error_reporting(0);
$date = date('F-d-Y');
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']==0)) {
  header('location:logout.php');
  } else{
   if(isset($_POST['submit5']))
  {
    $cyear=$_POST['cyear'];
    $course=$_POST['course'];
    $semester=$_POST['semester'];
    $subject5c=$_POST['subject5c'];
    $subject5d=$_POST['subject5d'];
    $subject5s=$_POST['subject5s'];
    $subject5t=$_POST['subject5t'];
    $subject5u=$_POST['subject5u'];
    
$sql5="INSERT into tblsubjects(CollegiateYear,Semester,CourseCode,SubjectCode,SubjectDescription,Schedule,Time,Units)
VALUES(:cyear,:semester,:course,:subject5c,:subject5d,:subject5s,:subject5t,:subject5u)";
$query5=$dbh->prepare($sql5);
$query5->bindParam(':cyear',$cyear,PDO::PARAM_STR);
$query5->bindParam(':course',$course,PDO::PARAM_STR);
$query5->bindParam(':semester',$semester,PDO::PARAM_STR);
$query5->bindParam(':subject5c',$subject5c,PDO::PARAM_STR);
$query5->bindParam(':subject5d',$subject5d,PDO::PARAM_STR);
$query5->bindParam(':subject5s',$subject5s,PDO::PARAM_STR);
$query5->bindParam(':subject5t',$subject5t,PDO::PARAM_STR);
$query5->bindParam(':subject5u',$subject5u,PDO::PARAM_STR);

 $query5->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Subject has been added.")</script>';
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
  ?>
<!DOCTYPE html>
<html lang="en">

  <head>
   
    <title>Student  Management System|| Add Subjects</title>
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
              <h3 class="page-title"> Add Subjects </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Add Subjects</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Add Subjects</h4>

                    
                    <form class="forms-sample" method="post">
                  
                    <div class="form-group">
                        <label for="exampleInputEmail3">Course</label>
                        <select name="course" class="form-control" required='true'>
                          <option value="">Select Course</option>
                         <?php 

$sql0 = "SELECT * from    tblcourses ";
$query0 = $dbh -> prepare($sql0);
$query0->execute();
$result0=$query0->fetchAll(PDO::FETCH_OBJ);

foreach($result0 as $row0)
{          
    ?>  
<option value="<?php echo htmlentities($row0->CourseCode);?>"><?php echo htmlentities($row0->CourseCode);?></option>
 <?php } ?> 
                        </select>
                      </div>

                        <div style = "justify-content: space-evenly; display: flex;" class="college-details">
                          <h4><input type="text" name="cyear" value="" placeholder="Collegiate Year"></h4>
                          <h4><input type="text" name="semester" value="" placeholder="Semester"></h4>
                        </div>
                        <br>
                        <table>
                            <tr>
                                <th style="font-size:13px">Subject Code</th>
                                <th style="font-size:13px">Subject Description</th>
                                <th style="font-size:13px">Schedule</th>
                                <th style="font-size:13px">Time</th>
                                <th style="font-size:13px">Units</th>
                            </tr>
                            <tr>
                                <td><input type="text" name="subject1c"></td>
                                <td><input type="text" name="subject1d"></td>
                                <td><input type="text" name="subject1s"></td>
                                <td><input type="text" name="subject1t"></td>
                                <td><input type="text" name="subject1u"></td>
                                <td><button type="submit" name="submit1">Submit</button></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="subject2c"></td>
                                <td><input type="text" name="subject2d"></td>
                                <td><input type="text" name="subject2s"></td>
                                <td><input type="text" name="subject2t"></td>
                                <td><input type="text" name="subject2u"></td>
                                <td><button type="submit" name="submit2">Submit</button></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="subject3c"></td>
                                <td><input type="text" name="subject3d"></td>
                                <td><input type="text" name="subject3s"></td>
                                <td><input type="text" name="subject3t"></td>
                                <td><input type="text" name="subject3u"></td>
                                <td><button type="submit" name="submit3">Submit</button></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="subject4c"></td>
                                <td><input type="text" name="subject4d"></td>
                                <td><input type="text" name="subject4s"></td>
                                <td><input type="text" name="subject4t"></td>
                                <td><input type="text" name="subject4u"></td>
                                <td><button type="submit" name="submit4">Submit</button></td>
                            </tr>
                        </table>
                        
                        <br>
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
</html><?php }}}}}  ?>