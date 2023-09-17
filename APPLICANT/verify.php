<?php
include "config.php";
session_start();

if (isset($_GET['email']) && isset($_GET['code'])) {
    $email = $_GET['email'];
    $verification_code = $_GET['code'];

    // Check if the provided email and verification code exist in the database
    $select = "SELECT * FROM a_accounttb WHERE email=? AND verification_code=?";
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $select)) {
        mysqli_stmt_bind_param($stmt, "ss", $email, $verification_code);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        // If a matching record is found, update the "is_verified" field to 1
        if ($row = mysqli_fetch_assoc($result)) {
            $update = "UPDATE a_accounttb SET is_verified=1 WHERE email=? AND verification_code=?";
            $stmt = mysqli_stmt_init($conn);
            if (mysqli_stmt_prepare($stmt, $update)) {
                mysqli_stmt_bind_param($stmt, "ss", $email, $verification_code);
                mysqli_stmt_execute($stmt);
                echo "Account verified successfully. You can now log in.";
            } else {
                echo "Database error while updating verification status.";
            }
        } else {
            echo "Invalid verification link. Please check your verification link again.";
        }
    } else {
        echo "Database error while verifying the account.";
    }
} else {
    echo "Invalid verification link. Please check your verification link again.";
}
?>
