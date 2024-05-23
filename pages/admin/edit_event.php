<!DOCTYPE html> 
<html> 

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Event</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .navbar-header {
             display: flex;
             align-items: center; 
         }
     </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head> 

<body> 
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
          <img src="/grad-project/images/YU.png" width="30" height="30" class="d-inline-block align-top"> 
            <a href="adminHomepage.html"><span class="navbar-brand">YU Space</span></a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="/grad-project/pages/admin/Map/landingPage.php" class="navbar-brand"><i class="glyphicon glyphicon-map-marker"></i> Map </a></li>
            <li><a href="add_event.html" class="navbar-brand"><i class="glyphicon glyphicon-bullhorn"></i> Event Bulletin Board</a></li>
            <li><a href="download-pdf.html" class="navbar-brand"><i class="glyphicon glyphicon-education"></i> Mind-Map</a></li>
            <li><a href="course_description.html" class="navbar-brand"><i class="glyphicon glyphicon-book"></i> Course Description</a></li>
  
            <li><a href="/grad-project/login.html" class="navbar-brand"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
          </ul>
        </div>
      </nav>
<?php
include '../include/db.php'; 

if (isset($_GET['event_id'])) {
    $eventId = $_GET['event_id'];
    $stmt = $pdo->prepare("SELECT * FROM events WHERE event_id = :event_id");
    $stmt->execute(['event_id' => $eventId]);
    $event = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($event) {
        echo "<div class='container'>";
        echo "<div class='col-sm-6'>";
        echo "<div class='panel panel-default border'>";
        echo "<div class='panel-heading'>";
        echo "<h3>Edit Event</h3>";
        echo "</div>";
        echo "<div class='panel-body'>";
        echo "<form method='post' action='update_event.php'>";
        echo "<input type='hidden' name='event_id' value='". $event['event_id']. "'>";
        echo "<div class='form-group border'>";
        echo "<label for='name'>Name:</label>";
        echo "<input type='text' class='form-control' id='name' name='name' value='". htmlspecialchars($event['name']). "'>";
        echo "</div>";
        echo "<div class='form-group border'>";
        echo "<label for='description'>Description:</label>";
        echo "<textarea class='form-control' id='description' name='description'>". htmlspecialchars($event['description']). "</textarea>";
        echo "</div>";
        echo "<div class='form-group border'>";
        echo "<label for='date'>Date:</label>";
        echo "<input type='date' class='form-control' id='date' name='date' value='". htmlspecialchars($event['date']). "'>";
        echo "</div>";
        echo "<div class='form-group border'>";
        echo "<label for='time'>Time:</label>";
        echo "<input type='time' class='form-control' id='time' name='time' value='". htmlspecialchars($event['time']). "'>";
        echo "</div>";
        echo "<div class='form-group border'>";
        echo "<label for='organizers_details'>Organizer Details:</label>";
        echo "<textarea class='form-control' id='organizers_details' name='organizers_details'>". htmlspecialchars($event['organizers_details']). "</textarea>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='location'>Location:</label>";
        echo "<input type='text' class='form-control' id='location' name='location' value='". htmlspecialchars($event['event_location']). "'>";
        echo "</div>";
        echo "<button type='submit' class='btn btn-primary'>Update Event</button>";
        echo "</form>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "Event not found.";
    }
}
?>
</body>
</html>