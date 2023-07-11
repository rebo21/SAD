<?php
@include 'APPLICANT_CONFIG.PHP';
session_start();
session_unset();
session_destroy();
header('location:APPLICANT_LANDINGPAGE.HTML');
?>