<?php
include "config.php";
session_start();
$user_id = $_SESSION['user_id'];
if (isset($_POST['submit'])) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    $profile_img = $_FILES['profile_img'];
    $file_name = $profile_img["name"];
    $file_tmp = $profile_img["tmp_name"];
    $upload_directory = "upload_img/";
    $file_path = $upload_directory . $file_name;

 
    if (!empty($file_name)) {
        move_uploaded_file($file_tmp, $file_path);
    } else {
        $selectQuery = "SELECT profile_img FROM a_accounttb WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $selectQuery);
        $row = mysqli_fetch_assoc($result);
        $file_name = $row['profile_img'];
        $file_path = $upload_directory . $file_name;
    }

    $updateQuery = "UPDATE a_accounttb SET
        lastname = '$lastname',
        firstname = '$firstname',
        middlename = '$middlename',
        age = '$age',
        sex = '$sex',
        email = '$email',
        profile_img = '$file_name'
        WHERE user_id = '$user_id'";

    mysqli_query($conn, $updateQuery);
    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];
    $confirm_pass = $_POST['confirm_pass'];

    if (!empty($old_pass) && !empty($new_pass) && !empty($confirm_pass)) {
        $selectQuery = "SELECT password FROM a_accounttb WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $selectQuery);
        $row = mysqli_fetch_assoc($result);
        $dbPassword = $row['password'];

        if (password_verify($old_pass, $dbPassword)) {
            if ($new_pass === $confirm_pass) {
                mysqli_query($conn, "UPDATE a_accounttb SET password = '$new_pass' WHERE user_id = '$user_id'")  or die(mysqli_error($conn));
                $message = "Password updated successfully!";
            } else {
                $message = "New password and confirm password do not match!";
            }
        } else {
            $message = "Incorrect old password. Password update failed!";
        }
    }
}
?>