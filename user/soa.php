<?php
$is_printing = isset($_GET['print']);
$print_class = $is_printing ? 'hidden-print' : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statement of Account | CRIM</title>
    <link rel="stylesheet" href="css/crimsoa.css?v=1">
</head>
<body>
    <div class="container">
        <div class="header-details">
            <div class="logo-img">
                <img src="images\auth\hccb.PNG" alt="hccb logo">
            </div>
            <div class="logo-text"><center>
                <h3 style = "color: red; font-size: 20px">H o l y  C h i l d  C o l l e g e s  o f  B u t u a n</h4>
                <p class = "headers">2nd St., Guingona Subd., Butuan City, Philippines</p>
                <p class = "headers">Tel No.: (085) 342-3975/ 225-6872</p>
                <p class = "headers">www.hccb.com.ph</p>
                <p class = "headers">E-mail: hccb.school@gmail.com</p>
                <p class = "pacu">Member: Philippine Association of Colleges & Universities (PACU)</p>
                </center></div>
        </div>
        <div class="red-full-line"></div>
        <strong>
            <center><p style = "margin-top: 3vh;" class="emphasis">STATEMENT OF ACCOUNT</p></center>
            <br>
        <form id = "myForm">
        <div class="personal">
            <div class="body-personal1">
                <div class="body-student-name">
                    <p style = "margin-right: 2vw;" class = "personal-details">Name:</p>
                    <input type="text">
                </div>
                <div class="body-student-id">
                    <p style = "margin-right: 2vw;" class="personal-details">ID#:</p>
                    <input type="text">
                </div>
            </div>
            <div class="body-personal2">
                <div class="body-student-course">
                    <p style = "margin-right: 1.3vw;" class = "personal-details">Course:</p>
                    <input type="text">
                </div>
                <div class="body-student-SY">
                    <p style = "margin-right: 2vw;" class="personal-details">S.Y.:</p>
                    <input type="text">
                </div>
            </div>
        </div>
        <?php if (!$is_printing): ?>
            <button id="submitPrint" onclick="printPage()" name="submitPrint">Submit</button>
        <?php endif; ?> 
        </form> 

        <script>
            function printPage() {
                const form = document.getElementById("myForm");
                const submitBtn = document.getElementById("submitBtn");
                window.print();
            }
        </script>
        <div class="tuition-body">
            <div style="display: grid;  justify-content: space-evenly;" class="tuition">
                <div class="tlabel">
                    <label>Tuition Fee</label>
                </div>
                <div style="display:flex" class="tuition-fee">
                    <label>( </label>
                    <input style = "width: 1.5vw; height: 3vh; margin-top: -2px; text-align: right; font-weight: normal; font-size: 10px;" type="text">
                    <label>/unit x </label>
                    <input style = "width: 1.2vw; height: 3vh; margin-top: -2px; text-align: center; font-weight: normal; font-size: 10px;" type="text">
                    <label>units )</label>
                </div>
            
                <div class="price">
                    <input style = "width: 4vw; margin-top: -2px; text-align: right; font-size: 12px;" type="text">
                    <br>
                    <input style = "width: 4vw; margin-top: -2px; text-align: right; font-size: 12px;" type="text">
                    <div class="c-line"></div>
                </div>
            </div>
        </div>
        <br><br>
        </strong>


    </div>



</body>
</html>