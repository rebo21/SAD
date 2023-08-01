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
$question1 = $_POST["question1"];
$question2 = $_POST["question2"];
$question3 = $_POST["question3"];
$question4 = $_POST["question4"];
$question5 = $_POST["question5"];
$answer1 = $_POST["answer1"];
$answer2 = $_POST["answer2"];
$answer3 = $_POST["answer3"];
$answer4 = $_POST["answer4"];
$answer5 = $_POST["answer5"];



$insert = "INSERT INTO c_job_posts (company_id, jobTitle, roleType, position, yrsExperience, jobSpecialization, workLocation, salary, educBg, numSlot, jobDescription, question1, question2, question3, question4, question5, answer1, answer2, answer3, answer4, answer5) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $insert)){

} else{
    mysqli_stmt_bind_param($stmt,"sssssssssssssssssssss",$company_id, $jobTitle, $roleType, $position, $yrsExperience, $jobSpecialization, $workLocation, $salary, $educBg, $numSlot, $jobDescription, $question1, $question2, $question3, $question4, $question5, $answer1, $answer2, $answer3, $answer4, $answer5);
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
            
            <a href="#">HOME</a>
            <a href="#">APPLICANTS</a>
            <a href="#">JOB POSTS</a>
            <a href="#" class="active">JOB POSTING</a>
            <a href="#">NOTIFICATION</a>
            <a href="#">PROFILE</a>
            <a href="#">SETTING</a>
            <a href="#">MORE INFO</a>
            <a href="#">LOG OUT</a>
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
                  <div class="card1">
                  <h1>JOB POSTING</h1>
                  <form class="" action="" method="post" autocomplete="off">

                      <h2>JOB DETAILS</h2>
                      <div class="row">
                        <div class="col-25">
                          <label for="">JOB TITLE</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="jobTitle" placeholder="JOB TITLE">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                        <label for="">TYPE OF ROLE</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="roleType" placeholder="TYPE OF ROLE">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-25">
                        <label for="">POSITION</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="position" placeholder="POSITION">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-25">
                        <label for="">YEARS OF EXPERIENCE</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="yrsExperience" placeholder="YEARS OF EXPERIENCE">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-25">
                        <label for="">JOB SPECIALIZATION</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="jobSpecialization" placeholder="JOB SPECIALIZATION">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-25">
                        <label for="">WORK LOCATION</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="workLocation" placeholder="WORK LOCATION">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-25">
                        <label for="">MONTHLY SALARY</label>
                        </div>
                        <div class="col-75">
                        <input type="number" name="salary" placeholder="SALARY">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-25">
                        <label for="">EDUCATIONAL&nbsp;&nbsp;BG</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="educBg" placeholder="EDUCATIONAL BACKGROUND">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-25">
                        <label for="">NUMBER OF SLOTS</label>
                        </div>
                        <div class="col-75">
                        <input type="number" name="numSlot" placeholder="SLOTS">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-25">
                        <label for="">JOB DESCRIPTION</label>
                        </div>
                        <div class="col-75">
                        <textarea id="" type="text" name="jobDescription" placeholder="Write something.." style="height:200px; width: 80%"></textarea>
                        </div>
                      </div>

                      <br> <br>

                      <h2>QUALIFICATION QUESTIONS</h2>
                      <div class="row">
                        <div class="col-75">
                        <h3>QUESTIONS</h3>
                            <p style="color:red;">NOTE: QUESTIONS MUST BE ANSWERABLE BY YES OR NO ONLY.</p>
                        </div>
                        <div class="col-25">
                        <h3>ANSWERS</h3>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-75">
                        <input type="text" name="question1" placeholder="QUESTION #1" required>
                        </div>
                        <div class="col-25">
                        <select style=float:left; class="" name="answer1" required>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-75">
                        <input type="text" name="question2" placeholder="QUESTION #2" required>
                        </div>
                        <div class="col-25">
                        <select style=float:left; class="" name="answer2" required>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-75">
                        <input type="text" name="question3" placeholder="QUESTION #3" required>
                        </div>
                        <div class="col-25">
                        <select style=float:left; class="" name="answer3" required>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-75">
                        <input type="text" name="question4" placeholder="QUESTION #4" required>
                        </div>
                        <div class="col-25">
                        <select style=float:left; class="" name="answer4" required>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-75">
                        <input type="text" name="question5" placeholder="QUESTION #5" required>
                        </div>
                        <div class="col-25">
                        <select style=float:left; class="" name="answer5" required>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                        </div>
                      </div>
                
                     

                      <br>
                      <div class="row">
                        
                      <center><input type="submit" name="submit" value="Submit" ><center>
                      </div>
                    </form>
                    </div>
                  </div>
              
          </div>

          <script src="../JS/NAVBAR.JS"></script>
    </body>

</html>