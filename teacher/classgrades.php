<?php
session_start();
include('includes/dbconnection.php');
if (strlen($_SESSION['teacherlog']) == 0) {
    header('location:logout.php');
    exit();
} else {
    $sql = "SELECT tblstudent.StudentName, tblgrades.PrelimGrade, tblgrades.MidtermGrade, tblgrades.SemiGrade, tblgrades.FinalGrade, tblgrades.Total
            FROM tblstudent 
            INNER JOIN tblgrades ON tblstudent.StudentName = tblgrades.StudentName";

    $query = $dbh->prepare($sql);
    $query->execute();
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="view.css?v=1">
    <title>List of Students</title>
    <button><a style="text-decoration: none; color: black;" href="jsform.php">&lt; Back</a></button>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <h3>List of Students</h3>
            <div class="tableOutline">
                <table class="table table-striped-columns">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Prelim Grade</th>
                            <th>Midterm Grade</th>
                            <th>Semi-Final Grade</th>
                            <th>Final Grade</th>
                            <th class="font-weight-bold">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rows as $row): ?>
                            <tr>
                                <td><input type="text" name = "stuname" value="<?php echo htmlentities($row['StudentName']); ?>" readonly></td>
                                <td><input type="text" name = "prelim" value="<?php echo htmlentities($row['PrelimGrade']); ?>"></td>
                                <td><input type="text" name = "midterm" value="<?php echo htmlentities($row['MidtermGrade']); ?>"></td>
                                <td><input type="text" name = "semi" value="<?php echo htmlentities($row['SemiGrade']); ?>"></td>
                                <td><input type="text" name = "final" value="<?php echo htmlentities($row['FinalGrade']); ?>"></td>
                                <td><input type="text" name = "total" value="<?php echo htmlentities($row['Total']); ?> "></td>
                                <td><button name="submit">Update</button></td> 
                            </tr>
                            <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<?php ?>
</html>


<?php
}

if(isset($_POST['submit']))
{
    $stuname=$_POST['stuname'];
    $prelim=$_POST['prelim'];
    $midterm=$_POST['midterm'];
    $semi=$_POST['semi'];
    $final=$_POST['final'];
    $total=$_POST['total'];

$sql="update tblgrades set StudentName=:stuname,PrelimGrade=:prelim,MidtermGrade=:midterm,FinalGrade=:final,Total=:total";
$query=$dbh->prepare($sql);

$query->bindParam(':stuname',$stuname,PDO::PARAM_STR);
$query->bindParam(':prelim',$prelim,PDO::PARAM_STR);
$query->bindParam(':midterm',$midterm,PDO::PARAM_STR);
$query->bindParam(':semi',$semi,PDO::PARAM_STR);
$query->bindParam(':final',$final,PDO::PARAM_STR);
$query->bindParam(':total',$total,PDO::PARAM_STR);

$query->execute();
echo '<script>alert("Student has been updated")</script>';
}
?>
