<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "yu_space";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the file was uploaded
    if (isset($_FILES["pdf_file"]) && $_FILES["pdf_file"]["error"] == 0) {
        // Specify the path where the uploaded file will be stored
        $target_file = "C:xampp/htdocs/grad-project/pdfs/". basename($_FILES["pdf_file"]["name"]);
        
        // Check if the file already exists
        if (file_exists($target_file)) {
            // Delete the old file
            unlink($target_file);
        }
        
        // Move the uploaded file to the target directory
        move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $target_file);
            
         
    } 
}
?>
