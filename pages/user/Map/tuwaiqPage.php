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
  
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#resModal">
  Show Restaurants
</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#classOrientationModal">
  Show Classroom Orientation
</button>

<div class="container">
<div class="row">
    <div class="col-sm-8" id="imgDiv">
      <img id="tfloorPicDiv" src="/grad-project/pages/user/Map/images/tuwaiqGround.png" width="700" height="500">
    </div>
    <div class="col-sm-3" style="">
      <div class="wrapper">
        <div id="tfloor3" class="tfloor"><p id="tflr3" class="flr">Floor 3</p></div>
        <div id="tfloor2" class="tfloor"><p id="tflr2" class="flr">Floor 2</p></div>
        <div id="tfloor1" class="tfloor"><p id="tflr1" class="flr">Floor 1</p></div>
        <div id="tfloor4" class="tfloor"><p id="tflr4" class="flr">Ground Floor</p></div>
      </div>
    </div>
    <div class="col-sm-1" style="">
      <button id="backBtn" onClick="goBack();">Back to Home</button>
    </div>
  </div>
</div>

<div class="modal fade" id="resModal" tabindex="-1" role="dialog" aria-labelledby="resModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="resModalLabel">Restaurants</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Restaurant Name</th>
              <th scope="col">Location</th>
              <th scope="col">Menu Link</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Key Cafe</td>
              <td>Ground Floor</td>
              <td><a href="https://www.key-cafe.com/menu" target="_blank">View Menu</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="classOrientationModal" tabindex="-1" role="dialog" aria-labelledby="classOrientationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="classOrientationModalLabel">Classroom Orientation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a href="https://tc-gdscyu.netlify.app" target="_blank">Classroom Orientation</a> <-- Credits for this tool goes to: Industrial Engineering Club at Al Yamamah University, Google Developer Student Club at Al Yamamah University, and Al Yamamah University 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
<script src="/grad-project/pages/user/Map/js/function.js" type="text/javascript"></script>
</body>
</html>