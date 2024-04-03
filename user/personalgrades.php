<?php
$is_printing = isset($_GET['print']);
$print_class = $is_printing ? 'hidden-print' : '';

session_start();
error_reporting(E_ALL);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsstuid']==0)) {
  header('location:logout.php');
  } else{
   
$sturecmsstuid = $_SESSION['sturecmsstuid'];
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statement of Account | BSIT</title>
    <link rel="stylesheet" href="css/tor.css?v=2">
</head>
<body>
    <div class="container">
        <div class="header-details">
            <div class="logo-img">
                <img src="images\auth\logo.PNG" alt="hccb logo">
            </div>
            <div class="headers">
                <h2>Holy Child Colleges of Butuan</h2>
                <h5>2nd. St., Guingona Subd., Butuan City</h5>
            </div>
        </div>

        <div class="body-main">
            <h4> Bachelor of Science in Information Technology </h4>
            <br>
                <div class="table-responsive border rounded p-1">
                      <table class="table">
                      <h5>FIRST YEAR, 1st Semester</h5>
                        <thead>
                          <tr>
                            <th class="font-weight-bold">Code</th>
                            <th class="font-weight-bold">Description</th>
                            <th class="font-weight-bold units">Units</th>
                            <th class="font-weight-bold units">Grades</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php

                            $user = $dbh->prepare('SELECT StudentName FROM tblstudent WHERE $sturecmsstuid = :sturecmsstuid');
                            $user->execute(['sturecmsstuid' => $sturecmsstuid]);
                            $result0 = $user->fetch();

                            $studentName = $result['StudentName'];

                            $ret1 = "SELECT CourseCode = 'BSIT'  FROM tblsubjects";
                            $query1 = $dbh -> prepare($ret1);
                            $query1->execute();
                            $results1=$query1->fetchAll(PDO::FETCH_OBJ);
                            $sql1="SELECT tblsubjects.SubjectCode, tblsubjects.SubjectDescription, tblsubjects.CollegiateYear, tblsubjects.Semester ,tblsubjects.Units 
                            from tblsubjects join tblstudent ($studentName) where Semester = '1st' AND CollegiateYear = 'FIRST YEAR'";
                            $query1 = $dbh -> prepare($sql1);
                            $query1->execute();
                            $results1=$query1->fetchAll(PDO::FETCH_OBJ);

                            $cnt=1;
                            if($query1->rowCount() > 0)
                            {
                            foreach($results1 as $row)
                            {               
                                ?>   
                          <tr>
                           
                            <td><?php  echo htmlentities($row->SubjectCode);?></td>
                            <td><?php  echo htmlentities($row->SubjectDescription);?></td>
                            <td class = "units"><?php  echo htmlentities($row->Units);?></td>

                          </tr><?php $cnt=$cnt+1;}} ?>
                        </tbody>
                        


                      </table>
                    </div>
<br>

                    <div class="table-responsive border rounded p-2">  
                    <h5>FIRST YEAR, SUMMER</h5>
                    <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">Code</th>
                            <th class="font-weight-bold">Description</th>
                            <th class="font-weight-bold">Units</th>
                            <th class="font-weight-bold">Grades</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            <?php

                            $ret2 = "SELECT CourseCode = 'BSIT'  FROM tblsubjects";
                            $query2 = $dbh -> prepare($ret2);
                            $query2->execute();
                            $results2=$query2->fetchAll(PDO::FETCH_OBJ);
                            $sql2="SELECT tblsubjects.SubjectCode, tblsubjects.SubjectDescription, tblsubjects.CollegiateYear, tblsubjects.Semester ,tblsubjects.Units, tblgrades.StudentName, tblgrades.PrelimGrade, tblgrades.MidtermGrade, tblgrades.SemiGrade, tblgrades.FinalGrade, tblgrades.Total from tblsubjects join tblgrades 
                            where StudentName =  (Semester = 'SUMMER' AND CollegiateYear = 'FIRST YEAR')";
                            $query2 = $dbh -> prepare($sql2);
                            $query2->execute();
                            $results2=$query2->fetchAll(PDO::FETCH_OBJ);

                            $cnt=1;
                            if($query2->rowCount() > 0)
                            {
                            foreach($results2 as $row)
                            {               
                                ?>   
                          <tr>
                           
                            <td><?php  echo htmlentities($row->SubjectCode);?></td>
                            <td><?php  echo htmlentities($row->SubjectDescription);?></td>
                            <td><?php  echo htmlentities($row->Units);?></td>
                          </tr><?php $cnt=$cnt+1;}} ?>
                        </tbody>


                      </table>
                    </div>

                    <br>

                    <div class="table-responsive border rounded p-3">  
                    <h5>FIRST YEAR, 2nd Semester</h5>
                    <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">Code</th>
                            <th class="font-weight-bold">Description</th>
                            <th class="font-weight-bold">Units</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ret2 = "SELECT CourseCode = 'BSIT'  FROM tblsubjects";
                            $query2 = $dbh -> prepare($ret2);
                            $query2->execute();
                            $results2=$query2->fetchAll(PDO::FETCH_OBJ);
                            $sql2="SELECT tblsubjects.SubjectCode, tblsubjects.SubjectDescription, tblsubjects.CollegiateYear, tblsubjects.Semester ,tblsubjects.Units from tblsubjects where Semester = '2nd' AND CollegiateYear = 'FIRST YEAR'";
                            $query2 = $dbh -> prepare($sql2);
                            $query2->execute();
                            $results2=$query2->fetchAll(PDO::FETCH_OBJ);

                            $cnt=1;
                            if($query2->rowCount() > 0)
                            {
                            foreach($results2 as $row)
                            {               
                                ?>   
                          <tr>
                           
                            <td><?php  echo htmlentities($row->SubjectCode);?></td>
                            <td><?php  echo htmlentities($row->SubjectDescription);?></td>
                            <td><?php  echo htmlentities($row->Units);?></td>
                          </tr><?php $cnt=$cnt+1;}} ?>
                        </tbody>


                      </table>
                    </div>
                    <br>

                    <div class="table-responsive border rounded p-1">
                      <table class="table">
                      <h5>SECOND YEAR, 1st Semester</h5>
                        <thead>
                          <tr>
                            <th class="font-weight-bold">Code</th>
                            <th class="font-weight-bold">Description</th>
                            <th class="font-weight-bold">Units</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ret1 = "SELECT CourseCode = 'BSIT'  FROM tblsubjects";
                            $query1 = $dbh -> prepare($ret1);
                            $query1->execute();
                            $results1=$query1->fetchAll(PDO::FETCH_OBJ);
                            $sql1="SELECT tblsubjects.SubjectCode, tblsubjects.SubjectDescription, tblsubjects.CollegiateYear, tblsubjects.Semester ,tblsubjects.Units from tblsubjects where Semester = '1st' AND CollegiateYear = 'SECOND YEAR'";
                            $query1 = $dbh -> prepare($sql1);
                            $query1->execute();
                            $results1=$query1->fetchAll(PDO::FETCH_OBJ);


                            $cnt=1;
                            if($query1->rowCount() > 0)
                            {
                            foreach($results1 as $row)
                            {               
                                ?>   
                          <tr>
                           
                            <td><?php  echo htmlentities($row->SubjectCode);?></td>
                            <td><?php  echo htmlentities($row->SubjectDescription);?></td>
                            <td><?php  echo htmlentities($row->Units);?></td>
                          </tr><?php $cnt=$cnt+1;}} ?>
                        </tbody>


                      </table>
                    </div>
<br>


            </div>
        </div>
    </div>

</body>
</html>

<?php } ?>