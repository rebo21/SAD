<!-- VERSION 1 -->
<?php
@include 'company-config.php';
session_start();
$error = "";

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $companyName = mysqli_real_escape_string($conn, $_POST["companyName"]);
    $cpLastName = mysqli_real_escape_string($conn, $_POST["cpLastName"]);
    $cpFirstName = mysqli_real_escape_string($conn, $_POST["cpFirstName"]);
    $cpMidName = mysqli_real_escape_string($conn, $_POST["cpMidName"]);
    $password = $_POST["password"];

    $select = "SELECT * FROM c_accounttb WHERE email = '$email' && '$companyName' = companyName && '$cpLastName' = cpLastName && '$cpFirstName' = cpFirstName && '$cpMidName' = cpMidName && password = '$password'";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $_SESSION['user_id'] = $row['user_id'];
        header("location: COMPANY_PROFILE.php");
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
        <title>COMPANY LOG IN</title>
        <link rel="icon" type="image/x-icon" href="../../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../../CSS/COMPANY_LOGIN.CSS">
       
    </head>

    <body>


    <center>
            <nav class="navbar">
               
                <div class="navbar-links">
                    
                    <ul>
                        <li style="float: left; padding-top: 0; width: 40%;"><a href="LANDING_PAGE.HTML"><img src="../../IMAGES/PESO_LOGO.png"  style="width:80px;height:80px; float: left; margin-left: 30px;"></a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">REQUIREMENTS</a></li>
                        <li><a href="#">JOB OFFERS</a></li>
                        <li><a href="#">RELATED SITE</a></li>
                        <li><a href="#">HC</a></li>
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
                    <form action="COMPANY_LOGIN.php" method="post">
                        <div class="container">
                            <div class="card3">
                                <h2><label for="">EMAIL&nbsp;&nbsp;ADDRESS</label></h2>
                                <input style="float:left;width:70%;" type="email" placeholder="EMAIL ADDRESS" name="email" required maxlength="50">
                            </div>

                            <div class="card3">
                                <h2><label for="">COMPANY&nbsp;&nbsp;NAME</label></h2>
                            <input style="float:left;width:70%;" type="text" placeholder="COMPANY NAME" name="companyName" required maxlength="50">
                            </div>

                            <div class="card3">
                                <h2><label for="">CONTACT&nbsp;&nbsp;PERSON</label></h2>
                                <input style=width:30%;float:left; type="text"onkeydown="restrictName(event)" name="cpLastName" placeholder="LAST NAME" required maxlength="50">&nbsp;&nbsp;&nbsp;&nbsp;
                                <input style=width:30%;float:left;margin-left:20px type="text"onkeydown="restrictName(event)" name="cpFirstName" placeholder="FIRST NAME" required maxlength="50">&nbsp;&nbsp;&nbsp;&nbsp;
                                <input style=width:25%;float:left;margin-left:20px type="text"onkeydown="restrictName(event)" name="cpMidName" placeholder="MIDDLE NAME">
                            </div>

                            <div class="card4">
                                <h2><label for="">PASSWORD</label></h2>
                                <input style="float:left;width:70%;" type="password" placeholder="PASSWORD" name="password" id="password"required maxlength="20">
                                <img src="../IMAGES/eye-close.png" alt="" id="eyeicon">
                            </div>

                            <div class="card5">
                                <h3 style="margin-left: 50px;"><label>
                                <input type="checkbox" checked="checked" name="remember">Remember&nbsp;&nbsp;me
                                </label></h3>
                            </div>

                            <div class="card3">
                                

                                <br> <br>
                                <center><button type="submit" name="submit">LOG IN</button></center>
                                <br>
                                <center><span class="psw"><a href="#">Forgot&nbsp;&nbsp;password?</a></span></center>

                                <br> 
                                <h4>Create an Account&nbsp;&nbsp;<a href="../HTML-PHP/COMPANY_REGISTER.php">SIGN UP</a></h4>

                            </div>
                          
            
                      
                         
                      </form>
                </div>

            </div>
            </center>
            <br> <br> <br> <br> <br> <br>
        </div>



        <script src="../../JS/COMPANY_LOGIN.JS"></script>
        <div class="error-message">
            <?php echo $error; ?>
            </div>
    </body>
</html>
