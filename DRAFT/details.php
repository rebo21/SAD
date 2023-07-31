<!-- VERSION 3 -->
<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>COMPANY JOB POST</title>
        <link rel="icon" type="image/x-icon" href="../IMAGES/PESO_LOGO.png">
        <link rel="stylesheet" href="../CSS/applicant_find_jobs.CSS">
        <link rel="stylesheet" href="../CSS/NAVBAR.CSS">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    </head>

    <body>
    <?php
                          $sql = "SELECT * FROM c_job_posts
                          UNION
                          SELECT * FROM p_job_posts";
                          $result = $conn->query($sql);
                         if ($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()) {
                            ?>

                           
                            <div class="card3">
                            <div class="col-75">
                            <a href=details.php?id=$row[c_job_posts_id]><?php echo $row['jobTitle']; ?></a>
                                        <h2><?php echo $row['jobTitle']; ?></h2>
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
                            <div class="col-25">

                            </div>

                            <div class="col-100">

                            </div>
                                </div>
                              

                          <?php }}?>

</body>
</html>