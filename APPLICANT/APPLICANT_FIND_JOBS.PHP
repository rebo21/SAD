<!-- VERSION 3 -->


<?php
	
  include "../connect.php";
	if (isset($_POST['post_job'])) {
        $jobTitle = $_POST["jobTitle"];
        $companyName = $_POST["companyName"];
        $jobIndustry = $_POST["jobIndustry"];
        $salary = $_POST["salary"];
        $workLocation = $_POST["workLocation"];
        $numSlot = $_POST["numSlot"];

       
		
		$sql = "INSERT INTO c_job_posting (jobTitle, companyName, jobIndustry, salary, workLocation, numSlot)
		VALUES ('$jobTitle', '$companyName', '$jobIndustry', '$salary', '$workLocation', '$numSlot')";
		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
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
        <link rel="stylesheet" href="../CSS/APPLICANT_FIND_JOBS.CSS">
        <link rel="stylesheet" href="../CSS/NAVBAR.CSS">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    </head>

    <body>

    <?php
          include 'function.php';
          include 'sidebar.php';
          ?>
            <div class="content">
                <div class="row">
                    <div class="column middle">
                        <div class="card1">
                            <div class="card2">
                                <h1>JOB POSTS</h1>
                            </div>

                            <div class="card3A">
                                <h2><?php echo $row['jobTitle']; ?><h2>
                                <h3>COMPANY NAME:&nbsp;&nbsp;&nbsp;&nbsp;<?php    echo $row['companyName']; ?></h3>
                                <h3>COMPANY INDUSTRY:&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['jobIndustry']; ?></h3>
                                <h3>SALARY:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['salary']; ?></h3>
                                <h3>WORK LOCATION:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['workLocation']; ?></h3>
                                <h3>SLOTS:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['numSlot']; ?></h3>
                                <h3>SKILLS:&nbsp;&nbsp;&nbsp;&nbsp;</h3>

                            </div>
                            <div class="card3B">

                            </div>

                            <div class="card3C">

                            </div>
                        </div>
                      
                    </div>

                    <div class="column side">
                        
                    </div>
                    
                   
                  </div>
              
          </div>

          <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

    </body>

</html>