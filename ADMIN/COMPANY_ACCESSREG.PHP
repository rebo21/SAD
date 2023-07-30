<!-- VERSION 3 -->


<?php
session_start();
include 'PESO_CONFIG.PHP';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $C_name = $_POST["C_name"];
    $C_email = $_POST["C_email"];
    $C_employeeNum = $_POST["C_employeeNum"];
    $C_passcode = $_POST["C_passcode"];
    $C_confirm_passcode = $_POST["C_confirm_passcode"];

    if ($C_passcode === $C_confirm_passcode) {
        $existingAccountQuery = "SELECT * FROM company_access WHERE C_email='$C_email'";
        $result = $conn->query($existingAccountQuery);

        if ($result->num_rows > 0) {
            echo "<script>alert('Account with this email already exists.');</script>";
        } else {
            $sql = "INSERT INTO company_access (C_name, C_email, C_employeeNum, C_passcode) VALUES ('$C_name', '$C_email', '$C_employeeNum', '$C_passcode')";

            if ($conn->query($sql) === true) {
                header('location:../ADMIN/COMPANY_ACCESSREG.PHP');
            } else {
                        
            }
        }
    } else {
        echo "<script>alert('Passwords do not match.');</script>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COMPANY ACCESS REGISTER</title>
        <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../CSS/ACCESS.CSS">
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
            <a href="#">APPLICANTS</a>
            <a href="#">JOB POSTS</a>
            <a href="#">REPORTS</a>
            <a href="#">PROFILE</a>
            <a href="#">LOG OUT</a>
        </div>
          
        <div class="main">
            <div id="navbar">
                <a  style="width: 500px; text-align: left; margin-left: 30px;" href="#">REGISTER ACCESS</a>
                <a href="#"></a>
            </div>
                
            <div class="content">
            <div class="row">
                <div class="column side">
                <?php
                    include 'accessfunction.php';
                    include 'accessbar.php';
                ?>
                </div>
                    
                <div class="column middle">
                    <center>
                    <div class="card4">
                        <h1>COMPANY</h1>
                        <div class="container">
                            <form action="" method="post">

                                <div class="card2">
                                    <div class="col1">
                                        
                                        <input type="text" placeholder="NAME" name="C_name" required maxlength="50">
                                    </div>
                                </div>
                            
                                <div class="card2">
                                    <div class="col1">
                                        
                                        <input type="email" placeholder="EMAIL ADDRESS" name="C_email" required maxlength="50">
                                    </div>
                                </div>

                                <div class="card2">
                                    <div class="col1">
                                    <input type="text" placeholder="EMPLOYEE NUMBER" name="C_employeeNum" required maxlength="20">
                                    </div>
                                </div>

                                <div class="card2">
                                    <div class="col1">
                                        <input type="password" placeholder="PASSCODE" name="C_passcode" id="password"required maxlength="20">
                                        <img src="../IMAGES/eye-close.png" alt="" id="eyeicon">
                                        
                                    </div>
                                </div>

                                <div class="card2">
                                    <div class="col1">
                                        <input type="password" placeholder="CONFIRM PASSCODE" name="C_confirm_passcode" id="password"required maxlength="20">
                                        <img src="../IMAGES/eye-close.png" alt="" id="eyeicon">
                                        
                                    </div>
                                </div>


                                <div class="card3">
                                    <br>
                                    <center><button type="submit" class="accessreg" name="submit">REGISTER&nbsp;&nbsp;ACCESS</button></center>
                                    <br>
                                    
                                </div>

                                
                                
                            </form>
                        </div>

                    </div>
                    </center>

                </div>
                            
                            
            </div>
        
        </div>


        <script src="../JS/APPLICANT_REGISTER.JS"></script>
        <script src="../JS/NAVBAR.JS"></script>
    </body>

</html>

