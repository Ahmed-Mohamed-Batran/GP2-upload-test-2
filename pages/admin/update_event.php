<?php
include '../include/db.php'; 

if (isset($_POST['event_id']) && isset($_POST['name']) && isset($_POST['description']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['organizers_details']) && isset($_POST['location'])) {
    $eventId = $_POST['event_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $organizers_details = $_POST['organizers_details'];
    $location = $_POST['location']; // New field

    $stmt = $pdo->prepare("UPDATE events SET name=:name, description=:description, date=:date, time=:time, organizers_details=:organizers_details, event_location=:location WHERE event_id=:event_id");
    $stmt->execute([
        ':name' => $name,
        ':description' => $description,
        ':date' => $date,
        ':time' => $time,
        ':organizers_details' => $organizers_details,
        ':location' => $location, // New field
        ':event_id' => $eventId
    ]);

    header("Location: edit.php"); // Redirect back to the events list
    exit;
}
?>
