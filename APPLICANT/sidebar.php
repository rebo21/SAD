<?php
session_start(); 
?>
<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<body>
<div class="main">
            <div id="navbar">
                <a class="active" style="width: 350px; text-align: left;" href="#">Home</a>
                <a style="width: 350px; padding-top: 20px; margin-left: 80px;">
                    <formsearch class="example" action="action_page.php">
                      <center>
                      <input type="text" placeholder="SEARCH FOR JOB!!!" name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                      </center>
                      
                  </formsearch>
                  </a>
                  
                <a href="#"></a>
              </div>
<div class="sidenav">
    <a href="#" class="noHover" style="height: 100px;">
        <img src="../IMAGES/LOGO.png"  style="width:200px;height:60px; float: left; margin-left: 30px;">
    </a>
    <a href="applicant_homepage.php" <?php echo isActivePage("applicant_homepage.php"); ?>><i class="bi bi-house-door" style="font-size:20px"></i>&nbsp;HOME</a>
    <a href="applicant_urgent_hiring.php" <?php echo isActivePage("applicant_urgent_hiring.php"); ?>><i class="bi bi-file-post"style="font-size:20px"></i>&nbsp;Urgent Hiring</a>
    <a href="applicant_find_jobs.php" <?php echo isActivePage("applicant_find_jobs.php"); ?>><i class="bi bi-search" style="font-size:20px"></i>&nbsp;Find Job</a>
    <a href="#" <?php echo isActivePage("#"); ?>><i class="bi bi-bell" style="font-size:20px"></i>&nbsp;NOTIFICATION</a>
    <a href="af_personal_information.php" <?php echo isActivePage("af_personal_information.php"); ?>><i class="bi bi-person-lines-fill" style="font-size:20px"></i>&nbsp;PROFILE</a>
    <a href="#" <?php echo isActivePage("#"); ?>><i class="bi bi-sliders2" style="font-size:20px"></i>&nbsp;SETTING</a>
    <a href="#" <?php echo isActivePage("#"); ?>><i class="bi bi-envelope-at-fill" style="font-size:20px"></i>&nbsp;MORE INFO</a>
    <a href="sign_out.php" <?php echo isActivePage("sign_out.php"); ?>><i class="bi bi-box-arrow-left" style="font-size:20px"></i>&nbsp;LOG OUT</a>
</div>