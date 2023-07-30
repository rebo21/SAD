<!-- VERSION 3 -->

<?php
include "ADMIN_CONFIG.php";
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
if(isset($_POST["submit"])){
    $A_name = $_POST["A_name"];
    $A_email = $_POST["A_email"];
    $A_employeeNum = $_POST["A_employeeNum"];
    $A_passcode = $_POST["A_passcode"];
    $A_confirm_passcode = $_POST["A_confirm_passcode"];

    if($A_passcode !== $A_confirm_passcode){
        echo "Password does not match.";
    } else {
        $verification_code = bin2hex(random_bytes(16));

        $insert = "INSERT INTO applicant_access (A_name, A_email, A_employeeNum, A_passcode, verification_code) VALUES (?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $insert)){
            echo "Database error.";
        } else {
            $hashed_A_passcode = password_hash($A_passcode, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "ssssssss", $A_name, $A_email, $A_employeeNum, $hashed_A_passcode, $verification_code);
            mysqli_stmt_execute($stmt);

            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
                $mail->isSMTP();
                $mail->Host = 'smtp.yahoo.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'peso.srcojssw@yahoo.com';
                $mail->Password = 'websiteforpeso123';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
                $mail->setFrom('noreply@example.com', 'Your Website');
                $mail->addAddress($A_email, $A_name . ' ' . $A_employeeNum);
                $mail->isHTML(true);
                $mail->Subject = 'Account Verification';
                $mail->Body    = 'Dear ' . $A_name . ',<br><br>Please click on the following link to verify your account:<br>'
                                . '<a href="https://localhost/SAD/APPLICANT/verify.php?email=' . urlencode($A_email) . '&code=' . urlencode($verification_code) . '">Verify Account</a><br><br>'
                                . 'If you did not sign up for an account on our website, you can ignore this email.<br><br>'
                                . 'Best regards,<br>Your Website Team';

                $mail->send();

                echo 'Account created successfully. Please check your email for the verification link.';
            } catch (Exception $e) {
                echo 'Verification email could not be sent. Please try again later.';
            }

            header("location: index.php");
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
        <title>APPLICANT HOMEPAGE</title>
        <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../CSS/ACCESS_REGISTER.CSS">
        <link rel="stylesheet" href="../CSS/NAVBAR.CSS">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    </head>

    <body>

        <div class="sidenav">
            <a href="#" class="noHover" style="height: 100px;">
                <img src="../IMAGES/LOGO.png"  style="width:200px;height:60px; float: left; margin-left: 30px;">
            </a>
            
            <a href="#">HOME</a>
            <a href="#" class="active">ACCESS</a>
            <a href="#">PESO REGISTER</a>
            <a href="#">JOB POSTS</a>
            <a href="#">REPORTS</a>
            <a href="#">PROFILE</a>
            <a href="#">SETTING</a>
            <a href="#">MORE INFO</a>
            <a href="#">LOG OUT</a>
        </div>
          
        <div class="main">
            <div id="navbar">
                <a class="active" style="width: 500px; text-align: left;" href="#">APPLICANT ACCESS</a>
                <a href="#"></a>
            </div>
                
            <div class="content">
                <center>
                <div class="card4">
                    <h1>APPLICANTS</h1>
                    <div class="container">
                        <form action="" method="post">
                        
                            <div class="card2">
                                <div class="col1">
                                    <input type="email" placeholder="EMAIL ADDRESS" name="" required>
                                </div>
                            </div>

                            <div class="card2">
                                <div class="col1">
                                    <input type="email" placeholder="EMPLOYEE NUMBER" name="" required>
                                </div>
                            </div>

                            <div class="card2">
                                <div class="col1">
                                    <input type="password" placeholder="PASSCODE" name="" id="password"required maxlength="20">
                                    <img src="../IMAGES/eye-close.png" alt="" id="eyeicon">
                                    
                                </div>
                            </div>

                            <div class="card2">
                                <div class="col1">
                                    <input type="password" placeholder="CONFIRM PASSCODE" name="" id="password"required maxlength="20">
                                    <img src="../IMAGES/eye-close.png" alt="" id="eyeicon">
                                    
                                </div>
                            </div>


                            <div class="card3">
                                <br>
                                <center><button type="submit" class="accessreg" name="submit">ACCESS</button></center>
                                <br>
                                
                            </div>

                            
                            
                        </form>
                    </div>

                </div>
                </center>
                            
                            
            </div>
        
        </div>


        <script src="../JS/APPLICANT_REGISTER.JS"></script>
        <script src="../JS/NAVBAR.JS"></script>
    </body>

</html>

