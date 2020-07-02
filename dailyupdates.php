<?php
  session_start();
  $date='';
  $name='';
  $desc='';
  $pab='';
  $db = mysqli_connect('localhost','root','','dash');
  if(!$db){
    echo "Not connected";
  }
  if(isset($_POST["save"]))
  {
    // $date=mysqli_real_escape_string($db,$_POST["datea"]);
    $date=Date('Y-m-d');
    $name=mysqli_real_escape_string($db,$_POST["name"]);
    $desc=mysqli_real_escape_string($db,$_POST["description"]);
    $pab=mysqli_real_escape_string($db,$_POST["pa"]);
    if($pab=='Yes')
    {
    $sql="insert into dailyupdate(date,name,description,pa) values('$date','$name','$desc','$pab')";
    if(mysqli_query($db,$sql))
    {
      // echo "<script>alert('Inserted')</script>";
      header('location:dailyupdates.php');
      exit();
    }
    else {
      echo "<script>alert('Not Inserted')</script>";
    }
    }
    else {
      $sql="insert into dailyupdate(date,name,description,pa) values('$date','$name','$desc','$pab')";
      if(mysqli_query($db,$sql))
      {
        // echo "<script>alert('Inserted')</script>";
      }
      else {
        echo "<script>alert('Not Inserted')</script>";
      }
    }
  }
?><!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Daily_updates</title>
    <link rel="stylesheet" href="dailyupdates.css">
    <link rel="stylesheet" href="bootstrap.css">

  </head>
  <body style="background-color: lightyellow;">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="#">INTERN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="dash_board.php">Home <span class="sr-only">(current)</span></a>
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

    <div class="row" style="margin-top:10px">
      <div class="col-md-1"></div>
      <div class="col-md-2 border border-danger rounded">
        <h3>Date</h3>
        <!-- <hr> -->
      </div>
      <div class="col-md-3 border border-danger rounded">
        <h3>Name</h3>
        <!-- <hr> -->
      </div>
      <div class="col-md-4 border border-danger rounded">
        <h3>Description</h3>
        <!-- <hr> -->
      </div>
      <div class="col-md-1 border border-danger rounded">
        <h3>P/A</h3>
        <!-- <hr> -->
      </div>
      <div class="col-md-1"></div>
    </div>


<!-- form -->
  <form method="post">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-2 "  style="padding:10px 10px 10px 10px;background-color:aqua;">
        <h5><?php echo Date('d-m-Y'); ?></h5>
        <!-- <hr> -->
        <!-- <input type="date" name="datea" value=""> -->
      </div>
      <div class="col-md-3 " style="padding:10px 10px 10px 10px;background-color:aqua;">
        <!-- Name -->
        <input type="text" name="name" value="" size="30" required>
        <!-- <hr> -->
      </div>
      <div class="col-md-4 " style="padding:10px 10px 10px 10px;background-color:aqua;">
        <!-- Description -->
        <input type="text" name="description" value="" size="60" required>
        <!-- <hr> -->
      </div>
      <div class="col-md-1 " style="padding:10px 10px 10px 10px;background-color:aqua;">
        Present<input type="radio" name="pa" value="Yes" required>
        Absent<input type="radio" name="pa" value="No">
        <!-- <hr> -->
      </div>
      <div class="col-md-1"></div>
    </div>
    <input style="margin-left:47%; margin-top:20px;"  class="btn btn-success btn-lg" type="submit" name="save"/>
  </form>

    <script src="jquery-3.5.1.min.js"></script>
    <script  src="bootstrap.js"></script>
  </body>
</html>
