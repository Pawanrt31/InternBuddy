<?php
 session_start();
 $username = $_SESSION['username'];



 // if(isset($_POST[""]))
 // {
 // $sql="select name,username,email,address,phone from users where username='$username'";
 // $result=mysqli_query($db,$sql);
 // if(mysqli_num_rows($result)>0)
 // {
 //   while($row=mysqli_fetch_assoc($result))
 //   {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>profile_update</title>
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

    <div class="container d-flex justify-content-center">

                <div class="card rounded border border-primary" style="width: 28rem;">
                    <img src="user.jpeg" class="card-img-top" alt="Image_here">
                    <div class="card-body">
                      <h5 class="card-title" style="text-align:center"><b>Profile Information</b></h5>
                      <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    </div>
                    <form method="post">
                      <!-- <ul class="list-group list-group-flush">

                        <li class="list-group-item"><pre><h5>Name     : <input type="text" name="" value=""></h5></pre></li>
                        <li class="list-group-item"><pre><h5>Username : </h5></pre></li>
                        <li class="list-group-item"><pre><h5>Password : <input type="text" name="" value=""></h5></pre></li>
                        <li class="list-group-item"><pre><h5>Confirm  : <input type="text" name="" value=""></h5></pre></li>
                        <li class="list-group-item"><pre><h5>E-mail   : <input type="email" name="" value=""></h5></pre></li>
                        <li class="list-group-item"><pre><h5>Address  : <input type="text" name="" value=""></h5></pre></li>
                        <li class="list-group-item"><pre><h5>Phone    : <input type="tel" name="" value=""></h5></pre></li>
                      </ul> -->

                      <label style="font-weight:900;">Select the parameter :</label>
                      <select class="btn btn-outline-info btn-lg" name="Param" style="background-color:black;">
                        <option value="None">Select</option>
                        <option value="Name" name="Names">Name</option>
                        <option value="Password" name="passwords">Password</option>
                        <option value="Email" name="emails">Email</option>
                        <option value="Address" name="addresss">Address</option>
                        <option value="Phone" name="phones">Phone</option>
                      </select>
                      <input type="submit" value="Select" name="choose"/><br>
                      <?php
                      $db = mysqli_connect('localhost','root','','dash');
                      if(!$db)
                      {
                       echo "Not connected";
                      }

                       if(isset($_POST["choose"]))
                      {
                        $param = mysqli_real_escape_string($db,$_POST["Param"]);
                        if($param=='Name')
                        {
                          echo "<label for='Name'>Name<input type='text' name='Nameii'/></label>";
                        }
                        else if($param=='Password')
                        {
                          echo "<label for='Password'>Password</label>:<input type='password' name='Passwordii'/>
                                <label for='Confirm Password'>Confirm Password</label>:<input type='password' name='Conpass'/>";
                        }
                        else if($param=='Email')
                        {
                          echo "<label for='Email'>Email</label>:<input type='email' name='Email'/>";
                        }
                        else if($param=='Address')
                        {
                          echo "<label for='Address'>Address</label>:<textarea rows='4' cols='40' name='Address'></textarea>";
                        }
                        else if($param=='Phone')
                        {
                          echo "<label for='Phone'>Phone</label>:<input type='tel' name='Phone'/>";
                        }
                      }

                      if(isset($_POST["Update"]))
                      {
                        // if($param=='Name')
                        // {
                          if(!empty($_POST['Nameii']))
                          {
                          $name=mysqli_real_escape_string($db,$_POST['Nameii']);
                          $sql="update users set name='$name' where username='$username'";
                          if(mysqli_query($db,$sql))
                          {
                            echo "<script>alert('Updated Name')</script>";
                          }
                          else {
                            echo "<script>alert('Not Updated Name')</script>";
                          }
                          }
                          else if(!empty($_POST['Passwordii'])&&(!empty($_POST['Conpass'])))
                          {
                            $password=mysqli_real_escape_string($db,$_POST['Passwordii']);
                            $conpassword=mysqli_real_escape_string($db,$_POST['Conpass']);
                            if($password==$conpassword)
                            {
                            $sql="update users set password='$password' where username='$username'";
                            if(mysqli_query($db,$sql))
                            {
                              echo "<script>alert('Updated Password')</script>";
                            }
                            else {
                              echo "<script>alert('Not Updated Password')</script>";
                            }
                            }
                            else {
                              echo "<script>alert('Password not matching with confirm password')</script>";
                            }
                        }
                        else if(!empty($_POST['Email']))
                        {
                          $email=mysqli_real_escape_string($db,$_POST['Email']);
                          $sql="update users set email='$email' where username='$username'";
                          if(mysqli_query($db,$sql))
                          {
                            echo "<script>alert('Updated Email')</script>";
                          }
                          else {
                            echo "<script>alert('Not Updated Email')</script>";
                          }
                        }
                        else if(!empty($_POST['Address']))
                        {
                          $address=mysqli_real_escape_string($db,$_POST['Address']);
                          $sql="update users set address='$address' where username='$username'";
                          if(mysqli_query($db,$sql))
                          {
                            echo "<script>alert('Updated Address')</script>";
                          }
                          else {
                            echo "<script>alert('Not Updated Address')</script>";
                          }
                        }
                        else if(!empty($_POST['Phone']))
                        {
                          $address=mysqli_real_escape_string($db,$_POST['Phone']);
                          $sql="update users set phone='$address' where username='$username'";
                          if(mysqli_query($db,$sql))
                          {
                            echo "<script>alert('Updated Phone number')</script>";
                          }
                          else {
                            echo "<script>alert('Not Updated Phone number')</script>";
                          }
                        }
                      }
                      //   else if($param=='Password')
                      //   {
                      //     echo "<label for='Password'>Password</label>:<input type='password' name='Password'/>
                      //           <label for='Confirm Password'>Confirm Password</label>:<input type='password' name='Conpass'/>";
                      //   }
                      //   else if($param=='Email')
                      //   {
                      //     echo "<label for='Email'>Email</label>:<input type='email' name='Email'/>";
                      //   }
                      //   else if($param=='Address')
                      //   {
                      //     echo "<label for='Address'>Address</label>:<textarea rows='4' cols='40' name='Address'></textarea>";
                      //   }
                      //   else if($param=='Phone')
                      //   {
                      //     echo "<label for='Phone'>Phone</label>:<input type='tel' name='Phone'/>";
                      //   }
                      // }
                      ?>
                      <div class="card-body" style="margin-left:15%;">
                        <!-- <button style="align:center"><a href="#" class="card-link btn btn-outline-danger">exit</a></button> -->
                        <a href="dash_board.php"><input type="button" class="card-link btn btn-danger btn-lg" value="exit"/></a>
                        <input type="submit" class="card-link btn btn-info btn-lg" style="margin-left:50px;" value="update" name="Update"/>

                        <!-- <a href="#" class="card-link">Another link</a> -->
                      </div>
                    </form>
                  </div>

    </div>

    <script src="jquery-3.5.1.min.js"></script>
    <script  src="bootstrap.js"></script>
  </body>
</html>
