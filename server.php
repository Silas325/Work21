<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$severe='localhost';
$_username='root';
$_password='';
$_database='webster';

session_start();

// initializing variables
$Fname = "";
$Lname = "";
$Username = "";
$Email = "";
$Password_1 = "";
$Password_2 = "";
$Status = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'webster');

if ($db == false) {
    die("Could not connect to the database");
}

  //resetting password
  if (isset($_POST['reset_password'])) {
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];

    // Validate and sanitize inputs (you can add more validation as needed)
    $Username = mysqli_real_escape_string($db, $Username);
    $Email = filter_var($Email, FILTER_SANITIZE_EMAIL);

    // Check if the username and email exist in the database
    $query = "SELECT * FROM users WHERE Username = '$Username' AND Email = '$Email'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) > 0) {
        // Generate a unique token (you may use a more secure method)
        $token = md5(uniqid(rand(), true));

        // Store the token in the database for this user
        $updateQuery = "UPDATE users SET reset_token = '$token' WHERE Username = '$Username'";
        mysqli_query($db, $updateQuery);

        // Send a password reset email with a link including the token
        // Implement a function to send the email (not included here)

        // Redirect to a confirmation page
        header("Location: reset_confirmation.php");
        exit();
    } else {
        $_SESSION['error_message'] = "Invalid username or email. Please try again.";
        header("Location: password_reset.php");
        exit();
    }
}

?>


