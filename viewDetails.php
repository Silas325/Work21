<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "webster";

$conn = new mysqli($server, $username, '', $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET['id'])) {
    $Studentid = $_GET['id'];

    $selectQuery = "SELECT * FROM students WHERE Studentid=$Studentid";
    $userResult = $conn->query($selectQuery);

    if ($userRow = $userResult->fetch_assoc()) {
        $currentFirstname = $userRow['Firstname'];
        $currentMiddleName = $userRow['MiddleName'];
        $currentLastname = $userRow['Lastname'];
        $currentClass = $userRow['Class'];
        $currentSubject = $userRow['Subject'];
        $registrationTime = $userRow['Registration_time'];
    } else {
        echo "User not found";
        exit(); 
    }
} else {
    echo "Invalid request";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="icon" href="view.png">
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

        th {
            background-color: #f2f2f2;
        }

        h2 {
            color: white;
            font-family: 'Times New Roman', Times, serif;
        }

        .hom {
            text-decoration: none;
            background-color: goldenrod;
            color: rgb(7, 7, 7);
            font-weight: bolder;
            float: right;
            margin-right: 20px;
        }
        button{
            background-color: blueviolet;
        }
    </style>
</head>
<body>

    <center><button><h2>Student information</h2></button></center>
    <a href="modifyStudent.php"><button type="button" class="hom">Back to Student modification page</button></a><br>
    <br> 

    <table border="2" align="middle">
        <tr>
            <th>Studentid</th>
            <th>Firstname</th>
            <th>Middle-name</th>
            <th>Lastname</th>
            <th>Class</th>
            <th>Subject_taught</th>
            <th>RegistrationTime</th>
        </tr>
        <tr>
            <td><?php echo $Studentid; ?></td>
            <td><?php echo $currentFirstname; ?></td>
            <td><?php echo $currentMiddleName; ?></td>
            <td><?php echo $currentLastname; ?></td>
            <td><?php echo $currentClass; ?></td>
            <td><?php echo $currentSubject; ?></td>
            <td><?php echo $registrationTime; ?></td>
        </tr>
    </table>

</body>
</html>
