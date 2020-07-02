<?php
  session_start();
  $db = mysqli_connect('localhost','root','','dash');
  if(!$db)
  {
    echo "Not connected";
  }
 ?>

 <!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="dash_board.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="jquery.min.js"></script>
    <script src="canvasjs.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $.getJSON("demo.php", function (result) {

                var chart = new CanvasJS.Chart("chartContainer", {
                    data: [
                        {
							                   type: "doughnut",
                            dataPoints: result
                        }
                    ]
                });

                chart.render();
            });
        });
    </script>
</head>
<body style="background-color: lightyellow;">
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <a class="navbar-brand" href="#">ADMIN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="admin_dash.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Chart.php">Progress <span class="sr-only">(current)</span></a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li> -->
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle" src="user.jpeg" alt="user">
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                <a class="dropdown-item" href="interns_login.php">Logout</a>

              </div>
            </li>
          </ul>

        </div>

        <!-- <a href="#"><img class="rounded-circle" src="user.jpeg" alt="user"></a> -->
      </div>
  </nav>
  <form method="post">
  <div class="container">
    <div class="row d-flex justify-content-center" style="margin-bottom:30px;">
      <div class="col-md-5">

        <label style="font-weight:900;">Select the intern :</label>
        <select class="btn btn-outline-info btn-lg" name="Name" style="background-color:black;">
          <option value="None">Select</option>
          <option value="Pawan">Pawan</option>
          <option value="Abhishek">Abhishek</option>
          <option value="Niteesh">Niteesh</option>
          <option value="Ankit">Ankit</option>
        </select>
        <input type="submit" name="submiti" value="submit" class="btn btn-success btn-lg" style="margin-left:30px;">
      </div>

      </div>
      <?php
        if(isset($_POST["submiti"]))
        {
          $name = mysqli_real_escape_string($db,$_POST["Name"]);
          if($name!='None')
          {
          $_SESSION["name"] = $name;
          }
        }
      ?>


      <div class="d-flex justify-content-center" id="chartContainer" style="width: 500px; height: 380px; color: lightyellow;"></div>

  </div>
  </form>

</body>
</html>
