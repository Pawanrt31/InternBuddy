<?php
session_start();
// $name = $_SESSION["Nameu"];
$username = $_SESSION['username'];

$db = mysqli_connect('localhost','root','','dash');
if(!$db)
{
  echo "Not connected";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Alloted_Task</title>
    <link rel="stylesheet" href="alloted_task.css">
    <link rel="stylesheet" href="bootstrap.css">
  </head>
  <body style="background-color: lightyellow;">
    <!-- <h2>Alloted_Task</h2> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info" style="margin-bottom:20px;">
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

      <div class="row">

        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col">Work</th>
              <th scope="col">Assigned Date</th>
              <th scope="col">Progress</th>
            </tr>
          </thead>


        <?php


          $sql="select work,datetask,progress from allottask where name='$username'";
          $result=mysqli_query($db,$sql);
          if(mysqli_num_rows($result)>0)
          {
            while($row=mysqli_fetch_assoc($result))
            {
        ?>

        <!-- <a href="alloted_task.html" class="btn btn-primary d-flex justify-content-center">Alloted_Task</a> -->
        <!-- <h6 class="display-6">Progress</h6> -->




          <tbody>
            <tr>
              <td><?php echo $row["work"]; ?></td>
              <td><?php echo $row["datetask"]; ?></td>
              <td><?php echo $row["progress"]; ?></td>
            </tr>
          </tbody>
          <?php
              }
            }
            ?>
        </table>

      </div>
      <!-- <div class="row">
        <div class="col-md-2">1</div>
        <div class="col-md-4">2</div>
        <div class="col-md-4">3</div>
      </div> -->

    </div>
    <script src="jquery-3.5.1.min.js"></script>
    <script  src="bootstrap.js"></script>
  </body>
</html>
