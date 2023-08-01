<?php
include '../connect.php';
session_start();

if (isset($_FILES['profile_img'])) {
    $applicant_id = $_SESSION['applicant_id'];
    $file_name = $_FILES['profile_img']['name'];
    $file_tmp = $_FILES['profile_img']['tmp_name'];
    $upload_directory = "upload_img/";
    $file_path = $upload_directory . $file_name;

    if (!empty($file_name)) {
        move_uploaded_file($file_tmp, $file_path);

        // Update the profile_img field in the database
        $update_query = "UPDATE applicant_profile SET profile_img = '$file_name' WHERE applicant_id = '$applicant_id'";
        if (mysqli_query($conn, $update_query)) {
            echo 'success';
        } else {
            echo 'error';
        }
    } else {
        echo 'error';
    }
}
?>
