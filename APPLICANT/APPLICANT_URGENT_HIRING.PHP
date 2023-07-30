<!-- VERSION 3 -->
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
        <title>COMPANY JOB POST</title>
        <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../CSS/COMPANY_JOBPOST.CSS">
        <link rel="stylesheet" href="../CSS/NAVBAR.CSS">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    </head>

    <body>

    <?php
          include 'function.php';
          include 'sidebar.php';
          ?>
          <div class="main">
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

                              $sql = "SELECT * FROM c_job_posting";
                              $result = $conn->query($sql);

                              if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                
                            ?>
                           
                            <div class="card3">
                            <div class="col-75">
                                <h2><?php echo $row['c_jobTitle']; ?><h2>
                                <h3>COMPANY NAME:&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                                <h3>JOB INDUSTRY:&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['c_jobIndustry']; ?></h3>
                                <h3>SALARY:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['c_salary']; ?></h3>
                                <h3>WORK LOCATION:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['c_workLocation']; ?></h3>
                                <h3>SLOTS:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['c_numSlot']; ?></h3>
                                <h3>SKILLS:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['c_skills']; ?></h3>
                            
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