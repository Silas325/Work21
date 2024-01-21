
<?php

include('server.php');
include('PHPMailer.php');
include('Exception.php');

$recipientEmail='';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
</head>
<body>
    <form method="post" action="sent.php">
        <label for="user_email">Recipient Email:</label>
        <input type="email" id="user_email" name="user_email" required>
        <button type="submit">Send Email</button>
    </form>
</body>
</html>
