<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "yu_space";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

	// Set the directory where files will be stored
$target_dir = "C:xampp/htdocs/grad-project/pdfs/"; 

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded
    if (isset($_FILES["file"])) {
        // Check if the file is a PDF
        $title = $_POST['title'];
        $description = $_POST['description'];
        $fileType = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));
        if ($fileType == "pdf") {
            // Check if file already exists
            $target_file = $target_dir. basename($_FILES["file"]["name"]);
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
            } else {
                // Move the uploaded file to the target directory
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                    echo "The file ". basename($_FILES["file"]["name"]). " has been uploaded.";
                    // Optionally, you can store the file path in the database
                     $file_path = $target_file;
                     $sql = "INSERT INTO pdf_files (title, description, file_path) VALUES ('$title', '$description', '$file_path')";
                     $conn->query($sql);
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            echo "Only PDF files are allowed.";
        }
    } else {
        echo "No file was uploaded.";
    }
}
?>
