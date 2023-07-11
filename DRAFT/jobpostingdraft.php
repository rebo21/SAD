<?php
	
	include 'JOBPOST_CONFIG.PHP';

	if (isset($_POST['post_comment'])) {
  $user_id = $_SESSION["user_id"];
  $jobTitle = $_POST["jobTitle"];
  $salary = $_POST["salary"];
  $workLocation = $_POST["workLocation"];
  $jobIndustry = $_POST["jobIndustry"];
  $numSlot = $_POST["numSlot"];
  $skills = $_POST["skills"];
  $photos = $_POST["photos"];



  $insert = "INSERT INTO c_job_posting (user_id, jobTitle, salary, workLocation, jobIndustry, numSlot, skills, photos)
  VALUES ('$user_id', '$jobTitle', '$salary', '$workLocation', '$jobIndustry', '$numSlot', '$skills', '$photos')";
  if ($conn->query($sql) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
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
                  <h1>JOB POSTING</h1>
                  <form action="" method="post" class="form">
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
                          <label for="">MONTHLY SALARY</label>
                        </div>
                        <div class="col-75">
                          <input type="number" name="salary" placeholder="SALARY">
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
                          <label for="">JOB INDUSTRY</label>
                        </div>
                        <div class="col-75">
                          <input type="text" name="jobIndustry" placeholder="JOB INDUSTRY">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-25">
                          <label for="">SLOTS</label>
                        </div>
                        <div class="col-75">
                          <input type="number" name="numSlot" placeholder="SLOTS">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-25">
                          <label for="">SKILLS</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="skills" placeholder="SKILLS">
                        </div>
                      </div>

                          </form>
                        </div>
                      </div>

                      <br>
                      <div class="row">
                        
                      <button type="submit" class="btn" name="post_comment">Post Comment</button>
                      </div>
                    </form>
                  </div>
              
          </div>

          <script src="../JS/NAVBAR.JS"></script>
    </body>

</html>