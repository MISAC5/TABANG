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
    <link rel="stylesheet" href="css/ticket.css?v=1">
    <title>Request Ticket</title>
</head>
<body>

    <center>
    <?php if (!$is_printing): ?>
        <br><br>
        <button id="submitPrint" onclick="printPage()" name="submitPrint">Print Ticket</button>
        <br><br><br> 
        <?php endif; ?> 
    
    </center>


    <script>
        function printPage() {
            const form = document.getElementById("myForm");
            const submitBtn = document.getElementById("submitBtn");
            window.print();
}
    </script>

    <div class="container">
        <div class="hdetails">
            <div class="hd-img">
                <img style = "width: 130px; height: 65px; margin-right: -1.5vw" src="images/auth/logo.png" alt="HCCB Logo">
            </div>
            <div class="hd1">
                <h3>Holy Child Colleges of Butuan</h2>
                <label style = "font-size: 12px">2nd St. Guingona Subd., Butuan City</label>
            </div>
        </div>

        <div class="full-line"></div>

        <div class="main">
            <h4>Request Ticket</h4>
            <br>
            <div class="requests">
                    <p>Transcript of Record</p>
                    <div class="line"></div>
                    <p>Statement of Account</p>
                    <div class="line"></div>
                    <p>Good Moral Certificate</p>
                    <div class="line"></div>
                    <p>Certificate of Completion</p>
                    <div class="line"></div>
                    <p>Psychology Test</p>
                    <div class="line"></div>
                    <p>Drug Test</p>
                    <div class="line"></div>
            </div>

        </div>

        <div class="full-line"></div>
<br>
        <div class="fdetails">
            <p>Accounting</p>
            <div class="line"></div>
        </div>

    </div>
</body>
</html>