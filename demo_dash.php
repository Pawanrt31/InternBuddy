<!DOCTYPE html>
<html>
<head>
	<title>demo</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="tick.css">
	<script type="text/javascript" src="jquery-3.5.1.js"></script>
    <script src="zingchart.min.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="../css/bootstrap-select.css" rel="stylesheet"/>
    <link href="../css/style.css" rel="stylesheet" rel="stylesheet"/>
    <link href="general_announcement.css" media="all" rel="stylesheet"/>


    <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="../js/jquery.yacal.min.js"></script>
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
						<li><a style="border-left:4px solid rgba(69, 162, 255, 0.93); border-radius:10px" href="general_announcement.php"><img src="img/log-file-format-1.png" class="navimg img-responsive" /><span class="nav-writting">General Announcements</span></a></li>
					</ul>
					</div>
					</ul>
			    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
			  </div>
			</div>
		</div>

		<script type="text/javascript">
			$("ul").on("click","li",function(){
				$(this).toggleClass("completed");
			});

		</script>



		<div class="col-md-10">
			
			<input type="button" class="btn-success rounded" value="graph visibility" name="" id="div1_btn">
			<hr style="background-color: gray;"> 
			<div class="card sizeInc" id="first_div" style="width: 100%;">
			  <div class="card-body">
			    <h5 class="card-title">Graph :</h5>
			    <div class="card-text">
          			<div id="mycharts" class="chart--container" style="border: 1px solid black; height: 300px; width: 90%;"></div><br>
          			<h6 class="">Select local CSV File: 
          				<input class="" type="file" class="" style=""></h6>
            		<h6 class="">Select type of plot:
            			<select id="csv" class="btn btn-outline-info btn-sm" style="background-color:black;">
		            		<option value="line">Line</option>
		            		<option value="bar">Bar</option>
		            		<option value="pie">Pie</option>
		            		<option value="line3d">3D Line</option>
		            		<option value="bar3d">3D Bar</option>
		            		<option value="pie3d">3D Pie</option>
          				</select>
      				</h6>
			    </div>
			    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
			  </div>
			</div>
			
			<br>
			<!-- <input type="button" class="btn-success rounded" value="second_div" name="" id="div2_btn"> -->
			<div class="row d-flex justify-content-between">
					    <!-- allot task -->

				<div class="col-xl-3">
					<div class="card sizeInc" style="width: 100%;">
					  <div class="card-body">
					    <h5 class="card-title">Allot Task :</h5>
					    <p class="card-text">Alloting work</p>
					    <!-- modal start -->
					    
					    <!-- modal end -->
					    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#allot_task">Allot task</button>
						<div class="modal fade bd-example-modal-lg" id="allot_task" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						     	<div class="row d-flex justify-content-start" style="margin-bottom:30px;padding-left: 50px;">
						          <div class="col-md-6">
						          	<form method="post">
						            <label style="font-weight:600;">Select the intern :</label>
						            <select class="btn btn-info btn-md" name="Name" style="" required>
						              <option value="">Select</option>
						              <option value="Pawan">Pawan</option>
						              <option value="Abhishek">Abhishek</option>
						              <option value="Niteesh">Niteesh</option>
						              <option value="Ankit">Ankit</option>
						            </select>
						            <hr>
						            <div class="">
						            	<label style="font-weight:600;">Allot the work :
						            		<input type="text" name="work" value="" placeholder="allot the task" size="60" class="rounded" required style="padding: 3px; color:;">
						            	</label>
						            	<hr>
						            	<label style="font-weight:600;">Assigned Date :<?php echo Date('d-m-Y');  ?></label>
						           		<hr>
              							<input type="submit" name="Submit" value="submit" class="btn btn-success btn-sm" style="">
              						</div>
						            
              						</form>
									<?php
											session_start();
											$db = mysqli_connect('localhost','root','','dash');
											if(!$db)
											{
											  echo "Not connected";
											}
											if(isset($_POST["Submit"]))
											{
											  $name= mysqli_real_escape_string($db,$_POST["Name"]);
											  $work = mysqli_real_escape_string($db,$_POST["work"]);
											  $datet= Date('Y-m-d');
											  $sql = "insert into allottask(name,work,datetask) values('$name','$work','$datet')";
											  if(mysqli_query($db,$sql))
											  {
												echo "<script>alert('Task alloted!!')</script>";
												header('location:demo_dash.php');
												//exit();
											  }
											  else {
												echo "<script>alert('Task not alloted!!')</script>";
											  }
											}
									?>
						          <!-- <input type="submit" name="" value="submit" class="btn btn-success btn-lg" style="margin-left:30px;"> -->
						          </div>
						        </div>
						    </div>
						  </div>
						</div>
					    <!-- allot task end -->

					  </div>
					</div>
				</div>
				<div class="col-xl-3">
					<div class="card sizeInc" style="width: 100%;">
					  <div class="card-body">
					    <h5 class="card-title">Daily updates</h5>
					    <p class="card-text">View daily updates</p>
					    <!-- daily updates modal start -->
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#daily_updates">View updates</button>
						<div class="modal fade bd-example-modal-lg" id="daily_updates" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						     	<div class="row d-flex justify-content-center" style="margin-bottom:30px;">
						          <div class="col-md-11">
						          	<form method="post">
						            <label style="font-weight:600;">Select the intern :</label>
						            <select class="btn btn-info btn-md" name="Name1" style="" required>
						              <option value="">Select</option>
						              <option value="Pawan">Pawan</option>
						              <option value="Abhishek">Abhishek</option>
						              <option value="Niteesh">Niteesh</option>
						              <option value="Ankit">Ankit</option>
						            </select>
						            <input type="submit" value="submit" name="submiti" class="btn-success btn-sm rounded">
						            <hr>
						            <label style="font-weight:600;">Assigned task :</label>
						            <select class="btn btn-info btn-md" name="Tasks" style="">
						              <option value="">Select</option>
									  <?php
										  $names=mysqli_real_escape_string($db,$_POST["Name1"]);
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
						       		<hr>
              						<label style="font-weight:600;">Assign the progress(max 100) :</label>
					                <input type="number" id="max100" name="prog" value="" class="rounded" style="padding: 10px; color:aqua; background-color:black;">
                					<input type="submit" name="progsubmit" value="submit" class="btn btn-success btn-sm" style="">
									<?php
									if(isset($_POST["progsubmit"]))
									{
									  $name=mysqli_real_escape_string($db,$_POST["Name1"]);
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
						            <br><hr>
        							<h6>Information will be displayed below:</h6><hr>
        							<table class="table table-striped table-dark" style="">
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
											?>
									</table>

              						</form>
						          <!-- <input type="submit" name="" value="submit" class="btn btn-success btn-lg" style="margin-left:30px;"> -->
						          </div>
						        </div>
						    </div>
						  </div>
						</div>

					    <!-- daily updates modal end -->
					  </div>
					</div>
				</div>
				<div class="col-xl-3">
					<div class="card sizeInc" style="width: 100%;">
					  <div class="card-body">
					    <h5 class="card-title">Leave check</h5>
					    <p class="card-text">Check leaves.</p>
					    <!-- leave check start -->
					    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#leave_check">check</button>
						<div class="modal fade bd-example-modal-lg" id="leave_check" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						     	<div class="row d-flex justify-content-center" style="margin-bottom:30px;">
						          <div class="col-md-12">
						            <label style="font-weight:600;">Select the intern :</label>
						            <select class="btn btn-info btn-md" name="Name2" style="" required>
						              <option value="">Select</option>
						              <option value="Pawan">Pawan</option>
						              <option value="Abhishek">Abhishek</option>
						              <option value="Niteesh">Niteesh</option>
						              <option value="Ankit">Ankit</option>
						            </select>
						            <input type="submit" value="submit" name="submiti" class="btn-success btn-sm rounded">
						            <hr>
						            <label style="font-weight: 600;">To check all the leaves :</label>
						            <input type="submit" name="" value="all_leaves" class="btn-success btn-sm">
						            <br>
						            <hr>
						            <h6>List of all leave application :</h6>
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

										  /* $db = mysqli_connect('localhost','root','','dash');
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
										  //   { */
										 ?> 
						              <tbody>
						              	
						              </tbody>
						            </table>
						            
              						
						          <!-- <input type="submit" name="" value="submit" class="btn btn-success btn-lg" style="margin-left:30px;"> -->
						          </div>
						        </div>
						    </div>
						  </div>
						</div>
					    <!-- leave check end -->
					  </div>
					</div>
				</div>
				<!-- this is new registers start-->
				<div class="col-xl-3">
					<div class="card sizeInc" style="width: 100%;">
					  <div class="card-body">
					    <h5 class="card-title">Check new joinings</h5>
					    <p class="card-text">new registers.</p>
					    <!-- leave check start -->
					    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_registers">check</button>
						<div class="modal fade bd-example-modal-lg" id="new_registers" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content d-flex justify-content-around">
						    	<div class="col-md-3">
						    		<input type="submit" name="" value="new" class="btn-primary btn-sm">
						    		<input type="submit" name="" value="all" class="btn-primary btn-sm">
						    		<hr style="color: red;">
						    	</div>
						    	<div class="col-md-12">
						    		<h6>Information about the users :</h6>
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
						                <tbody>
						                	
						                </tbody>
						            </table>
						    	</div>
						    </div>
						  </div>
						</div>
					    <!-- leave check end -->
					  </div>
					</div>
				</div>
				<!-- this is new registers end -->

			</div>
		</div>
	</div>
	<div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
	
	   <span class="swal2-success-line-tip" style="bgcolor:RGB(5, 110, 18);"></span>
	   <span class="swal2-success-line-long" style="bgcolor:RGB(5, 110, 18);"></span>
	   <div class="swal2-success-ring"></div> 
	   <!-- <div class="swal2-success-fix" style="background-color: white;"></div> -->
	  
  </div>






	<script type="text/javascript">
		$('#btn_sidenav').click(function(){
			$('#sidenav').slideToggle(1000,function(){

			});
		});
	</script>


	<script type="text/javascript">
		$('#div1_btn').click(function(){
			$('#first_div').slideToggle(1000,function(){

			});
		});
	</script>







	<script type="text/javascript">
          // var fileInput = document.getElementById("csv"),
          // readFile = function () {
          //     var reader = new FileReader();
          //     reader.onload = function () {
          //         document.getElementById('out').innerHTML = reader.result;
          //     };
          //     // start reading the file. When it is done, calls the onload event defined above.
          //     reader.readAsBinaryString(fileInput.files[0]);
          // };
          //
          // fileInput.addEventListener('change', readFile);
          ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];
      		// window.addEventListener('load', () => {
      		var csv_name = "";

      		$('input[type=file]').change(function () {
        		  csv_name = (this.files[0].name);
              $('select[id=csv]').change(function () {
                var grtype = document.getElementById("csv");
                console.log(grtype.value);
      				  var myConfig = {
      					type: grtype.value,
      					csv: {
      							"url": csv_name
      						}
      				};

      				// render chart with width and height to
      				// fill the parent container CSS dimensions
      				zingchart.render({
      					id: 'mycharts',
      					data: myConfig,
      					height: '100%',
      					width: '100%'
      				});
            });
        		  // continue ur code here and place that variable csv_name in the url
        		  // i am sending a link to also refer this
        		  			// link:"https://stackoverflow.com/questions/15201071/how-to-get-full-path-of-selected-file-on-change-of-input-type-file-using-jav"

      	});
    </script>


<!-- here -->
<script type="text/javascript"></script>
<!-- here -->



	
</body>
</html>