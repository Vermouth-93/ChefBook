<html>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<?php 
	//session_start();
	include("navigation-bars.php");?>
	<link rel="stylesheet" type="text/css" href="design.css">

	<head>
		<title>Edit Profile Picture</title>       
		<style>
			.border {
				border-width: thick;
				border-style: solid;
				border-color: crimson;
				border-radius: 10px;
				border-width: 8px;
			}
			h1 {
				text-align: center;
				color: navajowhite;
				font-size: 50px;
			}
			
			#saveBtn {
				color: black;
				font-size: 15px;
				border-color: crimson;
				border-radius: 20px;
				margin-left: 46%;
			}
		</style>

	</head>
	<body>
		<form id="profpic-form" class="form-horizontal" method="POST" action="profile.php">
				<input type="text" id="imgurl" name="imgurl" placeholder="Enter Image URL Here">
				<button type="submit" id="saveBtn" class="btn btn-default">Save Image</button>
			</form>
	</body>
</html>