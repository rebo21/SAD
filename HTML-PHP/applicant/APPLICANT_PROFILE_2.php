<!-- VERSION 1 -->
<?php
@include'config.php';
session_start();
if (isset($_POST["submit"])) {
    $user_id = $_SESSION["user_id"];
    $schoolStatus = $_POST["schoolStatus"];
    $educLevel = $_POST["educLevel"];
    $gradYear = $_POST["gradYear"];
    $school = $_POST["school"];
    $course = $_POST["course"];
    $award = $_POST["award"];
    
    
    $insert = "INSERT INTO  applicant_profile03 (user_id, schoolStatus, educLevel, gradYear, school, course, award) VALUES (?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $insert)){
        echo "Error getting the database";
    } else {
        mysqli_stmt_bind_param ($stmt,"sssssss",$user_id,$schoolStatus,$educLevel,$gradYear,$school,$course,$award);
        mysqli_stmt_execute($stmt);
        echo "success";
        header("location:APPLICANT_PROFILE_3.PHP");
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
        <title>APPLICANT PROFILE</title>
        <link rel="icon" type="image/x-icon" href="../../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../../CSS/APPLICANT_PROFILE_3.CSS">
       
    </head>

    <body>

        
    <div id="navbar">
            <a href="#" style="width:45%; padding-top: 15px;"><img src="../../IMAGES/PESO_LOGO.png"  style="width:80px;height:80px; float: left; margin-left: 30px;"></a>
            <a href="APPLICANT_HOMEPAGE.PHP">HOME</a>
            <a href="#">JOB OFFERS</a>
            <a href="#">JOB OFFERS</a>
            <a href="#" class="active">PROFILE</a>


        </div>

        
        <div class="column">
           
            <div class="sidenav">
               

                <a href="APPLICANT_PROFILE_1.PHP" >PERSONAL INFORMATION</a>
                <a href="APPLICANT_PROFILE_2.PHP"class="active">EDUCATIONAL BACKGROUND</a>
                <a href="APPLICANT_PROFILE_3.PHP">JOB PREFERENCE</a>
                <a href="APPLICANT_PROFILE_4.PHP">TRAININGS</a>
                <a href="APPLICANT_PROFILE_5.PHP">ELIGIBILITY</a>
                <a href="APPLICANT_PROFILE_6.PHP">WORK EXPERIENCES</a>
                <a href="APPLICANT_PROFILE_7.PHP">SKILLS</a>
                <a href="#">AUTHORIZATION</a>
                
            </div>

            <div class="main">
                
                <center>
                <div class="card">
                    <h1>MY PROFILE</h1>
                    <div class="container">
                        <form class="" action="" method="post" autocomplete="off">
                            
                            <br> <br> <br>
                            
                            <div class="card3">
                                <h3>II. EDUCATIONAL BACKGROUND</h3>
                                <div class="card4A">
                                    <div class="col1">
                                        <h4><label for="">CURRENTLY IN SCHOOL
                                            <select style=width:20%;margin-left:40px; class="" name="schoolStatus" required>
                                                <option value="" selected hidden></option>
                                                <option value="yes">YES</option>
                                                <option value="no">NO</option>
                                            </select>     
                                        </label></h4> 
                                    </div>
                                </div>

                                <div class="card4B">
                                    <div class="col1">
                                    <h4><label for="">HIGHEST EDUCATIONAL LEVEL</label></h4>
                                    <select style=width:70%;float:left; class="" name="educLevel" required>
                                        <option value="" selected hidden></option>
                                        <option value="NO FORMAL EDUCATION">NO FORMAL EDUCATION</option>
                                        <option value="ELEMENTARY LEVEL">ELEMENTARY LEVEL</option>
                                        <option value="ELEMENTARY GRADUATE">ELEMENTARY GRADUATE</option>
                                        <option value="HIGH SCHOOL LEVEL">HIGH SCHOOL LEVEL</option>
                                        <option value="HIGH SCHOOL GRADUATE">HIGH SCHOOL GRADUATE</option>
                                        <option value="COLLEGE LEVEL">COLLEGE LEVEL</option>
                                        <option value="COLLEGE GRADUATE">COLLEGE GRADUATE</option>
                                        <option value="TECH-VOC GRADUATE">TECH-VOC GRADUATE</option>
                                        <option value="POST GRADUATE">POST GRADUATE</option>
                                        
        
                                    </select>  
                                    </div>
                                </div>
        
                                <div class="card4B">
                                    <div class="col1">
                                        <h4><label for="">YEAR GRADUATED/LAST ATTENDED</label></h4>
                                        <input style=width:70%;float:left; type="date" name="gradYear" placeholder="MM/YYYY" required>
                                    </div>
                                </div>
        
                                <div class="card4B">
                                    <div class="col1">
                                        <h4><label for="">SCHOOL/UNIVERSITY</label></h4>
                                        <input style=width:70%;float:left; type="text" name="school" placeholder="SCHOOL NAME" required maxlength="50">
                                    </div>
                                </div>
        
                                <div class="card4B">
                                    <div class="col1">
                                        <h4><label for="">COURSE/PROGRAM</label></h4>
                                        <input style=width:70%;float:left; type="text" name="course" placeholder="COURSE/PROGRAM NAME" required maxlength="50">
                                    </div>
                                </div>
        
                                <div class="card4B">
                                    <div class="col1">
                                        <h4><label for="">AWARDS/HONORS RECEIVED</label></h4>
                                        <input style=width:70%;float:left; type="text" name="award" placeholder="AWARDS" required>
                                    </div>
                                </div>
                                

                                

        
                            </div>
                            <div class="card4E">
                            <center>
                                <button type="submit" class="button1">SAVE</button>
                                <button class="button2" name="submit">NEXT</button>
                            </center> 
                            </div>
            
                                
            
                                    
                                    
                        </form>
                    </div>
            
                </div>
                </center>
            
                    
              
               
            </div>

           
            
        </div>




        <script src="../../JS/APPLICANT_PROFILE.JS"></script>

    </body>
</html>
