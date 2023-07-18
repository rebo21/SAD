
<!-- VERSION 3 -->
<?php
session_start();
include 'ADMIN_CONFIG.PHP';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $employeeNum = $_POST["employeeNum"];
    $passcode = $_POST["passcode"];
    $confirm_passcode = $_POST["confirm_passcode"];


    if ($passcode === $confirm_passcode) {
        $existingAccountQuery = "SELECT * FROM applicant_access WHERE employeeNum='$employeeNum'";
        $result = $conn->query($existingAccountQuery);

        if ($result->num_rows > 0) {
            echo "<script>alert('Account with this email already exists.');</script>";
        } else {
            $sql = "INSERT INTO applicant_access (employeeNum, passcode) VALUES ('$employeeNum', '$passcode')";

            if ($conn->query($sql) === true) {
                header('location:../PESO/APPLICANTS_ACCESS.php');
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
        <title>APPLICANT HOMEPAGE</title>
        <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../CSS/PESO_REGISTER.CSS">
        <link rel="stylesheet" href="../CSS/NAVBAR.CSS">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    </head>

    <body>

        <div class="sidenav">
            <a href="#" class="noHover" style="height: 100px;">
                <img src="../IMAGES/LOGO.png"  style="width:200px;height:60px; float: left; margin-left: 30px;">
            </a>
            
            <a href="#" class="active">HOME</a>
            <a href="#">FIND JOBS</a>
            <a href="#">URGENT HIRING</a>
            <a href="#">SAVED JOBS</a>
            <a href="#">NOTIFICATION</a>
            <a href="#">PROFILE</a>
            <a href="#">SETTING</a>
            <a href="#">MORE INFO</a>
            <a href="#">LOG OUT</a>
          </div>
          
          <div class="main">
            <div id="navbar">
                <a class="active" style="width: 350px; text-align: left;" href="#">Home</a>
                
                  
                <a href="#"></a>
              </div>
              
              <div class="content">
              <center>
        <div class="card1">
            <h1>REGISTER</h1>
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

                   <div class="card2">
                        

                        <div class="col3">
                     
                            <input style=float:left; type="password" placeholder="CONFIRM PASSWORD" name="confirm_passcode" id="myInput"required maxlength="20">
                        </div>
                    </div>
                   


                   <div class="card3">
                       <br>
                       <center><button type="submit" class="register">REGISTER</button></center>
                       <br>
                    

                   </div>

                   
                   
               </form>
            </div>

        </div>
    </center>
              
          </div>


          <script src="../JS/APPLICANT_REGISTER.JS"></script>
    </body>

</html>

