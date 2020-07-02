<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin_leave_check</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="dash_board.css">

  </head>
  <body style="background-color: lightyellow;">
    <!-- <h1>hi</h1> -->
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
            <p class="card-text">The list of all leave applications.</p>


            <!-- <a href="alloted_task.html" class="btn btn-primary d-flex justify-content-center">Alloted_Task</a> -->
            <!-- <h6 class="display-6">Progress</h6> -->
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
              </div>
            </form>

            <!--  -->
                <div class="container">
            <table class="table table-striped table-dark">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Date(Y-M-D)</th>
                  <th scope="col">Username</th>
                  <th scope="col">Subject</th>
                  <th scope="col">Description</th>
                  <th scope="col">No of days</th>
                  <th scope="col">Accept/Reject</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>

              <?php

              $db = mysqli_connect('localhost','root','','dash');
              if(!$db)
              {
                echo "Not connected";
              }
              if(isset($_POST["submiti"]))
              {
                $name = mysqli_real_escape_string($db,$_POST["Name"]);
                $_SESSION["nameleave"] = $name;
                $sqlq="select id,fromdate,username,subject,description,days,status from leaves where username='$name'";
                $resultt=mysqli_query($db,$sqlq);
                // $cnt=mysqli_num_rows($resultt);
                for($i=1;$i<=($row=mysqli_fetch_assoc($resultt));$i++)
                {
              // if(mysqli_num_rows($resultt)>0)
              // {
              //   while($row=mysqli_fetch_assoc($resultt))
              //   {
              ?>

              <tbody>

                <tr>

                  <td><?php echo $row["id"];?></td>
                  <td><?php echo $row["fromdate"];?></td>
                  <td><?php $username=$row["username"];
                            echo $username; ?></td>
                  <td><?php echo $row["subject"];?></td>
                  <td><?php echo $row["description"];?></td>
                  <td><?php echo $row["days"];?></td>
                  <td><form method="post"><input type="submit" class="btn btn-success" name="pt" value="Accept" style="margin-right:6px;"><input type="submit" class="btn btn-danger" name="Reject" value="Reject"></form></td>
                  <td><?php echo $row["status"];?></td>

                </tr>

                <?php
                        }
                      }
                $name = $_SESSION["nameleave"];
                if(isset($_POST["pt"]))
                 {

                  $sql="update leaves set status='yes' where username='$name'";
                  if(mysqli_query($db,$sql))
                  {
                   echo "<script>alert('Accepted')</script>";
                  }
                }
                 else if(isset($_POST["Reject"]))
                 {
                   $sql="update leaves set status='no' where username='$name'";
                   if(mysqli_query($db,$sql))
                   {
                   echo "<script>alert('Rejected')</script>";
                  }
                 }



                 ?>



              </tbody>
              <?php

              //}

            //}



              ?>
            </table>
            </div>
              <!-- </form> -->

          </div>
        </div>
        <p class="text-center">After every accept/reject please reload.....</p>
        <a href="admin_leave_check.php" class="d-flex justify-content-center" style="margin-top:10px;">
          <input type="button" name="" value="reload" class="btn btn-success">
        </a>
    </div>


    <script src="jquery-3.5.1.min.js"></script>
    <script  src="bootstrap.js"></script>
  </body>
</html>
