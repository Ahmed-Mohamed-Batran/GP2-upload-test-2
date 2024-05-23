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

<div class="container">
  <div class="row">
    <div class="col-sm-8" id="imgDiv">
      <img src="/grad-project/pages/user/Map/images/universityTop.png" width="100%" height="50%">
    </div>
    <div class="col-sm-4" style="">
      <div class="wrapper">
        <div id="inner1"><p id="main" onClick="window.location = '/grad-project/pages/user/Map/floorPage.php'">Main Building</p></div>
        <div id="inner2"><p id="tuwaiq" onClick="window.location = '/grad-project/pages/user/Map/tuwaiqPage.php'">Tuwaiq</p></div>
      </div>
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
              <td>Tuwaiq: Ground Floor</td>
              <td><a href="https://www.key-cafe.com/menu" target="_blank">View Menu</a></td>
            </tr>

            <tr>
              <th scope="row">2</th>
              <td>AL Mamlaka</td>
              <td>Najid: Ground Floor</td>
              <td><a href="https://almamlakasocialdining.com/vendors/" target="_blank">View Menu</a></td>
            </tr>
            
            <tr>
              <th scope="row">3</th>
              <td>Costa</td>
              <td>Najid: Ground Floor</td>
              <td><a href="https://www.costaksa.com/en/menu" target="_blank">View Menu</a></td>
            </tr>

            <tr>
              <th scope="row">4</th>
              <td>Archi</td>
              <td>Najid: Ground Floor</td>
              <td><a href="https://archi-sa.com/menu.html" target="_blank">View Menu</a></td>
            </tr>

            <tr>
              <th scope="row">5</th>
              <td>Dunkin</td>
              <td>Library: Ground Floor</td>
              <td><a href="https://www.dunkindonuts.com/en/menu" target="_blank">View Menu</a></td>
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
<script src="/grad-project/pages/user/Map/js/function.js" type="text/javascript"></script>

</body>
</html>