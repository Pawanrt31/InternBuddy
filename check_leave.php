<?php
  session_start();
  $username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Check your leave status</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="dash_board.css">

  </head>
  <body style="background-color: lightyellow;">
    <!-- <h1>hi</h1> -->
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




    <div class="container">
      <div class="card rounded" style="width: 70rem;">
          <!-- <img src="Task.png" class="card-img-top" alt="..."> -->
          <div class="card-body">
            <h5 class="card-title">Leave Applications</h5>


            <!-- progress -->
            <!-- <div class="progress border border-primary">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div> -->


            <br>
            <p class="card-text">The status of all leave applications.</p>


            <!-- <a href="alloted_task.html" class="btn btn-primary d-flex justify-content-center">Alloted_Task</a> -->
            <!-- <h6 class="display-6">Progress</h6> -->



            <table class="table table-striped table-dark">
              <thead>
                <tr>
                  <th scope="col">Date(Y-M-D)</th>
                  <th scope="col">Username</th>
                  <th scope="col">Subject</th>
                  <th scope="col">Description</th>
                  <th scope="col">No of days</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>

              <?php
              $db = mysqli_connect('localhost','root','','dash');
              if(!$db)
              {
                echo "Not connected";
              }
              $sqlq="select fromdate,username,subject,description,days,status from leaves where username='$username'";
              $resultt=mysqli_query($db,$sqlq);
              if(mysqli_num_rows($resultt)>0)
              {
                while($row=mysqli_fetch_assoc($resultt))
                {
              ?>

              <tbody>
                <tr>
                  <td><?php echo $row["fromdate"];?></td>
                  <td><?php $username=$row["username"];
                            echo $username; ?></td>
                  <td><?php echo $row["subject"];?></td>
                  <td><?php echo $row["description"];?></td>
                  <td><?php echo $row["days"];?></td>
                  <td><?php echo $row["status"];?></td>
                </tr>
              </tbody>
              <?php

              }

            }
            ?>
            </table>


          </div>
        </div>
    </div>


    <script src="jquery-3.5.1.min.js"></script>
    <script  src="bootstrap.js"></script>
  </body>
</html>
