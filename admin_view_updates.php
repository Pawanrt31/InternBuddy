<?php
  session_start();
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
    <title>allot_task</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="dash_board.css">
    <link rel="stylesheet" href="admin_view_updates.css">
	
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
        <!-- <h3>Select the intern :</h3> -->
        <div class="row">
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
          <!-- </form> -->
          </div>

          <br>

          <div class="row">
            <div class="col-md-5">

              <label style="font-weight:900;">Assigned tasks: </label>
              <select class="btn btn-outline-info btn-lg" name="Tasks" style="background-color:black;">
                <option value="None">Select</option>
                <?php
                  $names=mysqli_real_escape_string($db,$_POST["Name"]);
                  $query = "select work from allottask where name='$names'";
                  $result=mysqli_query($db,$query);
                  if(mysqli_num_rows($result)>0)
                  {
                    while($row=mysqli_fetch_assoc($result))
                    {
                 ?>
                <option value="<?php echo $row['work']; ?>"><?php echo $row['work']; ?></option>
                <!-- <option value="Abhishek">Abhishek</option>
                <option value="Niteesh">Niteesh</option>
                <option value="Ankit">Ankit</option> -->
                <?php
              }
            }
            ?>
              </select>

              <!-- <input type="submit" name="submiti" value="submit" class="btn btn-success btn-lg" style="margin-left:30px;"> -->
            </div>
            <!-- </form> -->
            </div>

          <br>

          <div class="row">
            <div class="col-md-7">
              <label style="font-weight:900;">Assign the progress(max 100) :</label>
              <!-- <select class="btn btn-outline-info btn-lg" name="" >
                <option value="">Select</option>
                <option value="">Pawan</option>
                <option value="">Abhishek</option>
                <option value="">Niteesh</option>
                <option value="">Ankit</option>
              </select> -->
              <!-- <form method="post"> -->
                <input type="number" id="max100" name="prog" value="" class="rounded" style="padding: 10px; color:aqua; background-color:black;">
                <input type="submit" name="progsubmit" value="submit" class="btn btn-success btn-lg" style="margin-left:30px;">
          </div>

          <!-- <div class="col-md-2">
            4
          </div> -->
        </div>
        <br>
        <br>
        <h2>Information will be displayed below:</h2><hr>
        <!-- <table>

        </table> -->


        <div class="card rounded" style="width: 70rem;">
            <!-- <img src="Task.png" class="card-img-top" alt="..."> -->
            <div class="card-body">
              <!-- <h5 class="card-title">Alloted_Task</h5> -->


              <!-- progress -->
              <!-- <div class="progress border border-primary">
                  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
              </div> -->


              <br>
              <p class="card-text">Day to day status viewing and updation.</p>

              <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">Date(Y-M-D)</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Present/Absent</th>
                  </tr>
                </thead>


              <?php

              if(isset($_POST["submiti"]))
              {
                $name=mysqli_real_escape_string($db,$_POST["Name"]);
                $sql="select date,name,description,pa from dailyupdate where name='$name'";
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
                    <td><?php echo $row["date"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["description"]; ?></td>
                    <td><?php echo $row["pa"]; ?></td>
                  </tr>
                </tbody>
              <?php
            }
          }
        }

        // $nameses = $_SESSION['nameses'];
        if(isset($_POST["progsubmit"]))
        {
          $name=mysqli_real_escape_string($db,$_POST["Name"]);
          $works=mysqli_real_escape_string($db,$_POST["Tasks"]);
          $progress = mysqli_real_escape_string($db,$_POST["prog"]);
          $seql = "update allottask set progress='$progress' where name='$name' and work='$works'";
          if(mysqli_query($db,$seql))
          {
            echo "Updated";
          }
          else {
            echo "Not done";
          }
        }

        ?>
      </table>

            </div>
          </div>
      </div>
    </form>

<!-- progreebar -->




    <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>

    <script type="text/javascript" src="jquery.canvas.min.js"></script>
    <script src="canvasjs.min.js"></script>


    <script src="jquery-3.5.1.min.js"></script>
    <script  src="bootstrap.js"></script>
  </body>
</html>
