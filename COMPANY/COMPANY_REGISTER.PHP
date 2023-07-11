<!-- VERSION 3 -->
<?php
session_start();
include 'COMPANY_CONFIG.PHP';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $companyName = $_POST["companyName"];
    $industry = $_POST["industry"];
    $contactPerson = $_POST["contactPerson"];
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
        $sql = "INSERT INTO c_accounttb (companyName, industry, contactPerson, contactNum, email, password) VALUES ('$companyName', '$industry', '$contactPerson', '$contactNum', '$email', '$password')";

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
    <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
    <link rel="stylesheet" href="../CSS/COMPANY_REGISTER.CSS">
   
  </head>

  <body>
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
                            <input style="float:left;" type="text" placeholder="COMPANY NAME" name="companyName" required maxlength="50">
                        </div>
                    </div>

                   
                    <div class="card2">
                        <div class="col1">
                        
                            <select style=float:left; class="" name="industry" required>
                                <option value="" selected disabled>COMPANY INDUSTRY</option>
                                <option value="Industry 1">Industry 1</option>
                                <option value="Industry 2">Industry 2</option>
                                <option value="Industry 3">Industry 3</option>
                                </select>
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col1">
                            <input style="float:left;" type="text" placeholder="CONTACT PERSON" name="contactPerson" required maxlength="50">
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col1">
                            <input style="float:left;" type="tel" id="contactNum" name="contactNum" placeholder="09********" pattern="[0-9]{11}" required maxlength="11">
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col1">
                        
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
                        <h3>Already have an Account?&nbsp;&nbsp;<a href="APPLICANT_LOGIN.php">LOG IN</a></h3>
                    </div>

                    
                    
                </form>
            </div>

        </div>
    </center>

    <script src="../JS/COMPANY_REGISTER.JS"></script>
  </body>

</html>