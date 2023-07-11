<!-- VERSION 1.1 -->
<?php
session_start();
include 'company-config.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $companyName = $_POST["companyName"];
    $industry = $_POST["industry"];
    $cpLastName = $_POST["cpLastName"];
    $cpFirstName = $_POST["cpFirstName"];
    $cpMidName = $_POST["cpMidName"];
    $contactNum = $_POST["contactNum"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    $existingEmailQuery = "SELECT * FROM c_accounttb WHERE email = '$email'";
    $existingEmailResult = $conn->query($existingEmailQuery);

    if ($existingEmailResult->num_rows > 0) {
        $error = "Account with this email already exists.";
    } elseif ($password !== $confirmPassword) {
        $error = "Password do not match!";
    } else {
        $sql = "INSERT INTO c_accounttb (companyName, industry, cpLastName, cpFirstName, cpMidName, contactNum, email, password) VALUES ('$companyName', '$industry', '$cpLastName', '$cpFirstName', '$cpMidName', '$contactNum', '$email', '$password')";

        if ($conn->query($sql) === true) {
            header('Location: COMPANY_LOGIN.php');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COMPANY REGISTER</title>
        <link rel="icon" type="image/x-icon" href="../../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../../CSS/COMPANY_REGISTER.CSS">
       
    </head>

    <body>

        <div class="header">
            
                <a href="../index.php"><img src="../IMAGES/PESO_LOGO.png"  style="width:100px;height:100px; float: left;"></a>
                <a href="https://santarosacity.gov.ph"><img src="../../IMAGES/STA_ROSA_LOGO.png"  style="width:100px; height:100px; float: right;"></a>
            
        </div>

        <center>
            <nav class="navbar">
               
                <div class="navbar-links">
                    
                    <ul>
                    
                        <li><a href="../HTML/ABOUT_US.php">ABOUT US</a></li>
                        <li><a href="../HTML/REQUIREMENTS.php">REQUIREMENTS</a></li>
                        <li><a href="../HTML/JOB_OFFERS.php">JOB OFFERS</a></li>
                        <li><a href="../HTML/URGENT_HIRING.php">URGENT HIRING</a></li>
                        <li><a href="..HTML/HELP_CENTER.php">HELP CENTER</a></li>
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
            <div class="card1">
                <h1>REGISTER</h1>
                <div class="container">
                    <form class="" action="" method="post" autocomplete="off">
                        
                        <div class="card2">
                            <div class="col1">
                            <h2><label for="">COMPANY&nbsp;&nbsp;NAME</label></h2>
                            <input style="float:left;width:70%;" type="text" placeholder="COMPANY NAME" name="companyName" required maxlength="50">
                            </div>
                        </div>

                        <div class="card2">
                            <div class="col1">
                            <h2><label for="">INDUSTRY</label></h2>
                            <input style="float:left;width:70%;" type="text" placeholder="INDUSTRY" name="industry" required maxlength="50">
                            </div>
                        </div>

                        <div class="card2">
                            <div class="col1">
                            <h2><label for="">CONTACT&nbsp;&nbsp;PERSON</label></h2>
                            <input style=width:30%;float:left; type="text" onkeydown="restrictName(event)"name="cpLastName" placeholder="LAST NAME" required maxlength="50">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input style=width:30%;float:left;margin-left:20px type="text"onkeydown="restrictName(event)" name="cpFirstName" placeholder="FIRST NAME" required maxlength="50">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input style=width:25%;float:left;margin-left:20px type="text"onkeydown="restrictName(event)" name="cpMidName" placeholder="MIDDLE NAME">
                            </div>
                        </div>

                        <div class="card2">
                            <div class="col1">
                                <h2><label for="">CONTACT&nbsp;&nbsp;NUMBER</label></h2>
                                <input style="float:left;width:70%;" type="tel" id="contactNum" name="contactNum" placeholder="09********" pattern="[0-9]{11}" required maxlength="11">
                            </div>
                        </div>
                       

                        <div class="card2">
                            <div class="col1">
                            <h2><label for="">EMAIL&nbsp;&nbsp;ADDRESS</label></h2>
                            <input style="float:left;width:70%;" type="email" placeholder="EMAIL ADDRESS" name="email" required maxlength="50">
                            </div>
                        </div>
                      

                        
                        <div class="card2">
                            <div class="col1">
                                <h2><label for="">PASSWORD</label></h2>
                                <input style=float:left;width:40%; type="password" placeholder="PASSWORD" name="password" required maxlength="20">
                                
                            </div>
                        </div>

                        <div class="card2">
                            

                            <div class="col1">
                                <h2><label for="confirm_password">CONFIRM&nbsp;&nbsp;PASSWORD</label></h2>
                                <input style=float:left;width:40%; type="password" placeholder="CONFIRM PASSWORD" name="confirmPassword" required maxlength="20">
                            </div>
                        </div>
                        <br> <br> <br> <br> <br> <br> 

                        <div class="card3">
                            <div class="col2">
                                <br> <br>
                                <h3>By clicking register you agree in our&nbsp;&nbsp;<a href="#" id="myBtn">Terms & Agreement</a></h3>
                                <div id="myModal" class="modal">
                                    <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <p>Some text in the Modal..</p>
                                    </div>                            
                                </div>
                                <br> <br> 
                                <center><button type="submit" class="signupbtn">SIGN UP</button></center>
                                <h3>Already have an Account?&nbsp;&nbsp;<a href="../HTML-PHP/COMPANY_LOGIN.php">LOG IN</a></h3>
                            </div>
                        </div>

                        
                        
                    </form>
                </div>

            </div>
            </center>

            <br> <br> <br> <br> <br> <br>
            
        </div>

        <script src="../../JS/COMPANY_REGISTER.JS"></script>

    </body>
</html>
