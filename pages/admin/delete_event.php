<?php
include '../include/db.php'; 

if (isset($_GET['event_id'])) {
    $eventId = $_GET['event_id'];
    $stmt = $pdo->prepare("DELETE FROM events WHERE event_id = :event_id");
    $stmt->execute(['event_id' => $eventId]);
    header("Location: edit.php"); // Redirect back to the events list
    exit;
}
?>
