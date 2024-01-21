<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'webster';

$conn = new mysqli($server, $username, '', $database);

if (!$conn) {
    die("Connection failed");
}

if (isset($_GET['id'])) {
    $subjectId = $_GET['id'];
    $selectQuery = "SELECT * FROM subject_category WHERE SubjectId = ?";
    $stmt = $conn->prepare($selectQuery);
    $stmt->bind_param("s", $subjectId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>View Record</title>
            <link rel="icon" href="subject.png">
            <style>
                body {
                    font-family: 'Times New Roman', Times, serif;
                    text-align: center;
                    background-color: whitesmoke;
                }

                form {
                    margin: 20px auto;
                    width: 50%;
                }

                label {
                    display: block;
                    margin-bottom: 10px;
                }

                input {
                    width: 100%;
                    padding: 8px;
                    margin-bottom: 10px;
                    border-radius: 5px;
                    border-top-right-radius: 5px;
                    border-bottom-left-radius: 5px;
                }

                button {
                    background-color: blue;
                    color: white;
                    padding: 10px;
                    border: none;
                    cursor: pointer;
                }

                h2 {
                    color: white;
                    font-family: 'Times New Roman', Times, serif;
                }
                .copy{
                    background-color: gold;
                    color: white;
                    font-family: 'Times New Roman', Times, serif; 
                }
                .foreach{
                    color: black;
                    font-family: 'Times New Roman', Times, serif;
                    background-color: gold;
                }
                .hom {
                    text-decoration: none;
                    background-color: goldenrod;
                    color: rgb(7, 7, 7);
                    font-weight: bolder;
                    float: right;
                    margin-right: 20px;
                }
                .classification{
                    background-color: gold;
                    height: 50px;
                    text-align: center;
                    font-size: 30px;
                }
            </style>
        </head>
        <body>
            <center><button><h2>View Record</h2></button></center>
            <a href="retrieveCategories.php"><button type="button" class="hom">Back to Subject Data</button></a><br>
            <br> 
            <h2 class="foreach">View Record</h2>

            <form>
                <label for="subjectId">Subject ID:</label>
                <input type="text" name="subjectId" value="<?php echo $row['SubjectId']; ?>" readonly>
                <br>
                <label for="userId">User ID:</label>
                <input type="text" name="userId" value="<?php echo $row['User_id']; ?>" readonly>
                <br>
                <label for="teacherFirstname">Teacher Firstname:</label>
                <input type="text" name="teacherFirstname" value="<?php echo $row['TeacherFirstname']; ?>" readonly>
                <br>
                <label for="teacherMiddleName">Teacher Middlename:</label>
                <input type="text" name="teacherMiddleName" value="<?php echo $row['TeacherMiddleName']; ?>" readonly>
                <br>
                <label for="teacherLastname">Teacher Lastname:</label>
                <input type="text" name="teacherLastname" value="<?php echo $row['TeacherLastname']; ?>" readonly>
                <br>
                <label for="subjectCategory">Subject Category:</label>
                <input type="text" name="subjectCategory" value="<?php echo $row['Subject_category']; ?>" readonly>
                <br>
                <label for="subcategory">Subcategory:</label>
                <input type="text" name="subcategory" value="<?php echo $row['Subcategory']; ?>" readonly>
                <br>
                <label for="class">Class:</label>
                <input type="text" name="class" value="<?php echo $row['Class']; ?>" readonly>
                <br>
                <label for="subject">Subject:</label>
                <input type="text" name="subject" value="<?php echo $row['Subject']; ?>" readonly>
                <br>
                <label for="description">Description:</label>
                <input type="text" name="description" value="<?php echo $row['Description']; ?>" readonly>
                <br>
            </form>

            <h2 class="copy">&copy;2024 School data management system</h2>
        </body>
        </html>

        <?php
    } else {
        echo "No records found.";
    }
} else {
    echo "Invalid request";
}
?>
