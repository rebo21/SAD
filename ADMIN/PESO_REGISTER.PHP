
<!-- VERSION 3 -->
<?php
session_start();
include 'PESO_CONFIG.PHP';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $position = $_POST["position"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password === $confirm_password) {
        $existingAccountQuery = "SELECT * FROM p_accounttb WHERE email='$email'";
        $result = $conn->query($existingAccountQuery);

        if ($result->num_rows > 0) {
            echo "<script>alert('Account with this email already exists.');</script>";
        } else {
            $sql = "INSERT INTO p_accounttb (firstname, lastname, age, sex, position, email, password) VALUES ('$firstname', '$lastname', '$age', '$sex', '$position', '$email', '$password')";

            if ($conn->query($sql) === true) {
                header('location:../PESO/PESO_LOGIN.php');
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
            
            <a href="#">HOME</a>
            <a href="#">ACCESS</a>
            <a href="#" class="active">PESO REGISTER</a>
            <a href="#">JOB POSTS</a>
            <a href="#">REPORTS</a>
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
                <form id="register-form"class="" action="" method="post" autocomplete="off">
                   

                    <div class="card2">
                        <div class="col1">
                            
                            <input style=width:300px;float:left; type="text" onkeydown="restrictName(event)"name="firstname" placeholder="FIRST NAME" required maxlength="50">
                            
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
                        
                            <select style=float:left; class="" name="position" required>
                                <option value="" selected disabled>POSITION</option>
                                <option value="Position1">Position1</option>
                                <option value="Position2">Position2</option>
                                <option value="Position3">Position3</option>
                                </select>
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col3">
                        
                        <input style="float:left;" type="email" placeholder="EMAIL ADDRESS" name="email" required maxlength="50">
                        </div>
                    </div>
                  

                    
                    <div class="card2">
                        <div class="col3">
                        
                            <input style=float:left; type="password" placeholder="PASSWORD" name="password" id="myInput" oninput="validatePassword()"required maxlength="20">
                        </div>
                    </div>

                    <div class="card2">
                        

                        <div class="col3">
                     
                            <input style=float:left; type="password" placeholder="CONFIRM PASSWORD" name="confirm_password" id="myInput"required maxlength="20">
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
                        <center><button type="submit" class="register">REGISTER</button></center>
                        
                    </div>

                    
                    
                </form>
            </div>

        </div>
    </center>
              
          </div>


          <script src="../JS/APPLICANT_REGISTER.JS"></script>
    </body>

</html>

