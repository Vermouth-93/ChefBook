<html>
	<head>
		<?php include("navigation-bars.php");
		include("connection.php");?>
	</head>
	<link rel="stylesheet" type="text/css" href="design.css">

	<style>
		#title,#image,#details {
			position: relative;
			border-color: crimson;
			border-radius: 10px;
			border-width: 2px;
			height: 50px;
		}
		#postBtn{
			font-size: 15px;
			background-color: white;
			color: black;
			border: 4px solid #4B0082; /*indigo*/
			font-size: 20px;
			border-color: crimson;
			border-radius: 20px;
			margin-left: 60px;
			margin-bottom: 20px;
			margin-top: 0px;
		}
		div {
			margin: 0px 0px 20px 0px;
			color: aliceblue;
			font-size: 20px;
			display: block;
		}
	</style>

	<body>
		<form id="post" class="form-horizontal" action="homepage.php" method="POST">
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<input type="text" class="form-control" id="title" name="title" placeholder="Recipe Title">
				</div>
				<div class="col-sm-offset-4 col-sm-4">
					<input type="img" class="form-control" id="image" name="image" placeholder="Recipe Image URL">
				</div>
				<div class="col-sm-offset-4 col-sm-4">
					<textarea class="form-control" name="details" id="details" placeholder="Enter a caption here..."></textarea>
				</div>
				<div class="col-sm-offset-5 col-sm-8">
					<input type = "radio" class="form-control" style="height:20px; width:50px;" class="form-control" id="privacy" name="privacy" value="1">Public
					<button type="submit" id="postBtn" class="btn btn-default">Post</button>
				</div>
			</div>
		</form>	
	</body>

</html>
