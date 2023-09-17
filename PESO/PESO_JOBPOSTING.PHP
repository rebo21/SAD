<?php
include '../connect.php';
session_start();
if (isset($_POST['submit'])){
$peso_id = $_SESSION["peso_id"];
$jobTitle = $_POST["jobTitle"];
$roleType = $_POST["roleType"];
$position = $_POST["position"];
$yrsExperience = $_POST["yrsExperience"];
$jobSpecialization = $_POST["jobSpecialization"];
$workLocation = $_POST["workLocation"];
$salary = $_POST["salary"];
$educBg = $_POST["educBg"];
$numSlot = $_POST["numSlot"];
$jobDescription = $_POST["jobDescription"];



$insert = "INSERT INTO p_job_posts (peso_id, jobTitle, roleType, position, yrsExperience, jobSpecialization, workLocation, salary, educBg, numSlot, jobDescription) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $insert)){

} else{
    mysqli_stmt_bind_param($stmt,"sssssssssss",$peso_id, $jobTitle, $roleType, $position, $yrsExperience, $jobSpecialization, $workLocation, $salary, $educBg, $numSlot, $jobDescription);
    mysqli_stmt_execute($stmt);
    header("location: #");
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
        <title>COMPANY JOB POSTING</title>
        <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../CSS/COMPANY_JOBPOSTING.CSS">
        <link rel="stylesheet" href="../CSS/NAVBAR.CSS">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    </head>

    <body>

        <div class="sidenav">
            <a href="#" class="noHover" style="height: 100px;">
                <img src="../IMAGES/LOGO.png"  style="width:200px;height:60px; float: left; margin-left: 30px;">
            </a>
            
            <a href="#" style="font-size: 20px;">HOME</a>
            <a href="#" style="font-size: 20px;">COMPANY JOB POST</a>
            <a href="#" style="font-size: 20px;" class="active">PESO JOB POSTS</a>
            <a href="#" style="font-size: 20px;">PESO JOB POSTING</a>
            <a href="#" style="font-size: 20px;">NOTIFICATION</a>
            <a href="#" style="font-size: 20px;">PROFILE</a>
            <a href="#" style="font-size: 20px;">SETTING</a>
            <a href="#" style="font-size: 20px;">MORE INFO</a>
            <a href="#" style="font-size: 20px;">LOG OUT</a>
          </div>
          
          <div class="main">
            <div id="navbar">
                <a class="active" style="width: 350px; text-align: left;" href="#">Home</a>
                <a style="width: 350px; padding-top: 20px; margin-left: 80px;">
                    <formsearch class="example" action="action_page.php">
                      <center>
                      <input type="text" placeholder="" name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                      </center>
                      
                  </formsearch>
                  </a>
                  
                <a href="#"></a>
              </div>
              
              <div class="content">
                <div class="container">
                  <h1>JOB POSTING</h1>
                  <form action="" method="post" class="form">
                    <div class="row">
                      <div class="col-25">
                        <label for="jobTitle">JOB TITLE</label>
                      </div>
                      <div class="col-75">
                        <input type="text" name="jobTitle" id="jobTitle" placeholder="JOB TITLE">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-25">
                        <label for="roleType">ROLE TYPE</label>
                      </div>
                      <div class="col-75">
                        <input type="text" name="roleType" id="roleType" placeholder="ROLE TYPE">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-25">
                        <label for="position">POSITION</label>
                      </div>
                      <div class="col-75">
                        <input type="text" name="position" id="position" placeholder="POSITION">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-25">
                        <label for="yrsExperience">YEARS OF EXPERIENCE</label>
                      </div>
                      <div class="col-75">
                        <input type="number" name="yrsExperience" id="yrsExperience" placeholder="YEARS OF EXPERIENCE">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-25">
                        <label for="jobSpecialization">JOB SPECIALIZATION</label>
                      </div>
                      <div class="col-75">
                        <input type="text" name="jobSpecialization" id="jobSpecialization" placeholder="JOB SPECIALIZATION">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-25">
                        <label for="workLocation">WORK LOCATION</label>
                      </div>
                      <div class="col-75">
                        <input type="text" name="workLocation" id="workLocation" placeholder="WORK LOCATION">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-25">
                        <label for="salary">MONTHLY SALARY</label>
                      </div>
                      <div class="col-75">
                        <input type="number" name="salary" id="salary" placeholder="MONTHLY SALARY">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-25">
                        <label for="educBg">EDUCATIONAL BACKGROUND</label>
                      </div>
                      <div class="col-75">
                        <input type="text" name="educBg" id="educBg" placeholder="EDUCATIONAL BACKGROUND">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-25">
                        <label for="numSlot">SLOTS</label>
                      </div>
                      <div class="col-75">
                        <input type="number" name="numSlot" id="numSlot" placeholder="SLOTS">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-25">
                        <label for="jobDescription">JOB DESCRIPTION</label>
                      </div>
                      <div class="col-75">
                        <input type="text" name="jobDescription" id="jobDescription" placeholder="JOB DESCRIPTION">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-25">
                        <label for="skills">SKILLS</label>
                      </div>
                      <div class="col-75">
                        <input type="text" name="skills" id="skills" placeholder="SKILLS">
                      </div>
                    </div>

                    <br>
                    <div class="row">
                      <center><button type="submit" class="post" name="submit">POST JOB</button></center>
                    </div>
                  </form>

                  </div>
              
          </div>

          <script src="../JS/NAVBAR.JS"></script>
    </body>

</html>