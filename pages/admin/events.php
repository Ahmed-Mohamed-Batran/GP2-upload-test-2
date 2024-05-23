<?php
// Open a new connection to the MySQL server
$host_ip = "localhost:3307";
$username = "root"; 
$password = "";
$database = "yu_space";
$conn = new mysqli($host_ip, $username, $password, $database);
  
$conn=mysqli_connect($host_ip,$username,$password,$database);
if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
} 

$name = $_POST['name'];
$description = $_POST['description'];
$date = $_POST['date'];
$time = $_POST['time'];
$organizers = $_POST['organizers_details'];
$location = $_POST['location'];


$stmt = $conn->prepare("INSERT INTO events (name, description, date, time, organizers_details, event_location) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("ssssss", $name, $description, $date, $time, $organizers, $location);


if ($stmt->execute()) {
    echo "New event added successfully";
} else {
    echo "Error: ". $stmt->error;
}
$stmt->close();

?>