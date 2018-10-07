<?php 

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register or Login</title>
	<link rel="stylesheet" href="">
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
body
		{
			font-family: Arial;
			width: 100%;
			background: url('studentlife.png');
			background-repeat: no-repeat;
			height: 100%;
			width: 100%;
			position: fixed;
			background-position: center;
			background-attachment: fixed;

					}
		ul
		{
			margin: 0;
			padding: 0;
			list-style: none;
		}
		ul li
		{
			float: right;
			width: 200px;
			height: 40px;
			opacity: .8;
			line-height: 40px;
			text-align: center;
			font-size: 18px;
			margin-right: 8px;
			padding-left: 16px;
		}
		ul li a
		{
			text-decoration: none;
			color: red;
			display: block;
		}
		
		ul li:hover ul li
		{
			display: block;
		}
		ul li ul li
		{
			display: none;
		}
	</style>
</head>
<body>
	
		<div class="nav">
	<ul>

		<li><a href="#"> <button type="button" name="add" id="add" data-toggle="modal" data-target="#signup1" class="btn btn-warning" style="color: blue; background-color: white; padding-left: 40px; border-style: none;">Sign Up</button> </a></li>
		<li><a href="#"><button type="button" name="add" id="add" data-toggle="modal" data-target="#login1" class="btn btn-warning" style="color: blue; background-color: white; padding-left: 35px; border-style: none; margin-right: 30px;">Login</button></a></li>
	</ul>


<h1 style="font-size: 25px; color: grey; font-family: serif;"><i>Find Your Accommodation </i></h1>
</div>

<!-- login pop up form-->
<div class="container">
		<div class="table-responsive">
			
		</div>
	</div>

	<div id="login1" class="modal fade" >
		
		<div class="modal-dialog">
			
			<div class="modal-content">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title" style="color: black;">Login To Your Account</h4>
				</div>
				<div class="modal-body">
				<form method="POST" id="insert_form" enctype="multipart/form-data" action="login.php" style=" position: relative; height: 100%;">

					<span style="color: red;">Login If You Already Have An Account</span><br><br>

					<label>Username</label>
					<input type="text" autocomplete="off" name="username" id="name" class="form-control" required ><br>
					<label>Password</label>
					<input type="password" autocomplete="off" name="password" id="pword" class="form-control" required value=""><br>
					
					<input type="submit" name="login" id="login" value="Login" style="background-color: green;">
				</form>
			</div>
			<div class="modal-footer">
				<span style="color: red; "><p data-toggle="modal" data-target="#signup1" class="btn btn-warning" class="btn btn-default" data-dismiss="modal">Don't Have An Account?</p></span>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<!--sign up pop up form-->

<div class="container">
		<div class="table-responsive">
			
		</div>
	</div>

	<div id="signup1" class="modal fade" >
		
		<div class="modal-dialog">
			
			<div class="modal-content">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Create An Account</h4>
				</div>
				<div class="modal-body">
				<form method="POST" id="insert_form" enctype="multipart/form-data" action="createAcc.php" style=" position: relative; height: 100%;">

					<span style="color: red;">Your Records Will be Entered Once You Click Submit</span><br><br>

					<label>Full Name</label>
					<input type="text" name="name" id="name" class="form-control" required><br>
					
					<label>Gender</label><br>
					<select name="gender" >						
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select><br><br>

					<label>Email</label>
					<input type="text" name="email" id="email" class="form-control" required><br>
					<label>Phone Number</label>
					<input type="text" name="phone" id="phone" class="form-control" required><br>

					<label>University</label>
					<input type="text" name="uni" id="uni" class="form-control" required><br>
					<label>Username</label>
					<input type="text" name="username" id="username" class="form-control" required><br>
					<label>Password</label>
					<input type="password" name="password1" id="password1" class="form-control" required><br>
					<label>Confirm Password</label>
					<input type="password" name="password2" id="password2" class="form-control" required><br>

					<input type="submit" name="register" id="register" value="Submit">
				</form>
			</div>
			<div class="modal-footer">
				<span style="color: red;"><p data-toggle="modal" data-target="#login1" class="btn btn-warning" class="btn btn-default" data-dismiss="modal">Already Have An Account?</p></span>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

</body>
</html>