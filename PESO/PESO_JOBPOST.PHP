<!-- VERSION 3 -->


<?php
	
	include 'PESO_CONFIG.PHP';

	if (isset($_POST['post_comment'])) {

		$p_jobTitle = $_POST['p_jobTitle'];
    $p_companyName = $_POST['p_companyName'];
		$p_salary = $_POST['p_salary'];
    $p_workLocation = $_POST['p_workLocation'];
		$p_jobIndustry = $_POST['p_jobIndustry'];
    $p_numSlot = $_POST['p_numSlot'];
		$p_skills = $_POST['p_skills'];
    


		
		$sql = "INSERT INTO p_job_posting (p_jobTitle, p_companyName, p_salary, p_workLocation, p_jobIndustry, p_numSlot, p_skills)
		VALUES ('$p_jobTitle', '$p_companyName', '$p_salary', '$p_workLocation', '$p_jobIndustry', '$p_numSlot', '$p_skills')";

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
        <title>COMPANY JOB POST</title>
        <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../CSS/COMPANY_JOBPOST.CSS">
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
            <a href="#" style="font-size: 20px;">COMPANY VALIDATION</a>
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
                <div class="row">
                    <div class="column side">
                        
                    </div>
                    
                    <div class="column middle">

                    
                        <div class="card1">
                            <div class="card2">
                                <h1>JOB POSTS</h1>
                            </div>
                            <?php

                              $sql = "SELECT * FROM p_job_posting";
                              $result = $conn->query($sql);

                              if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                
                            ?>
                           
                            <div class="card3">
                            <div class="col-75">
                                <h2><?php echo $row['p_jobTitle']; ?><h2>
                                <h3>COMPANY NAME:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['p_companyName']; ?></h3>
                                <h3>JOB INDUSTRY:&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['p_jobIndustry']; ?></h3>
                                <h3>SALARY:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['p_salary']; ?></h3>
                                <h3>WORK LOCATION:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['p_workLocation']; ?></h3>
                                <h3>SLOTS:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['p_numSlot']; ?></h3>
                                <h3>SKILLS:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['p_skills']; ?></h3>
                            
                            </div>
                            <div class="col-25">

                            </div>

                            <div class="col-100">

                            </div>
                                </div>
                              

                          <?php }}?>

                          
                        </div>
                      
                    </div>
                    
                   
                  </div>
              
          </div>

          <script src="../JS/NAVBAR.JS"></script>
    </body>

</html>