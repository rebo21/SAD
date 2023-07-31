<?php
include "../connect.php";
session_start();
if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $jobseekerType = $_POST["jobseekerType"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if($password !== $confirm_password){
        echo "password not match";
    }

    $insert = "INSERT INTO a_accounttb (firstname, lastname, age, sex, jobseekerType, email, password) VALUES (?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $insert)){
        echo "error database";
    } else {
        mysqli_stmt_bind_param($stmt, "sssssss", $firstname, $lastname, $age, $sex, $jobseekerType, $email, $password);
        mysqli_stmt_execute($stmt);
        header("location: login.php");
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLICANT REGISTER</title>
    <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
    <link rel="stylesheet" href="../CSS/APPLICANT_REGISTER.CSS">
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
            <h1>REGISTER</h1>
            <div class="container">
                <form id="register-form"class="" action="" method="post" autocomplete="off">
                   

                    <div class="card2">
                        <div class="col1">
                        <i class="bi bi-person"></i>
                            <input style=width:300px;float:left;color:white; type="text" onkeydown="restrictName(event)"name="firstname" placeholder="FIRST NAME" required maxlength="50">
                            
                        </div>
                        <div class="col2">
                           
                            <input style=width:300px;float:left;color:white; type="text" onkeydown="restrictName(event)" name="lastname" placeholder="LAST NAME" required maxlength="50">
                        </div>
                    </div>
                    
                    <div class="card2">
                        <div class="col1">
                            
                            <input style=float:left;width:300px; type="number" name="age" placeholder="AGE" required min="18" max="90">
                            
                        </div>
                        <div class="col2">
                           
                            <select style=float:left;width:300px; class="" name="sex" required>
                            <option value="" selected disabled>SEX</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            </select>
                        </div>
                    </div>
                   
                    <div class="card2">
                        <div class="col3">
                        <i class="bi bi-list"></i>
                            <select style=float:left; class="" name="jobseekerType" required>
                                <option value="" selected disabled>TYPE OF JOBSEEKER</option>
                                <option value="FirstTime">First Time Jobseeker</option>
                                <option value="Jobseeker">Jobseeker</option>
                                <option value="OFW">OFW</option>
                                </select>
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col3">
                        <i class="bi bi-envelope-at-fill"></i>
                        <input style="float:left;" type="email" placeholder="EMAIL ADDRESS" name="email" required maxlength="50">
                        </div>
                    </div>
                  

                    
                    <div class="card2">
                        <div class="col3">
                            <i class="bi bi-key"></i>
                            <img src="../IMAGES/eye-close.png" alt="" id="eyeicon1" class="eyeicon" data-target="myInput1">
                            <input style="float:left;" type="password" placeholder="PASSWORD" name="password" id="myInput1" oninput="validatePassword()" required maxlength="20">
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col3">
                            <i class="bi bi-key"></i>
                            <img src="../IMAGES/eye-close.png" alt="" id="eyeicon2" class="eyeicon" data-target="myInput2">
                            <input style="float:left;" type="password" placeholder="CONFIRM PASSWORD" name="confirm_password" id="myInput2" required maxlength="20">
                        </div>
                    </div>
                    

                    <div class="card3">
                        <h3>By clicking register you agree in our&nbsp;&nbsp;<a href="#" id="myBtn">Terms & Agreement</a></h3>
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                              <span class="close">&times;</span>
                              <p>Some text in the Modal..</p>
                            </div>                            
                        </div>
                        <br>
                        <center><button type="submit" class="register" name="submit">REGISTER</button></center>
                        <h3>Already have an Account?&nbsp;&nbsp;<a href="login.php">LOG IN</a></h3>
                    </div>

                    
                    
                </form>
            </div>

        </div>
    </center>

    <script src="../JS/APPLICANT_REGISTER.JS"></script>
  </body>

</html>
<style>
    .bi{
        font-size:20px; 
        left:30px; 
        position:absolute; 
        margin-top:10px;
    }
</style>