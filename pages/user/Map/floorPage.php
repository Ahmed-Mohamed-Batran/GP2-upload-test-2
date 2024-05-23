<!DOCTYPE html>
<html lang="en">
<head>
  <title>Map</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/grad-project/pages/user/Map/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php include 'menu.php';?>
  
  
<div class="container">
<div class="row">
    <div class="col-sm-8" id="imgDiv">
      <img id="floorPicDiv" src="/grad-project/pages/user/Map/images/mainCampusFirstFloor.png" width="500" height="500">
    </div>
    <div class="col-sm-3" style="">
      <div class="wrapper">
        <div id="floor3" class="floor"><p id="flr3" class="flr">Floor 3</p></div>
        <div id="floor2" class="floor"><p id="flr2" class="flr">Floor 2</p></div>
        <div id="floor1" class="floor"><p id="flr1" class="flr">Floor 1</p></div>
        <div id="floor4" class="floor"><p id="flr4" class="flr">Ground Floor</p></div>
      </div>
    </div>
    <div class="col-sm-1" style="">
      <button id="backBtn" onClick="goBack();">Back to Home</button>
    </div>
      
  </div>
</div>
<script src="/grad-project/pages/user/Map/js/function.js" type="text/javascript"></script>
</body>
</html>