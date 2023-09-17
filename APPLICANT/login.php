<?php
include "../connect.php";
session_start();
$error = "";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select = "SELECT * FROM a_accounttb WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $_SESSION['applicant_id'] = $row['applicant_id'];
        if(isset($_REQUEST['remember'])){
            setcookie('emailid',$_REQUEST['email'],time()+20);
            setcookie('pwd',$_REQUEST['password'],time()+20);
        }
        header("location:applicant_homepage.php");
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
    <title>APPLICANT LOGIN</title>
    <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
    <link rel="stylesheet" href="../CSS/APPLICANT_LOGIN.CSS">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="../JS/loader.js"></script>
   
  </head>

  <body>
  <div class="loader"><div></div><div></div><div></div><div></div></div>
    <div class="header" id="myHeader">
      <a href="#" style="width: 55%; margin-left: 20px;"><img src="../IMAGES/LOGO.png"  style="width:300px;height:90px; float: left; margin-left: 30px;"></a>
    </div>
             
    <center>
        <div class="card1">
            <h1>LOG IN</h1>
            <div class="container">
                <form action="" method="post" autocomplete="off">
                   
                    <div class="card2">
                        <div class="col1">

                        <i class="bi bi-envelope-at-fill" style="font-size:20px"></i>
                            <input type="email" placeholder="EMAIL ADDRESS" name="email" required>
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col1">
                        <i class="bi bi-key" style="font-size:20px"></i>
                        <img src="../IMAGES/eye-close.png" alt="" id="eyeicon">
                            <input type="password" placeholder="PASSWORD" name="password" id="password"required maxlength="20">
 
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col1">
                           <h2 style="float: left; font-size: 15px; margin-left: 30px;"><input type="checkbox" checked="checked" name="remember">Remember&nbsp;&nbsp;me</h2>
                        </div>
                    </div>
                  


                    <div class="card3">
                        <br>
                        <center><button type="submit" class="login" name="submit">LOGIN</button></center>
                        <br>
                        <span class="psw"><a href="#">Forgot&nbsp;&nbsp;password?</a></span>
                        <h3>Create an Account&nbsp;&nbsp;<a href="APPLICANT_REGISTER.php">SIGN UP</a></h3>
                    </div>

                    
                    
                </form>
            </div>

        </div>
    </center>

    <script src="../JS/APPLICANT_LOGIN.JS"></script>
  </body>

</html>