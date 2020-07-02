<?php

$db = mysqli_connect('localhost','root','','dash');
if(!$db)
{
  echo "Not connected";
}
if(isset($_POST["Submit"]))
{
  $name= mysqli_real_escape_string($db,$_POST["Name"]);
  $work = mysqli_real_escape_string($db,$_POST["work"]);
  $datet= Date('Y-m-d');
  $sql = "insert into allottask(name,work,datetask) values('$name','$work','$datet')";
  if(mysqli_query($db,$sql))
  {
    // echo "<script>alert('Task alloted!!')</script>";
    header('location:admin_allot_task.php');
    exit();
  }
  else {
    echo "<script>alert('Task not alloted!!')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin_allot_task</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="dash_board.css">
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
                  <a class="dropdown-item" href="profile.php">Profile</a>
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

        <div class="row d-flex justify-content-start" style="margin-bottom:30px;">
          <div class="col-md-6">
            <label style="font-weight:900;">Select the intern :</label>
            <select class="btn btn-info btn-lg" name="Name" style="" required>
              <option value="">Select</option>
              <option value="Pawan">Pawan</option>
              <option value="Abhishek">Abhishek</option>
              <option value="Niteesh">Niteesh</option>
              <option value="Ankit">Ankit</option>
            </select>
          <!-- <input type="submit" name="" value="submit" class="btn btn-success btn-lg" style="margin-left:30px;"> -->
          </div>
        </div>

        <div class="row d-flex justify-content-start">
            <div class="col-md-10">

        <!-- <select class="btn btn-outline-info btn-lg" name="" >
          <option value="">Select</option>
          <option value="">Pawan</option>
          <option value="">Abhishek</option>
          <option value="">Niteesh</option>
          <option value="">Ankit</option>
        </select> -->


              <label style="font-weight:900;">Allot the work :</label>
              <input type="text" name="work" value="" size="50" class="rounded" required style="padding: 10px; color:;">

              <br><br>


              <label style="font-weight:900;">Assigned Date :<?php echo Date('d-m-Y');  ?></label>
              <br>
              <input type="submit" name="Submit" value="submit" class="btn btn-success btn-lg" style="margin-left:0px; margin-top:20px;">


            </div>
          </div>
        </div>
      </form>

      <script src="jquery-3.5.1.min.js"></script>
      <script  src="bootstrap.js"></script>

  </body>

</html>
