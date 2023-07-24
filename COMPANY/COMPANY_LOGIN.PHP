<!-- VERSION 3 -->
<?php
@include 'COMPANY_CONFIG.PHP';
session_start();
$error = "";

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $companyName = mysqli_real_escape_string($conn, $_POST["companyName"]);
    $contactPerson = mysqli_real_escape_string($conn, $_POST["contactPerson"]);
    $password = $_POST["password"];

    $select = "SELECT * FROM c_accounttb WHERE email = '$email' AND '$companyName' = companyName AND '$contactPerson' = contactPerson  AND password = '$password'";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $_SESSION['user_id'] = $row['user_id'];
        header("location: COMPANY_HOMEPAGE.PHP");
        exit();
    }
    else{
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
    <title>COMPANY LOGIN</title>
    <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
    <link rel="stylesheet" href="../CSS/COMPANY_LOGIN.CSS">
   
  </head>

  <body>
    <div class="header" id="myHeader">
      <a href="#" style="width: 55%; margin-left: 20px;"><img src="../IMAGES/LOGO.png"  style="width:300px;height:90px; float: left; margin-left: 30px;"></a>
    </div>
             
    <center>
        <div class="card1">
            <h1>LOG IN</h1>
            <div class="container">
                <form action="" method="post">
                   
                    <div class="card2">
                        <div class="col1">
                            <input type="email" placeholder="EMAIL ADDRESS" name="email" required>
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col1">
                            <input type="text" placeholder="COMPANY NAME" name="companyName" required maxlength="50">
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col1">
                            <input type="text" placeholder="CONTACT PERSON" name="contactPerson" required maxlength="50">
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col1">
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
                        <center><button type="submit" class="login" name="submit">LOG IN</button></center>
                        <br>
                        <span class="psw"><a href="#">Forgot&nbsp;&nbsp;password?</a></span>
                        <h3>Create an Account&nbsp;&nbsp;<a href="company_REGISTER.php">SIGN UP</a></h3>
                    </div>

                    
                    
                </form>
            </div>

        </div>
    </center>

    <script src="../JS/APPLICANT_LOGIN.JS"></script>
  </body>

</html>