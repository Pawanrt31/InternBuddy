<?php
$db = mysqli_connect('localhost','root','','dash');
if(!$db)
{
  echo "Not connected";
}
if(isset($_POST["Submit"]))
{
  $name= mysqli_real_escape_string($db,$_POST["Name"]);
  $username=mysqli_real_escape_string($db,$_POST["user"]);
  $password=mysqli_real_escape_string($db,$_POST["pass"]);
  $conpassword=mysqli_real_escape_string($db,$_POST["con_pass"]);
  $email=mysqli_real_escape_string($db,$_POST["Email"]);
  $address=mysqli_real_escape_string($db,$_POST["Address"]);
  $phone=mysqli_real_escape_string($db,$_POST["phone"]);
  if($password==$conpassword)
  {
    $sql = "insert into users(name,username,password,email,address,phone,approval) values('$name','$username','$password','$email','$address','$phone','no')";
    if(mysqli_query($db,$sql))
    {
      // echo "<script>alert('Task alloted!!')</script>";
      header('location:interns_login.php');
      exit();
    }
    else {
      echo "<script>alert('Cannot register!!')</script>";
    }
  }
}
?>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="register.css">
	<!-- <script type="text/javascript" src="interns_login.js"></script> -->
</head>
<body>
	<div class="container justify-content-center">
		<div class="row">
			<div class="col-md-6 rounded">
				<div class="card" style="width: 40rem;">
				  <!-- <img src="welcome.jpg" class="card-img-top" alt="Img_here"> -->
				  <div class="card-body">
				    <h5 class="card-title text-center">REGISTER</h5>
				  <!--   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
				  	<hr>

					  	<form method="post">
								<div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" class="form-control border border-primary" id="user" name="Name" style="margin-bottom:15px;">
						    <label for="user">User name</label>
						    <input type="text" class="form-control border border-primary" id="user" name="user">
							</div>
							<div class="form-group">
						    <label for="password">Password</label>
						    <input type="password" class="form-control border border-primary" id="password" name="pass" style="margin-bottom:15px;">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control border border-primary" id="password" name="con_pass">
						    <small id="emailHelp" class="form-text text-muted">We'll never share your user_name & password with anyone else.</small>
                <label for="Name">Email</label>
                <input type="email" class="form-control border border-primary" id="password" name="Email" style="margin-bottom:15px;">
                <label for="">Address</label>
                <textarea class="form-control border border-primary"  name="Address" style="margin-bottom:15px;" rows="5" cols="20"></textarea>
                <label for="">Phone.no</label>
                <input type="tel" class="form-control border border-primary" name="phone" style="margin-bottom:15px;">
							</div>
						  <div class="form-group form-check d-flex justify-content-around" style="margin-right:40px;">
						    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
						    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
						  	<!-- <input class="btn btn-lg btn-success" type="submit" value="LOGIN" id="submit" name="logins" /> -->
								<!-- <input class="btn btn-lg btn-secondary" type="button" value="ADMIN"/> -->
								<!-- <input type="reset" value="RESET" class="btn btn-lg btn-danger" /> -->
						    <input type="submit" value="submit" class="btn btn-lg btn-info" name="Submit" />
                <a href="interns_login.php">
                  <input type="button" value="cancel" class="btn btn-lg btn-danger" style=""/>
                </a>

						  	<!-- <a href="#" class="btn btn-primary">cancel</a> -->
						    <!-- <a href="#" class="btn btn-primary">login</a> -->
						  </div>
						</form>
				  </div>
					<!-- <h6 class="text-center"><a href="admin_login.php" class="text-primary"><b>ADMIN</b></a></h6> -->
				</div>
			</div>
		</div>
	</div>
</body>
</html>
