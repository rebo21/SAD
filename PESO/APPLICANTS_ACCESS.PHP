<!-- VERSION 3 -->

<?php
@include 'ADMIN_CONFIG.PHP';
session_start();
$error = "";

if (isset($_POST['submit'])) {
    $employeeNum = mysqli_real_escape_string($conn, $_POST['employeeNum']);
    $passcode = mysqli_real_escape_string($conn, $_POST['passcode']);

    $select = "SELECT * FROM applicant_access WHERE employeeNum = '$employeeNum' AND passcode = '$passcode'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $_SESSION['user_id'] = $row['user_id'];
        header("location:PESO_JOBPOST.php");
        exit();
    } else {
        $error = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLICANTS</title>
    <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
    <link rel="stylesheet" href="../CSS/APPLICANT_LOGIN.CSS">
   
  </head>

  <body>
    <div class="header" id="myHeader">
      <a href="#" style="width: 55%; margin-left: 20px;"><img src="../IMAGES/LOGO.png"  style="width:300px;height:90px; float: left; margin-left: 30px;"></a>
    </div>
             
    <center>
        <div class="card1">
            <h1>APPLICANTS ACCESS</h1>
            <div class="container">
                <form action="" method="post">
                   
                    <div class="card2">
                        <div class="col1">
                            <input type="text" placeholder="EMPLOYEE NUMBER" name="employeeNum" required>
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col1">
                            <input type="password" placeholder="PASSCODE" name="passcode" id="password"required maxlength="20">
                        </div>
                    </div>
                    


                    <div class="card3">
                        <br>
                        <center><button type="submit" class="login" name="submit">ACCESS</button></center>
                        <br>
                     

                    </div>

                    
                    
                </form>
            </div>

        </div>
    </center>

    <script src="../JS/APPLICANT_LOGIN.JS"></script>
  </body>

</html>