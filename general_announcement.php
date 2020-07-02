<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "solid";

if(isset($_POST["submit_file"])){
$selected_username = $_COOKIE["user_first_name"];
$users_last_name = $_COOKIE["users_last_name"];
move_uploaded_file($_FILES["file"]["tmp_name"],"../Profile_Pictures/".$_FILES["file"]["name"]);
$connection_String = mysqli_connect($host,$user,$pass,$database);
$myfiles = $_FILES["file"]["name"];
$update_profile_query = "UPDATE users_table SET Profile_Picture = '$myfiles' WHERE user_fname = '$selected_username'AND user_lname ='$users_last_name' ";
$execute_update_profile_query = mysqli_query($connection_String,$update_profile_query);

}

 ?>
 
 <!DOCTYPE html>
<html>
<head>
	<title>demo</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<!--<link rel="stylesheet" type="text/css" href="tick.css">-->
	<script type="text/javascript" src="jquery-3.5.1.js"></script>
    <script src="zingchart.min.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<!--<link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="css/bootstrap-select.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet" rel="stylesheet"/> -->
    <link href="general_announcement.css" media="all" rel="stylesheet"/>


     <!--<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/jquery.yacal.min.js"></script> -->
	<style type="text/css">
		body{
			padding-top: 70px;
			height: 90%;
			margin: auto 20px;
			background: rgb(208,120,158);
			background: radial-gradient(circle, rgba(208,120,158,0.8603641285615808) 0%, rgba(221,233,148,0.8435574058725053) 100%);   
		}


		.sizeInc{
			box-shadow: 0 1px 2px rgba(0,0,0,0.15);
  			transition: box-shadow 0.3s ease-in-out;
		}

		.sizeInc:hover{
			box-shadow: 10px 10px 30px rgba(0 ,0 ,0 ,0.9);
		}

		#sidenav{
 			background: rgb(34,193,195);
			background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(168,20,208,1) 72%);  
		}

		#sidenavcontent{
			line-height: 40px;
		}

		li{
			height: 40px;
			line-height: 40px;
			color: white;
		}

		li:hover{
			color: red;
			opacity: 0.9;
		}

		#navbar{
			margin-bottom: 20px; 
			background: rgb(148,2,78);
			background: radial-gradient(circle, rgba(148,2,78,0.6306722518108806) 0%, rgba(252,186,70,1) 100%); 
		}


		.nav-item a{
			font-weight: bold; 
		}


		#logo{
			font-weight: 700;
			color: black;
		}

		.card{
			/*box-shadow: 2px 2px #FF99CC;*/
			background: rgb(32,235,198);
			background: linear-gradient(0deg, rgba(32,235,198,1) 0%, rgba(206,175,214,1) 72%); 
			margin-bottom: 20px;
		}

		.chart--container{
          	height: 100%;
          	width: 100%;
          	min-height: 150px;
        }

        .modal-content{
        	/*padding-left: 15px;*/
        	margin-top: 10px;
        	padding-top: 20px;
        	background: rgb(148,2,78);
			background: radial-gradient(circle, rgba(148,2,78,0.6306722518108806) 0%, rgba(252,186,70,1) 100%);
        }

        hr{
        	background-color: red;
        }

        .completed{
        	color: gray;
        	text-decoration: line-through;
        }


	</style>
</head>
<body>
	<nav id="navbar" class="navbar navbar-expand-lg navbar-light rounded fixed-top">
	  <a class="navbar-brand" href="#" id="logo" >@dmin d@shbo@rd</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!-- 	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link text-light" href="#">Home<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link text-light" href="#">Link</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Dropdown
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
	      </li>
	    </ul> -->
<!-- 	    <form class="form-inline my-2 my-lg-0" style="float: right;">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn rounded btn-success my-2 my-sm-0" type="submit">Search</button>
	    </form> -->
	  </div>
	</nav>













	<div class="row">
		<!-- side nav bar -->
		<div class="col-md-2" style="">
			<input type="button" class="btn-success rounded" name="" id="btn_sidenav" value="sidenav"><hr style="background-color: gray;">
			<div class="card sizeInc"  id="sidenav" style="width: 100%; height: 100%;">
			  <div class="card-body">
					<h5 class="card-title text-light">Side nav</h5>
					<hr class="bg-light">
					<ul class="card-text text-light" id="sidenavcontent">
					<div class="navigations">
					<ul class="lists">
						<li><a href="demo_dash.php"><img src="img/dashboard.png" class="navimg img-responsive"/><span class="nav-writting">Dashboard</span></a></li>
						<li>Icons</li>
						<li>Maps</li>
						<li><a href="index.php">Chat</a></li>
						<li><a style="border-left:4px solid rgba(69, 162, 255, 0.93); border-radius:10px" href="#"><img src="img/log-file-format-1.png" class="navimg img-responsive" /><span class="nav-writting">General Announcements</span></a></li>
					</ul>
					</div>
					</ul>
			    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
			  </div>
			</div>
		</div>
		<div class="announcement_page justify-center">
        <div class="row row-adjusted">

        </div>
      </div>

		<script type="text/javascript">
			$("ul").on("click","li",function(){
				$(this).toggleClass("completed");
			});

		</script>
		<script type="text/javascript">
		$('#btn_sidenav').click(function(){
			$('#sidenav').slideToggle(1000,function(){

			});
		});
	</script>
		<!--<div class="container-fluid">-->
		<div class="right-page">
		  <br>
		  <div style="text-align:center">
		  <span style="text-align:center;font-weight:bold">POST ANNOUNCEMENT</span>
		  <hr>
		</div>

		<form method="post" action="">
		  <div class="form-group">
			   <label for="txt_title" class="msg_title">Message Title</label>
			   <input type="text" class="form-control form-control-adjusted" id="txt_title" placeholder="Enter message title">
		  </div>
		 <div class="form-group">
		  <label for="txt_announcement" class="msg_title">Message </label>
		  <textarea  class="form-control" id="txt_announcement" placeholder="Enter announcement here"></textarea>
		</div>
		<div class="form-group" id="btn_holder">
		<button class="btn btn-primary" id="btn_post">Post</button>
		</div>
		</form>
		</div>
			<!--</div>-->
			  
	
    

  <script>
  $(document).ready(function(){

      $("#my_profile_picture").load("Get_Profile_Picture.php");

    setInterval(function(){
     $(".row-adjusted").load("get_announcement.php").fadeIn("slow");
   },500);

     $("#btn_post").click(function(){
       var title_holder = $("#txt_title").val();
       var message_holder = $("#txt_announcement").val();
       $.ajax({
         method:"POST",
         url:"",
        data:{title:title_holder,
          message:message_holder},
        success:function(status){
          $(".row-adjusted").load("get_announcement.php").fadeIn("slow");
            }
       });
     });


  $(" #my_profile_picture").click(function(){
  $('#file').trigger("click");
  });

  $("#file").change(function(){
    $("#submit_file").trigger("click");
  });

  $("#submit_file").click(function(){
      $(this).submit();
  });

    });
  </script>

  <script>
    function Logout(){
    $.get("../Logout/Logout.php");
    }
  </script>
	<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $database = "solid";

  $connection_String = mysqli_connect($host,$user,$pass,$database);
  $message_title = $_POST["title"];
  $message_body = $_POST["message"];
  $message_sender = $_COOKIE["user_first_name"];
  if($message_title!=""&& $message_body!=""){

      $insert_query_command = "INSERT INTO general_announcement (`id`, `message_title`, `message_body`, `sender`, `date`) VALUES (NULL, '$message_title', '$message_body', '$message_sender', CURRENT_TIMESTAMP)";
      $execute_insert_query = mysqli_query($connection_String,$insert_query_command);
    }

   ?>
  

  </body>
  </html>