<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>new_joinings</title>
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
      <div class="container">
        <form method="post">
          <h2>Information about new registers:
            <input type="submit" class="btn btn-primary" name="New_users" value="New registers">
            <input type="submit" class="btn btn-primary" name="All_users" value="All users">
          </h2>
        </form>
        <hr style="background-color:black;">
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
              <!-- <p class="card-text">Day to day status viewing and updation.</p> -->


              <!-- <a href="alloted_task.html" class="btn btn-primary d-flex justify-content-center">Alloted_Task</a> -->
              <!-- <h6 class="display-6">Progress</h6> -->



              <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Approval</th>
                  </tr>
                </thead>

                <?php
                $db = mysqli_connect('localhost','root','','dash');
                if(!$db)
                {
                  echo "Not connected";
                }
                if(isset($_POST['New_users']))
                {
                  $sqlq="select name,username,email,address,phone,approval from users where approval='no'";
                  $resultt=mysqli_query($db,$sqlq);
                  if(mysqli_num_rows($resultt)>0)
                  {
                    while($row=mysqli_fetch_assoc($resultt))
                    {
                  ?>

                  <tbody>
                    <tr>
                      <td><?php echo $row["name"]; ?></td>
                      <td><?php echo $row["username"]; ?></td>
                      <td><?php echo $row["email"]; ?></td>
                      <td><?php echo $row["address"]; ?></td>
                      <td><?php echo $row["phone"]; ?></td>
                      <td>
                        <form method="post">
                          <input type="submit" class="btn btn-success" style="margin-left:10px;" value="yes" name="approve"/>
                          <input type="submit" class="btn btn-danger" style="margin-left:10px;" value="no" name="disapprove"/>
                        </form>
                      </td>
                    </tr>
                  </tbody>

                  <?php
                      }
                    }

                  ?>
                </table>
                <?php
              } else if(isset($_POST['All_users'])){
                  $sql="select name,username,email,address,phone,approval from users";
                  $result=mysqli_query($db,$sql);
                  if(mysqli_num_rows($result)>0)
                  {
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>

                <tbody>
                  <tr>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                    <td><?php echo $row["approval"]; ?></td>
                  </tr>
                </tbody>

                <?php
                    }
                  }
                }
                if(isset($_POST['approve']))
                {
                  $sql="update users set approval='yes' where approval='no'";
                  if(mysqli_query($db,$sql))
                  {
                    echo "<script>alert('Approved')</script>";
                  }
                  else {
                    echo "<script>alert('Cannot Approve')</script>";
                  }
                }
                else if(isset($_POST['disapprove'])){
                  $sqle="delete from users where approval='no'";
                  if(mysqli_query($db,$sqle))
                  {
                    echo "<script>alert('Not Approved')</script>";
                  }
                }
                ?>
              </table>
            </div>
          </div>
      </div>
    </form>
    <script src="jquery-3.5.1.min.js"></script>
    <script  src="bootstrap.js"></script>
  </body>
</html>
