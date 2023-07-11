<!-- VERSION 1.1 -->
<?php
@include 'config.php';
session_start();
$error = "";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select = "SELECT * FROM a_accounttb WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $_SESSION['user_id'] = $row['user_id'];
        if(isset($_REQUEST['remember'])){
            setcookie('emailid',$_REQUEST['email'],time()+20);
            setcookie('pwd',$_REQUEST['password'],time()+20);
        }
        header("location:APPLICANT_PROFILE_1.php");
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
        <title>APPLICANT LOG IN</title>
        <link rel="icon" type="image/x-icon" href="../../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../../CSS/APPLICANT_LOGIN.CSS">
       
    </head>

    <body>

        
        <div class="header">
            
            <a href="../index.php"><img src="../../IMAGES/PESO_LOGO.png"  style="width:100px;height:100px; float: left;"></a>
            <a href="https://santarosacity.gov.ph"><img src="../../IMAGES/STA_ROSA_LOGO.png"  style="width:100px; height:100px; float: right;"></a>
            
        </div>

        <center>
            <nav class="navbar">
               
                <div class="navbar-links">
                    
                    <ul>
                    
                        <li><a href="../HTML-PHP/ABOUT_US.php">ABOUT US</a></li>
                        <li><a href="../HTML-PHP/REQUIREMENTS.php">REQUIREMENTS</a></li>
                        <li><a href="../HTML-PHP/JOB_OFFERS.php">JOB OFFERS</a></li>
                        <li><a href="../HTML-PHP/URGENT_HIRING.php">URGENT HIRING</a></li>
                        <li><a href="../HTML-PHP/HELP_CENTER.php">HELP CENTER</a></li>
                    </ul>
                    
                </div>

                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                  </a>
            </nav>
        </center>

        <div class="column">
            <br> <br> <br> <br> <br> <br>
            <center>
            <div class="card">
                <h1>LOG IN</h1>
                <br> <br>
                <div class="card2">
                    <form action="" method="post">
                        <div class="container">
                            <div class="card3">
                                <h2><label for="">EMAIL&nbsp;&nbsp;ADDRESS</label></h2>
                                <center><input type="email" placeholder="EMAIL ADDRESS" name="email" required></center>
                            </div>

                            <div class="card3">
                                <h2><label for="">PASSWORD</label></h2>
                                <center><input type="password" placeholder="PASSWORD" name="password" id="password"required maxlength="20"></center>
                                <img src="../../IMAGES/eye-close.png" alt="" id="eyeicon">
                                <h3 style="margin-left: 50px;"><label>
                                    </div>
                                <input type="checkbox" checked="checked" name="remember">Remember&nbsp;&nbsp;me
                                </label></h3>
                            </div>

                            <div class="card3">
                                

                                <br> <br>
                                <center><button type="submit" name="submit">LOG IN</button></center>
                                <br>
                                <center><span class="psw"><a href="#">Forgot&nbsp;&nbsp;password?</a></span></center>

                                <br> 
                                <h4>Create an Account&nbsp;&nbsp;<a href="APPLICANT_REGISTER.php">SIGN UP</a></h4>

                            </div>
                          
            
                      
                         
                      </form>
                </div>

            </div>
            </center>

            <br> <br> <br> <br> <br> <br>
            
        </div>



        <script src="../../JS/APPLICANT_LOGIN.JS"></script>
            <div class="error-message">
            <?php echo $error; ?>
            </div>
    </body>
</html>
