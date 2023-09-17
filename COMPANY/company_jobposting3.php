<?php
include '../connect.php';
session_start();
if (isset($_POST['submit'])){
$company_id = $_SESSION["company_id"];
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



$insert = "INSERT INTO c_job_posts (company_id, jobTitle, roleType, position, yrsExperience, jobSpecialization, workLocation, salary, educBg, numSlot, jobDescription) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $insert)){

} else{
    mysqli_stmt_bind_param($stmt,"sssssssssss",$company_id, $jobTitle, $roleType, $position, $yrsExperience, $jobSpecialization, $workLocation, $salary, $educBg, $numSlot, $jobDescription);
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
        <link rel="icon" type="image/x-icon" href="../../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../CSS/COMPANY_JOBPOSTING.CSS">
        <link rel="stylesheet" href="../css/navbar.css">
       
    </head>

    <body>
        <?php
        include 'function.php';
        include 'sidebar.php';
        ?>

            <div class="main">
                <center>
                    <div class="card1">
                        <h1>JOB POSTING</h1>
                        <div class="container">
                            <form class="" action="" method="post" autocomplete="off">
                                <br> 
                                <div class="card3">
                                    
                                        <div class="col1">
                                            <h4><label for="">JOB TITLE</label></h4>
                                            <input type="text" name="jobTitle" placeholder="JOB TITLE">
                                        </div>
                                    
            
                                  
                                        <div class="col2">
                                            <h4><label for="">TYPE OF ROLE</label></h4>
                                            <input type="text" name="roleType" placeholder="TYPE OF ROLE">
                                        </div>
                                    
            
                                    
                                        <div class="col1">
                                            <h4><label for="">POSITION</label></h4>
                                            <input type="text" name="position" placeholder="POSITION">
                                        </div>
                                   
            
                                    
                                        <div class="col2">
                                            <h4><label for="">YEARS OF EXPERIENCE</label></h4>
                                            <input type="text" name="yrsExperience" placeholder="YEARS OF EXPERIENCE">
                                        </div>
                               
                                        <div class="col1">
                                            <h4><label for="">JOB SPECIALIZATION</label></h4>
                                            <input type="text" name="jobSpecialization" placeholder="JOB SPECIALIZATION">
                                        </div>
                                   
                                        <div class="col2">
                                            <h4><label for="">WORK LOCATION</label></h4>
                                            <input type="text" name="workLocation" placeholder="WORK LOCATION">
                                        </div>
                                   
                                        <div class="col1">
                                            <h4><label for="">MONTHLY SALARY</label></h4>
                                            <input type="number" name="salary" placeholder="SALARY">
                                        </div>
                                    
                                        <div class="col2">
                                            <h4><label for="">EDUCATIONAL&nbsp;&nbsp;BACKGROUND</label></h4>
                                            <input type="text" name="educBg" placeholder="EDUCATIONAL BACKGROUND">
                                        </div>
                                    
                                        <div class="col1">
                                            <h4><label for="">NUMBER OF SLOTS</label></h4>
                                            <input type="number" name="numSlot" placeholder="SLOTS">
                                        </div>
                                    
                                        <div class="col2">
                                            <h4><label for="">JOB DESCRIPTION</label></h4>
                                            <textarea id="" type="text" name="jobDescription" placeholder="Write something.." style="height:200px"></textarea>
                                        </div>

                                    
    
                                    
    
            
                                </div>
                                <div class="card4E">
                                <center>
                                    <input type="submit" name="submit" value="Submit" >
                                </center> 
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