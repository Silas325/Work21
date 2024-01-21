<?php
include('server.php'); 

if (isset($_POST['update_password'])) {
    $token = $_POST['token'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    
    $new_password = mysqli_real_escape_string($db, $new_password);
    $confirm_password = mysqli_real_escape_string($db, $confirm_password);

    if ($new_password === $confirm_password) {
        $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);
        $updateQuery = "UPDATE users SET password = '$hashed_password', reset_token = NULL WHERE reset_token = '$token'";
        mysqli_query($db, $updateQuery);

        $_SESSION['success_message'] = "Password updated successfully. You can now login with your new password.";
        header("Location: login.php");
        exit();
    } else {
        $_SESSION['error_message'] = "Passwords do not match. Please try again.";
        header("Location: password_reset_form.php?token=$token");
        exit();
    }
}
?>
