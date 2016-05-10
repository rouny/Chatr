<?php session_start(); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-sacle=1.0">
	<title>Chatr</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.min.js"></script>
	
</head>
<body background="image/back4.jpg" class="backimage">
	<nav class="navbar navbar-custom" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header ">
      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
  			</div>
			
			<a class="navbar-brand" href="#"> <!--change-->
        		<img alt="Brand" src="image/logo_bigger.png" width="35px" height="30px">
      		</a>

			<a class="navbar-brand" href="#" class="text"><b>Chatr</b></a>

			<!-- <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php" >Home</a></li>
					<li><a href="index.php">About</a></li>
				</ul>
			</div>	 -->	
		</div>
	</nav>



<!--Image-->
<div id="wrap">
	<div class-"main" class="container">
		
		<!--panel sign In Form-->
		<div class="row">
  			<div class="col-md-6 col-md-offset-3">

		<div style="text-align:center">
			<div class="panel panel-custom" style="background-color:rgba(128, 128, 128, 0);">
					<div class="panel-body" style="background-color:rgba(255, 255, 255, 0.2);">
					<form action="login.php" method="post">
  						<div class="form-group">
    						<label for="handle" style="color:rgba(0, 0, 0, 0.6);">User</label>
    						<input type="text" class="form-control" style="background-color:rgba(255, 255, 255, 0.2);" name="handle" id="handle" placeholder="User" required autofocus>
  						</div>
  						<div class="form-group">
    						<label for="passwd" style="color:rgba(0, 0, 0, 0.6);">Password</label>
    						<input type="password" class="form-control" style="background-color:rgba(255, 255, 255, 0.2);" name="passwd" id="passwd" placeholder="Password" required autofocus>
  						</div>
 		 				<div class="text-center">
  							<button type="submit" class="btn btn-custom btn-md" style="color:rgba(0, 0, 0, 0.6); background-color:rgba(255, 255, 255, 0.2);">Sign In</button>
  						</div>
  						<div id="errmsg" class="warning">
  							<?php if(!empty($_SESSION['error'])) { echo $_SESSION['error']; } ?>
  						</div>
  						<?php unset($_SESSION['error']); ?>
					</form>
				</div>
			</div>
		</div>
		<!-- Sign Up Form-->
		<div id="new" class="text-center" >
				<button data-toggle="modal" data-target="#signupForm" class="btn btn-custom btn-md" style="background-color:rgba(255, 255, 255, 0.2); border:0px; color:#ffffff;">New User</button>
			</div>
			<div class="modal fade" id="signupForm" role="dialog" style="background-color:rgba(0, 0, 0, 0.4);">
				<div class="modal-dialog" >
					<div class="modal-content" style="background-color:rgba(255, 255, 255, 0.6);">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label=""><span>&times;</span></button>
							<div class="modal-title" class"signup"><h3>Sign Up</h3></div>
						</div>
						<div class="modal-body">
							<form class="form-horizontal" action="Signup.php" method="post">
								<div class="form-group">
									<label class="col-md-4 col-md-offset-1">First Name:</label>
									<div class="col-md-5">
										<input type="text" name="first" id="first" class="form-control-sm" required autofocus>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 col-md-offset-1">Last Name:</label>
									<div class="col-md-5">
										<input type="text" name="last" id="last" class="form-control-sm" required autofocus>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 col-md-offset-1">Handle:</label>
									<div class="col-md-5">
										<input type="text" name="handle" id="handle"class="form-control-sm" required autofocus>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 col-md-offset-1">Password:</label>
									<div class="col-md-5">
										<input type="password" name="passwd" id="passwd" class="form-control-sm" required autofocus>
									</div>
								</div>

								<div class="form-group">
									<div class="text-center">
										<button type="submit" class="btn btn-custom btn-lg" style="color:rgba(0, 0, 0, 0.6); background-color:rgba(255, 255, 255, 0.4);">Sign up</button>
									</div>
								</div>
							</form>
						</div>
						<div class="modal-footer"></div>
					</div>
				</div>
			</div>
	</div>
		</div>
</div>
	

	<!--footer-->
	<footer class="site-footer">
		<div class="container">
			<div class="row">
<!-- 				<h4>Contact address</h4>
				<p>205,Tondon Hostel</br> 
					MNNIT Allahabad</br>
					211004</br>
				</p>
 -->			</div>


<!-- 			<div class="bottom-footer">
				<div class="col-md-5">@Copyright MNNIT Allahabad 2016.</div>
				<div class="col-md-7">
					<ul class="list-inline">
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php">About</a></li>
					</ul>
				</div>
 -->
			</div>
		</div>
	</footer>


	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>