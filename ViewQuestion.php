<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Questions</title>
    <style>
        .question-container {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Submitted Questions</h2>

    <?php
    // Connect to the database
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'webster';
    $conn = mysqli_connect($server, $username, '', $dbname);

    if (!$conn) {
        die('Could not connect to database');
    }

    // Fetch questions from the database
    $query = "SELECT * FROM exam_form.php";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Display each question
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="question-container">';
            echo '<strong>Question Number:</strong> ' . $row['question_number'] . '<br>';
            echo '<strong>Question Type:</strong> ' . $row['question_type'] . '<br>';
            echo '<strong>Question:</strong> ' . $row['question'] . '<br>';
            
            // Display options if available
            if (!empty($row['options'])) {
                $options = json_decode($row['options'], true);
                echo '<strong>Options:</strong> ' . implode(', ', $options) . '<br>';
            }

            // Display answer if available
            if (!empty($row['answer'])) {
                echo '<strong>Answer:</strong> ' . $row['answer'] . '<br>';
            }

            echo '<strong>User ID:</strong> ' . $row['User_id'] . '<br>';
            echo '</div>';
        }
    } else {
        echo "Error fetching questions: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
    ?>

</body>
</html>
