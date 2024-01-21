<?php
session_start();
if (!isset($_SESSION['User_id'])) {
    header('Location: login.php');
    exit();
}
$server = "localhost";
$username = "root";
$password = "";
$dbname = "webster";


$conn = new mysqli($server, $username, '', $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$User_id = $_SESSION['User_id'];
$fileQuery = "SELECT DocumentId,User_id, File_name, Document_type,Description FROM uploaded_files WHERE User_id = $User_id";
$fileResult = $conn->query($fileQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Uploaded Files</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            border-color: blue;
            width: 80%;
            margin: 20px auto;
        }

        table, th, td {
            border: 1.5px solid black !important;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
        button{
         background-color:blue !important;
         color: white !important;
        }
        a{
            text-decoration: none;
            color: white !important;
        }

        th {
            background-color: #f2f2f2;
        }
        .classify{
            background-color:black;
        }
        .teacher{
            float: right;
            background-color: green !important;
        }
    </style>
</head>
<body>

   <button type="button" class="classify"> <h2>Teacher Uploaded Files</h2></button><button type="button" class="teacher"><a href="Teacherpage.php">Back to Teacherpage</a></button>

    <table border="2" align="middle">
        <tr>
            <th>Document ID</th>
            <th>TeacherId</th>
            <th>File Name</th>
            <th>Document Type</th>
            <th>Description</th>
        <?php
        while ($fileRow = $fileResult->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $fileRow['DocumentId'] . "</td>";
            echo "<td>" . $fileRow['User_id'] . "</td>";
            echo "<td>" . $fileRow['File_name'] . "</td>";
            echo "<td>" . $fileRow['Document_type'] . "</td>";
            echo "<td>" . $fileRow['Description'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
