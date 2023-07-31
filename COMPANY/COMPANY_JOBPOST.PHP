<!-- VERSION 3 -->
<?php
session_start();
include '../connect.php';
/*if (!isset($_SESSION['company_id'])) {
    header('Location: login.php');
    exit();
}*/
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
                            $company_id = $_SESSION['company_id'];
                          $sql = "SELECT * FROM c_job_posts WHERE company_id = '$company_id'";
                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                        ?>

                           
                            <div class="card3">
                            <div class="col-75">
<<<<<<< HEAD
                                <h2><?php echo $row['c_jobTitle']; ?><h2>
                                <h3>COMPANY NAME:&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                                <h3>JOB INDUSTRY:&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['c_jobIndustry']; ?></h3>
                                <h3>SALARY:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['c_salary']; ?></h3>
                                <h3>WORK LOCATION:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['c_workLocation']; ?></h3>
                                <h3>SLOTS:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['c_numSlot']; ?></h3>
                                <h3>SKILLS:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['c_skills']; ?></h3>

                                
                            
                            </div>
=======
                                        <h2><?php echo $row['jobTitle']; ?></h2>
                                        <h3>COMPANY ID: <?php echo $row['company_id']; ?></h3>
                                        <h3>TYPE OF ROLE: <?php echo $row['roleType']; ?></h3>
                                        <h3>POSITION: <?php echo $row['position']; ?></h3>
                                        <h3>YEARS OF EXPERIENCE: <?php echo $row['yrsExperience']; ?></h3>
                                        <h3>JOB SPECIALIZATION: <?php echo $row['jobSpecialization']; ?></h3>
                                        <h3>WORK LOCATION: <?php echo $row['workLocation']; ?></h3>
                                        <h3>SALARY: <?php echo $row['salary']; ?></h3>
                                        <h3>EDUCATIONAL BACKGROUND: <?php echo $row['educBg']; ?></h3>
                                        <h3>NUMBER OF SLOTS: <?php echo $row['numSlot']; ?></h3>
                                        <h3>JOB DESCRIPTION: <?php echo $row['jobDescription']; ?></h3>
                                    </div>
>>>>>>> f699c237f58e16df6b14404dae7ac27155e685f8
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