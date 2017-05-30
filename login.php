<html>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<?php include("navigation-bars.php");?>
	<link rel="stylesheet" type="text/css" href="design.css">
	<script type="text/javascript" src="jquery.validate.min.js"></script>

	<head>
		<title>Login Page</title>
	</head>

	<body>
		<form id="login-form" class="form-horizontal" action="loginfo.php" method="POST">
			<div class="form-group">
				<label class="control-label col-sm-offset-1 col-sm-2" for="email">Email:</label>
				<div class="col-sm-8">
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-offset-1 col-sm-2" for="pwd">Password:</label>
				<div class="col-sm-8"> 
					<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" required>
				</div>
			</div>
			<div class="form-group"> 
				<div class="col-sm-12">
					<div class="checkbox">
						<label><input type="checkbox"> Remember me</label>
					</div>
				</div>
			</div>
			<div class="form-group"> 
				<div class="col-sm-12">
					<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
		</form>
		<script>
			$("#login-form").validate();
		</script>
	</body>

</html>