<?php
session_start();
$username = $_SESSION['username'];
$db = mysqli_connect('localhost','root','','dash');
if(!$db)
{
  echo "Not connected";
}
$sql = "select round(avg(progress)) as Average from allottask where name='$username'";
$result = mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result))
{
?>

<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="dash_board.css">
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
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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

        <div class="container d-flex justify-content-around">
            <div class="card rounded" style="width: 18rem;">
                <img src="Task.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Alloted_Task</h5>
                  <div class="progress border border-primary">
                      <div class="progress-bar" role="progressbar" style="width:<?php echo $row['Average']; ?>%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><?php echo $row["Average"]; } ?>%</div>
                  </div>
                  <br>
                  <p class="card-text">The list of all the tasks alloted along with a list of previous tasks.</p>
                  <a href="alloted_task.php" class="btn btn-primary d-flex justify-content-center">Alloted_Task</a>
                  <!-- <h6 class="display-6">Progress</h6> -->
                </div>
              </div>

              <div class="card rounded" style="width: 18rem;">
                <img src="Update.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Status Updates</h5>
                  <p style="margin-bottom:30px;" class="card-text">Insight of the day to day status regarding attendance of the intern.</p>
                  <a href="dailyupdates.php" class="btn btn-primary d-flex justify-content-center">Daily_updates</a>
                </div>
              </div>

              <div class="card rounded" style="width: 18rem;">
                <img src="Leave.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Leave Application</h5>
                  <p style="margin-bottom:50px;" class="card-text">Quick and easy way to submit leave application.</p>
                  <a href="leave.php" class="btn btn-primary d-flex justify-content-center">Leave</a>
                </div>
              </div>
        </div>





        <script src="jquery-3.5.1.min.js"></script>
        <script  src="bootstrap.js"></script>
    </body>
</html>
