<?php
session_start(); 
?>
        <link rel="stylesheet" href="../CSS/ACCESS.CSS">
<body>
<div class="card1">
    
    <a href="APPLICANT_ACCESSREG.PHP" <?php echo isActivePage("APPLICANT_ACCESSREG.PHP"); ?>><button class="btn" <?php echo isActivePage("APPLICANT_ACCESSREG.PHP"); ?>><i><img src="../IMAGES/APPLICANTS.png" style="height: 25px; width: 25px"></i>&nbsp;&nbsp;APPLICANTS</button></a>

    <a href="COMPANY_ACCESSREG.PHP" <?php echo isActivePage("COMPANY_ACCESSREG.PHP"); ?>><button class="btn"><i><img src="../IMAGES/COMPANIES.png" style="height: 25px; width: 25px"></i>&nbsp;&nbsp;COMPANIES</button></a>

    <a href="JOBPOSTING_ACCESSREG.PHP" <?php echo isActivePage("JOBPOSTING_ACCESSREG.PHP"); ?>><a href=""><button class="btn"><i><img src="../IMAGES/JOBPOSTING.png" style="height: 25px; width: 25px"></i>&nbsp;&nbsp;JOB POSTING</button></a>
    <a href="DATABASE_ACCESSREG.PHP" <?php echo isActivePage("DATABASE_ACCESSREG.PHP"); ?>><button class="btn"><i><img src="../IMAGES/DATABASE.png" style="height: 25px; width: 25px"></i>&nbsp;&nbsp;DATABASE</button></a>
    <a href="REPORT_ACCESSREG.PHP" <?php echo isActivePage("REPORT_ACCESSREG.PHP"); ?>><button class="btn"><i><img src="../IMAGES/REPORTS.png" style="height: 25px; width: 25px"></i>&nbsp;&nbsp;REPORTS</button></a>
    <a href="DELETE_ACCESS.PHP" <?php echo isActivePage("DELETE_ACCESS.PHP"); ?>><button class="btn"><i><img src="../IMAGES/REPORTS.png" style="height: 25px; width: 25px"></i>&nbsp;&nbsp;DELETE</button></a>
</div>


