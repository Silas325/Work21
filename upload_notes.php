<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Succession</title>
    <link rel="icon" href="note.png">
</head>
<body>

<?php
session_start();

$severe = 'localhost';
$username = 'root';
$password = '';
$dbname = 'webster';
$conn = mysqli_connect($severe, $username, '', $dbname);
if (!$conn) {
    die("Could not connect to database: " . $dbname);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $documentType = $_POST['document_type'] ?? '';
    $description = $_POST['description'] ?? '';
    $loggedInUserId = $_SESSION['User_id'] ?? '';

    if (empty($documentType)) {
        die('Please select a document type.');
    }

    $uploadDirectory = 'uploads/';
    $allowedFileTypes = [];

    switch ($documentType) {
        case 'image':
            $allowedFileTypes = ['jpeg', 'jpg', 'png', 'gif'];
            break;
        case 'video':
            $allowedFileTypes = ['mp4', 'avi', 'mov'];
            break;
        case 'audio':
            $allowedFileTypes = ['mp3', 'wav', 'ogg'];
            break;
        case 'document':
            $allowedFileTypes = ['pdf', 'doc', 'docx', 'txt'];
            break;
        case 'excel':
            $allowedFileTypes = ['xls', 'xlsx', 'csv'];
            break;
        default:
            die('Invalid document type.');
    }

    // Check if a file was selected
    if (!empty($_FILES['file']['name'])) {
        $fileName = $_FILES['file']['name'];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Check if the file type is allowed
        if (in_array($fileType, $allowedFileTypes)) {
            // Check if a file was uploaded
            if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
                $fileName = $_FILES['file']['name'];
                $fileTmpPath = $_FILES['file']['tmp_name'];

                // Move the file to the specified directory
                $uploadDirectory = 'uploads' . DIRECTORY_SEPARATOR . $documentType . DIRECTORY_SEPARATOR;

                if (!file_exists($uploadDirectory) && !mkdir($uploadDirectory, 0777, true)) {
                    die('Failed to create folders...');
                }

                $uploadPath = $uploadDirectory . $fileName;

                if (move_uploaded_file($fileTmpPath, $uploadPath)) {
                    echo "File is valid, and was successfully uploaded.\n";
                } else {
                    echo "Error uploading file.\n";
                }

                $query = "INSERT INTO uploaded_files (User_id, File_name, Document_type, Description) VALUES ('$loggedInUserId', '$fileName', '$documentType', '$description')";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    echo "<h1>File is successfully uploaded</h2>";
                    echo "File information stored in the database.\n";
                    header('Location: Uploadsuccess.php');
                } else {
                    echo "Error storing file information: " . mysqli_error($conn) . "\n";
                }
            } else {
                echo "Error uploading file.\n";
            }
        } else {
            echo "Invalid file type. Allowed types: " . implode(', ', $allowedFileTypes);
        }
    } else {
        echo "No file uploaded or an error occurred.\n";
    }
} else {
    echo "Invalid request method.\n";
}
?>
</body>
</html>
