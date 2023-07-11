<!-- VERSION 2 -->
<?php
@include'company-config.php';
session_start();
if (isset($_POST['submit'])){
$user_id = $_SESSION["user_id"];
$companyName = $_POST["companyName"];
$profileName = $_POST["profileName"];
$industry = $_POST["industry"];
$registrationNum = $_POST["registrationNum"];
$contactNum = $_POST["contactNum"];
$cpLastName = $_POST["cpLastName"];
$cpFirstName = $_POST["cpFirstName"];
$cpMidName = $_POST["cpMidName"];
$email = $_POST["email"];
$cpAddress = $_POST["cpAddress"];
$cpWebsite = $_POST["cpWebsite"];
$cpSize = $_POST["cpSize"];
$workHours = $_POST["workHours"];
$cpDresscode = $_POST["cpDresscode"];
$cpLanguage = $_POST["cpLanguage"];
$benefits = $_POST["benefits"];

$insert = "INSERT INTO company_profile01 (user_id, companyName, profileName, industry, registrationNum, contactNum, cpLastName ,cpFirstName,cpMidName, email, cpAddress, cpWebsite, cpSize, workHours, cpDresscode, cpLanguage, benefits) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $insert)){

} else{
    mysqli_stmt_bind_param($stmt, "sssssssssssssssss", $user_id, $companyName, $profileName, $industry, $registrationNum, $contactNum, $cpLastName ,$cpFirstName,$cpMidName, $email, $cpAddress, $cpWebsite, $cpSize, $workHours, $cpDresscode, $cpLanguage, $benefits);
    mysqli_stmt_execute($stmt);
    header("location: ../HTML-PHP/COMPANY_JOBPOSTING.php");
    exit();
}

}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COMPANY PROFILE</title>
        <link rel="icon" type="image/x-icon" href="../../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../../CSS/COMPANY_PROFILE.CSS">
       
    </head>

    <body>

        
        
    <div id="navbar">
            <a href="#" style="width:45%; padding-top: 15px;"><img src="../../IMAGES/PESO_LOGO.png"  style="width:80px;height:80px; float: left; margin-left: 30px;"></a>
           
        </div>

        
        <div class="column">
           
            <div class="sidenav">
               

                <a href="#">HOME</a>
                <a href="#">JOB POST</a>
                <a href="#">JOB POSTING</a>
                <a href="#" class="active">PROFILE</a>
                <a href="#">SETTING</a>
                
            </div>

            <div class="main">
                <center>
                    <div class="card">
                        <h1>COMPANY PROFILE</h1>
                        <div class="container">
                            <form class="" action="" method="post" autocomplete="off">
                                
                                
                                <br> 
                                <div class="card3">
                                    
                                
    
            
                                    <div class="card4">
                                        <div class="col1">
                                            <h4><label for="">COMPANY NAME</label></h4>
                                            <input style=width:50%;float:left; type="text" name="companyName" placeholder="COMPANY NAME" required>
                                            
                                        </div>
                                    </div>
            
                                    <div class="card4">
                                        <div class="col2">
                                            <h4><label for="">PROFILE NAME</label></h4>
                                            <input style=float:left; type="text" name="profileName" placeholder="PROFILE NAME" required>
                                            
                                        </div>
                                        <div class="col3">
                                            <h4><label for="">INDUSTRY</label></h4>
                                            <input style=float:left; type="text" name="industry" placeholder="INDUSTRY" required>
                                            
                                        </div>
                                    </div>
            
                                    <div class="card4">
                                        <div class="col2">
                                            <h4><label for="">REGISTRATION NUMBER</label></h4>
                                            <input style=width:60%;float:left; type="text" name="registrationNum" placeholder="REGISTRATION NUMBER" required>
                                            
                                        </div>
                                        <div class="col3">
                                            <h4><label for="">COMPANY CONTACT NUMBER</label></h4>
                                            <input style=float:left; type="text" name="contactNum" onkeydown="restrictName(event)"placeholder="CONTACT NUMBER" required>
                                            
                                        </div>
                                    </div>
                                    
            
                                    <div class="card4">
                                        <div class="col1">
                                            <h4><label for="">COMPANY CONTACT PERSON</label></h4>
                                            <input style=width:30%;float:left; type="text" name="cpLastName" placeholder="LAST" required value="">&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input style=width:30%;float:left;margin-left:20px type="text" name="cpFirstName" placeholder="FIRST" required value="">&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input style=width:25%;float:left;margin-left:20px type="text" name="cpMidName" placeholder="MIDDLE">
                                        </div>
                                    </div>
            
                                    <div class="card4">
                                        <div class="col1">
                                            <h4><label for="">COMPANY EMAIL ADDRESS</label></h4>
                                            <input style=width:70%;float:left; type="text" name="email" placeholder="COMPANY EMAIL ADDRESS" required>
                                            
                                        </div>
                                    </div>
            
                                    <div class="card4">
                                        <div class="col1">
                                            <h4><label for="">COMPANY ADDRESS</label></h4>
                                            <input style=width:70%;float:left; type="text" name="cpAddress" placeholder="COMPANY ADDRESS" required>
                                            
                                        </div>
                                    </div>
            
                                    <div class="card4">
                                        <div class="col1">
                                            <h4><label for="">COMPANY WEBSITE</label></h4>
                                            <input style=width:70%;float:left; type="text" name="cpWebsite" placeholder="COMPANY WEBSITE" required>
                                            
                                        </div>
                                    </div>
            
                                    <div class="card4">
                                        <div class="col2">
                                            <h4><label for="">COMPANY SIZE</label></h4>
                                            <input style=float:left; type="number" name="cpSize" placeholder="COMPANY SIZE" required>
                                            
                                        </div>
                                        <div class="card4">
                                            <div class="col3">
                                                <h4><label for="">WORKING HOURS</label></h4>
                                                <input style=float:left; type="text" name="workHours" placeholder="WORKING HOURS" required>
                                                
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="card4">
                                        <div class="col2">
                                            <h4><label for="">COMPANY DRESSCODE</label></h4>
                                            <input style=float:left; type="text" name="cpDresscode" placeholder="COMPANY DRESSCODE" required>
                                            
                                        </div>
                                        <div class="col3">
                                            <h4><label for="">COMPANY SPOKEN LANGUAGE</label></h4>
                                            <input style=float:left; type="text" name="cpLanguage" placeholder="SPOKEN LANGUAGE" required>
                                            
                                        </div>
                                    </div>
            
                                    <div class="card4">
                                        <div class="col1">
                                            <h4><label for="">EMPLOYER BENEFITS</label></h4>
                                            <input style=width:70%;float:left; type="text" name="benefits" placeholder="EMPLOYER BENEFITS" required>
                                            
                                        </div>
                                    </div>
    
                                    
    
            
                                </div>
                                <div class="card4E">
                                    <center><button type="submit" class="button3" name="submit">SAVE</button></center>
                                </div>
                
                                    
                
                                        
                                        
                            </form>
                        </div>
                
                    </div>
                    </center>
                
                

            </div>

        </div>
        <script src="../../JS/COMPANY_HOMEPAGE.JS"></script>

    </body>

</html>