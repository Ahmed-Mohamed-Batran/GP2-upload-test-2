<!DOCTYPE html> 
<html> 

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
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

    // Fetch all events
    $stmt = $pdo->query('SELECT * FROM events');
    $events = $stmt->fetchAll();

    echo "<div class='container'>";
    echo "<h2>Events</h2>";
    echo "<div class='list-group'>";
    foreach ($events as $event) {
        echo "<a href='edit_event.php?event_id=". $event['event_id']. "' class='list-group-item'>";
        echo "<h4 class='list-group-item-heading'><i class='glyphicon glyphicon-bullhorn'></i>". htmlspecialchars($event['name']). "</h4>";
        echo "<p class='list-group-item-text'>Description: ". htmlspecialchars($event['description']). "</p>";
        echo "<h5><i class='glyphicon glyphicon-calendar'></i>". htmlspecialchars($event['date']). "</h5>";
        echo "<h5><i class='glyphicon glyphicon-time'></i>". htmlspecialchars($event['time']). "</h5>";
        echo "<p class='list-group-item-text'>Organizer: ". htmlspecialchars($event['organizers_details']). "</p>";
        echo "<p class='list-group-item-text'><i class='glyphicon glyphicon-map-marker'></i> ". htmlspecialchars($event['event_location']). "</p>";
        echo "<a href='delete_event.php?event_id=". $event['event_id']. "' class='list-group-item  list-group-item-danger btn btn-danger'>Delete</a>";
        echo "<a href='edit_event.php?event_id=". $event['event_id']. "' class='list-group-item list-group-item-warning btn btn-warning'>Edit</a>";
        echo "</a>";
    }
        echo "</div>";
        echo "</div>";
    
   ?>
</body> 

</html> 
