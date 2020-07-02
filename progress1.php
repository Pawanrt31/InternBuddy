
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="dash_board.css">
  <link rel="stylesheet" href="bootstrap.css">



</head>
<body style="background-color: lightyellow;">
  <nav class="navbar navbar-expand-lg navbar-light bg-info" style="margin-bottom:20px;">
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
            <a class="nav-link" href="progress1.php">Progress <span class="sr-only">(current)</span></a>
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

    <!-- <div class="container"> -->

    <!-- <div id="chartContainer" style="height: 300px; max-width: 300px; color:red; border:1px solid black;"> -->
    <?php
    $db = mysqli_connect('localhost','root','','dash');
    if(!$db)
    {
      echo "Connected";
    }
    $sql="select progress from allottask";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result)>0)
    {
      while($row=mysqli_fetch_assoc($result))
      {
    ?>

    <br>

    <div class="progress border border-primary" style="margin-left:100px; margin-right:100px; height:30px;">

        <script type="text/javascript">

        </script>


        <div class="progress-bar" role="progressbar" style="width: <?php echo $row['progress'];?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $row['progress'];?></div>
    </div>

    <!-- </div> -->
    <?php
  }
}
?>



    <script type="text/javascript" src="jquery.canvas.min.js"></script>
    <script src="canvasjs.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script  src="bootstrap.js"></script>
</body>
</html>
