<!-- VERSION 3 -->

<?php
@include 'APPLICANT_CONFIG.PHP';
session_start();
$error = "";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select = "SELECT * FROM a_accounttb WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $_SESSION['user_id'] = $row['user_id'];
        if(isset($_REQUEST['remember'])){
            setcookie('emailid',$_REQUEST['email'],time()+20);
            setcookie('pwd',$_REQUEST['password'],time()+20);
        }
        header("location:APPLICANT_HOMEPAGE.html");
        exit();
    } else {
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
    <title>APPLICANT LOGIN</title>
    <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
    <link rel="stylesheet" href="../CSS/APPLICANT_LOGIN.CSS">
   
  </head>

  <body>
    <div class="header" id="myHeader">
      <a href="#" style="width: 55%; margin-left: 20px;"><img src="../IMAGES/LOGO.png"  style="width:300px;height:90px; float: left; margin-left: 30px;"></a>
    </div>
             
    <center>
        <div class="card1">
            <h1>LOG IN</h1>
            <div class="container">
                <form action="" method="post">
                   
                    <div class="card2">
                        <div class="col1">
                            <input type="email" placeholder="EMAIL ADDRESS" name="email" required>
                        </div>
                    </div>

                    <div class="card2">
                        <div class="col1">
                            <input type="password" placeholder="PASSWORD" name="password" id="password"required maxlength="20">
                        </div>
                    </div>
                    <div class="card2">
                        <div class="col1">
                           <h2 style="float: left; font-size: 15px; margin-left: 30px;"><input type="checkbox" checked="checked" name="remember">Remember&nbsp;&nbsp;me</h2>
                        </div>
                    </div>
                  


                    <div class="card3">
                        <br>
                        <center><button type="submit" class="login" name="submit">LOGIN</button></center>
                        <br>
                        <span class="psw"><a href="#">Forgot&nbsp;&nbsp;password?</a></span>
                        <button onclick="document.getElementById('signup-modal').style.display='block'" style="width:auto;"><h3>Sign Up</h3></button>
                    </div>

                    
                    
                </form>
            </div>

        </div>
    </center>
<!-------------------------------------------SIGN UP MODAL------------------------------------------------->

<style>
    .container-modal{
        background-color: #FF007F;

    }
</style>
    <div id="signup-modal" class="modal">
  <span onclick="document.getElementById('signup-modal').style.display='none'" class="close" title="Close Modal"></span>
  <?php
if(isset($_POST["register"])){
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
        header("location: applicant_login.php");
    }
    
}
?>
  <center>
    
        <div class="card1">
            <h1>REGISTER</h1>

                <form id="'signup-modal"class="close" action="" method="post" autocomplete="off">
                <div class="container-modal">
                    <div class="card2">
                        <div class="col1">
                            
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
                        <div class="clearfix">
        <button type="button" onclick="document.getElementById('signup-modal').style.display='none'" class="cancelbtn">Cancel</button>
                        <center><button type="submit" class="register" name="register">REGISTER</button></center>
                        <h3>Already have an Account?&nbsp;&nbsp;<a href="APPLICANT_LOGIN.php">LOG IN</a></h3>
                    </div>

                    
                    
                </form>
            </div>

        </div>
    </center>
</div>

<script>

var modal = document.getElementById('signup-modal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
    <script src="../JS/APPLICANT_LOGIN.JS"></script>
  </body>

</html>