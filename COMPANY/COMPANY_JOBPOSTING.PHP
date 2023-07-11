<?php
	
	include 'COMPANY_CONFIG.PHP';

	if (isset($_POST['post_comment'])) {

		$c_jobTitle = $_POST['c_jobTitle'];
		$c_salary = $_POST['c_salary'];
    $c_workLocation = $_POST['c_workLocation'];
		$c_jobIndustry = $_POST['c_jobIndustry'];
    $c_numSlot = $_POST['c_numSlot'];
		$c_skills = $_POST['c_skills'];
    


		
		$sql = "INSERT INTO c_job_posting (c_jobTitle, c_salary, c_workLocation, c_jobIndustry, c_numSlot, c_skills)
		VALUES ('$c_jobTitle', '$c_salary', '$c_workLocation', '$c_jobIndustry', '$c_numSlot', '$c_skills')";

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
                          <input type="text" name="c_jobTitle" placeholder="JOB TITLE">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-25">
                          <label for="">MONTHLY SALARY</label>
                        </div>
                        <div class="col-75">
                          <input type="number" name="c_salary" placeholder="SALARY">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-25">
                          <label for="">WORK LOCATION</label>
                        </div>
                        <div class="col-75">
                          <input type="text" name="c_workLocation" placeholder="WORK LOCATION">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-25">
                          <label for="">JOB INDUSTRY</label>
                        </div>
                        <div class="col-75">
                          <input type="text" name="c_jobIndustry" placeholder="JOB INDUSTRY">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-25">
                          <label for="">SLOTS</label>
                        </div>
                        <div class="col-75">
                          <input type="number" name="c_numSlot" placeholder="SLOTS">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-25">
                          <label for="">SKILLS</label>
                        </div>
                        <div class="col-75">
                        <input type="text" name="c_skills" placeholder="SKILLS">
                        </div>
                      </div>

                          
                     

                      <br>
                      <div class="row">
                        
                      <center><button type="submit" class="post" name="post_comment">POST JOB</button><center>
                      </div>
                    </form>
                  </div>
              
          </div>

          <script src="../JS/NAVBAR.JS"></script>
    </body>

</html>