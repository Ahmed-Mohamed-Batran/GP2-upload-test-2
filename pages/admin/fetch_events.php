<?php
// Database connection
$host_ip = "localhost:3307";
$username = "root"; 
$password = ""; 
$database = "yu_space";
$conn = new mysqli($host_ip, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// Fetch events from the database
$stmt = $conn->prepare("SELECT * FROM events");
$stmt->execute();
$result = $stmt->get_result();
$events = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
} else {
    echo "No events found";
}

$conn->close();

// Return events as JSON
header('Content-Type: application/json');
echo json_encode($events);
?>
