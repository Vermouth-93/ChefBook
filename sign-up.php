<html>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="jquery.validate.min.js"></script>
	<?php include("navigation-bars.php");?>
	<link rel="stylesheet" type="text/css" href="design.css">
	<script type="text/javascript" src="sign_up_validate.js"></script>


	<head>
		<title>Sign-up Page</title>
	</head>

	<body>

		<form id="signup-form" onsubmit="" class="form-horizontal" method="POST" action="insertinfo.php">
			<div class="form-group">
				<label class="control-label col-sm-offset-1 col-sm-2" for="text">First Name:</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter your First Name" required>
				</div>
			</div>            
			<div class="form-group">
				<label class="control-label col-sm-offset-1 col-sm-2" for="text">Last Name:</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your Last Name" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-offset-1 col-sm-2" for="text">Nickname:</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="nickname" name="nickname" placeholder="Enter your Nickname">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-offset-1 col-sm-2">Gender:</label>
				<div class="col-sm-4">
					<input style="height:20px; width:20px; vertical-align: middle;" type="radio" class="form-control" name="gender" id="male" name="male" value="M" required> Male
				</div>
				<div>
					<input style="height:20px; width:20px; vertical-align: middle;" type="radio" class="form-control" name="gender" id="female" name="female" value="F"> Female
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-offset-1 col-sm-2" for="text">Date of Birth:</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="dob" name="dob" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-offset-1 col-sm-2" for="email">Email:</label>
				<div class="col-sm-8">
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-offset-1 col-sm-2" for="pwd">Password:</label>
				<div class="col-sm-8"> 
					<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter your password" required>
				</div>
			</div>
			<div class="form-group"> 
				<div class="col-sm-12">
					<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
		</form>

	</body>

</html>