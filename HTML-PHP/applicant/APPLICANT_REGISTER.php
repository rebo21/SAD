<?php
@include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password === $confirm_password) {
        $existingAccountQuery = "SELECT * FROM a_accounttb WHERE email='$email'";
        $result = $conn->query($existingAccountQuery);

        if ($result->num_rows > 0) {
            echo "<script>alert('Account with this email already exists.');</script>";
        } else {
            $sql = "INSERT INTO a_accounttb (lastname, firstname, middlename, age, sex, email, password) VALUES ('$lastname', '$firstname', '$middlename', '$age', '$sex', '$email', '$password')";

            if ($conn->query($sql) === true) {
                header('location:APPLICANT_LOGIN.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
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
        <title>APPLICANT REGISTER</title>
        <link rel="icon" type="image/x-icon" href="../../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../../CSS/APPLICANT_REGISTER.CSS">
       
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
            <div class="card">
                <h1>REGISTER</h1>
                <div class="container">
                    <form id="register-form"class="" action="" method="post" autocomplete="off">
                        <div class="card2">
                            <div class="col3">
                            <h2><label for="">NAME</label></h2>
                            <input style=width:30%;float:left; type="text" onkeydown="restrictName(event)" name="lastname" placeholder="LAST NAME" required maxlength="50">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input style=width:30%;float:left;margin-left:20px type="text" onkeydown="restrictName(event)"name="firstname" placeholder="FIRST NAME" required maxlength="50">&nbsp;&nbsp;&nbsp;&nbsp;
                            <input style=width:25%;float:left;margin-left:20px type="text" onkeydown="restrictName(event)"name="middlename" placeholder="MIDDLE NAME">
                           
                            
                            </div>
                        </div>
                        
                        <div class="card2">
                            <div class="col1">
                                <h2><label for="">AGE</label></h2>
                                <input style=float:left; type="number" name="age" placeholder="AGE" required min="18" max="90">
                                
                            </div>
                            <div class="col2">
                                <h2><label for="">SEX</label></h2>
                                <select style=float:left; class="" name="sex" required>
                                <option value="" selected hidden></option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                </select>
                            </div>
                        </div>
                       

                        <div class="card2">
                            <div class="col3">
                            <h2><label for="">EMAIL&nbsp;&nbsp;ADDRESS</label></h2>
                            <input style="float:left;width:70%;" type="email" placeholder="EMAIL ADDRESS" name="email" required maxlength="50">
                            </div>
                        </div>
                      

                        
                        <div class="card2">
                            <div class="col3">
                                <h2><label for="password">PASSWORD</label></h2>
                                <input style=float:left;width:40%; type="password" placeholder="PASSWORD" name="password" id="myInput" oninput="validatePassword()"required maxlength="20">
                            </div>
                        </div>

                        <div class="card2">
                            

                            <div class="col3">
                                <h2><label for="confirm_password">CONFIRM&nbsp;&nbsp;PASSWORD</label></h2>
                                <input style=float:left;width:40%; type="password" placeholder="CONFIRM PASSWORD" name="confirm_password" id="myInput"required maxlength="20">
                            </div>
                        </div>
                        <br> <br> <br> <br> <br> <br> 

                        <div class="card4">
                            <h3>By clicking register you agree in our&nbsp;&nbsp;<a href="#" id="myBtn">Terms & Agreement</a></h3>
                            <div id="myModal" class="modal">
                                <div class="modal-content">
                                  <span class="close">&times;</span>
                                  <p>Some text in the Modal..</p>
                                </div>                            
                            </div>
                            <br> <br> 
                            <center><button type="submit" class="signupbtn">SIGN UP</button></center>
                            <h3>Already have an Account?&nbsp;&nbsp;<a href="APPLICANT_LOGIN.php">LOG IN</a></h3>
                        </div>

                        
                        
                    </form>
                </div>

            </div>
            </center>

            <br> <br> <br> <br> <br> <br>
            
        </div>



        <script src="../../JS/APPLICANT_REGISTER.JS"></script>

    </body>
</html>
