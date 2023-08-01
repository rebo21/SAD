<?php
include '../connect.php';
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $employeeNum = $_POST['employeeNum'];
    $passcode = $_POST['passcode'];
    $confirm_passcode = $_POST['confirm_passcode'];

    if ($passcode !== $confirm_passcode) {
        echo "Passcode Mismatch!";
    } else {
        $status_id = 2;
        $insert = "INSERT INTO access (name, email, employeeNum, passcode, status_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $insert)) {
            echo "Error";
        } else {
            mysqli_stmt_bind_param($stmt, "ssssi", $name, $email, $employeeNum, $passcode, $status_id);
            mysqli_stmt_execute($stmt);
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
                                        
                                        <input type="text" placeholder="NAME" name="name" required maxlength="50">
                                    </div>
                                </div>
                            
                                <div class="card2">
                                    <div class="col1">
                                        
                                        <input type="email" placeholder="EMAIL ADDRESS" name="email" required maxlength="50">
                                    </div>
                                </div>

                                <div class="card2">
                                    <div class="col1">
                                    <input type="text" placeholder="EMPLOYEE NUMBER" name="employeeNum" required maxlength="20">
                                    </div>
                                </div>

                                <div class="card2">
                                    <div class="col1">
                                        <input type="password" placeholder="PASSCODE" name="passcode" id="password"required maxlength="20">
                                        <img src="../IMAGES/eye-close.png" alt="" id="eyeicon">
                                        
                                    </div>
                                </div>

                                <div class="card2">
                                    <div class="col1">
                                        <input type="password" placeholder="CONFIRM PASSCODE" name="confirm_passcode" id="password"required maxlength="20">
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

