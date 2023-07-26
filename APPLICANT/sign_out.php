<?php
session_start();
session_destroy();
header("location: applicant_login.php");
?>