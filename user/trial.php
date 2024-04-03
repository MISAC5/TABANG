<?php

session_start();
error_reporting(E_ALL);
include('includes/dbconnection.php');

if (strlen($_SESSION['sturecmsstuid']) == 0) {
    header('location:logout.php');
} else {
    // Assuming $_SESSION['sturecmsstuid'] contains the student ID

    // Prepare SQL query
    /*$sql = "SELECT tblstudent.StudentName, tblgrades.StudentName 
            FROM tblgrades 
            INNER JOIN tblstudent ON tblgrades.StudentName = tblstudent.StudentName
            WHERE tblstudent.StudentName = :$StudentUser";*/

    /* try {
        // Prepare statement
        $stmt = $dbh->prepare($sql);
        // Bind parameters
        $stmt->bindParam(':studentName', $studentName, PDO::PARAM_STR);
        // Execute statement
        $stmt->execute();

        // Check if there are results
        if ($stmt->rowCount() > 0) {
            // Output data of each row
            echo "<table><tr><th>Student Name</th><th>Other Columns</th></tr>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>".$row["StudentName"]."</td><td>".$row["StudentName"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
*/
?>

<div class="text-wrapper">
                  <?php
         $uid= $_SESSION['sturecmsstuid'];
$sql="SELECT * join tblgrades from tblstudent where ID=:uid AND tblstudent.StudentName = tblgrades=StudentName";

$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                  <p class="profile-name"><?php  echo htmlentities($row->StudentName);?></p>
                  <p class="designation"><?php  echo htmlentities($row->StudentEmail);?></p><?php $cnt=$cnt+1;}} ?>
                </div>


                
        <?php } ?>