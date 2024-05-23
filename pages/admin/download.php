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

$file_id = $_GET['pdf_id'];
$sql = "SELECT file_path FROM pdf_files WHERE pdf_id =?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $file_id);
$stmt->execute();
$result = $stmt->get_result();
$file_path = $result->fetch_assoc()['file_path'];

if (file_exists($file_path)) {
    // Set the headers to prompt the browser to download the file
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="'.basename($file_path).'"');
    header('Content-Length: '. filesize($file_path));
    readfile($file_path);
} else {
    echo "File not found.";
}

if ($file_path) {
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="'.basename($file_path).'"');
    header('Content-Length: '. filesize($file_path));
    readfile($file_path);
} else {
    echo "File not found.";
}
$stmt->close();
$conn->close();
?> 
