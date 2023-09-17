<!-- VERSION 3 -->

<?php
@include 'PESO_CONFIG.PHP';
session_start();
$error = "";

if (isset($_POST['submit'])) {
    $R_email = mysqli_real_escape_string($conn, $_POST['R_email']);
    $R_employeeNum = mysqli_real_escape_string($conn, $_POST['R_employeeNum']);
    $R_passcode = mysqli_real_escape_string($conn, $_POST['R_passcode']);

    $select = "SELECT * FROM report_access WHERE R_email = '$R_email' AND R_employeeNum = '$R_employeeNum' AND R_passcode = '$R_passcode'";
    $result = mysqli_query($conn, $select);

   
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORT ACCESS</title>
    <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
    <link rel="stylesheet" href="../CSS/PESO_ACCESS.CSS">
   
  </head>

  <body>
    <div class="header" id="myHeader">
      <a href="#" style="width: 55%; margin-left: 20px;"><img src="../IMAGES/LOGO.png"  style="width:300px;height:90px; float: left; margin-left: 30px;"></a>
    </div>
             
    <center>
        <div class="card1">
            <h1>REPORTS</h1>
            <div class="container">
                <form action="" method="post">
                   
                    <div class="card2">
                        <div class="col1">
                            <input type="email" placeholder="EMAIL ADDRESS" name="R_email" required>
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col1">
                            <input type="email" placeholder="EMPLOYEE NUMBER" name="R_employeeNum" required>
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col1">
                            <input type="password" placeholder="PASSCODE" name="R_passcode" id="password"required maxlength="20">
                            <img src="../IMAGES/eye-close.png" alt="" id="eyeicon">
                            
                        </div>
                    </div>


                    <div class="card3">
                        <br>
                        <center><button type="submit" class="access" name="submit">ACCESS</button></center>
                        <br>
                        
                    </div>

                    
                    
                </form>
            </div>

        </div>
    </center>

    <script src="../JS/APPLICANT_LOGIN.JS"></script>
  </body>

</html>