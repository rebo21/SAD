<!-- VERSION 3 -->

<?php
include '../connect.php';
session_start();

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select = "SELECT * FROM p_accounttb WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $_SESSION['peso_id'] = $row['peso_id'];
        if(isset($_REQUEST['remember'])){
            setcookie('emailid',$_REQUEST['email'],time()+20);
            setcookie('pwd',$_REQUEST['password'],time()+20);
        }
        header("location:peso_jobposting.php");
        exit();
    } else {
        echo "Invalid email or password!";
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
                            <input type="password" placeholder="PASSWORD" name="password" id="password"required maxlength="20">
                        </div>
                    </div>
                    


                    <div class="card3">
                        <br>
                        <center><button type="submit" class="login" name="submit">LOGIN</button></center>
                        <br>
                        <span class="psw"><a href="#">Forgot&nbsp;&nbsp;password?</a></span>

                    </div>

                    
                    
                </form>
            </div>

        </div>
    </center>

    <script src="../JS/APPLICANT_LOGIN.JS"></script>
  </body>

</html>