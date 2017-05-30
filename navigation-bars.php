<html>
	<?php
	session_start();
	if( isset($_SESSION['requests_num'])){
		$requests_num = $_SESSION['requests_num'];
	}else{
		$requests_num = 0;
	}
	
	?>
	<link rel="stylesheet" type="text/css" href="design.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<head>
		<style>
			footer {
				position: fixed;
				left: 0px;
				bottom: 0px;
				height: 16px;
				width: 100%;
				background: crimson;
				font-size: 12px;
				color: black;
				border-color: black;
				border-top: solid 1px;
				border-bottom: solid 1px;
			}
			#search-form,#post-form {
				margin: 10px 0px 0px 100px;
			}
			#search {
				border-radius: 20px;
				background-color: white;
				border-color: crimson;
				width: 500px;
				padding-left: 10px;
				border-width: 5px;
			}
			#searchBtn {
				color: black;
				font-size: 15px;
				border-color: crimson;
				border-radius: 20px;
			}
			#recipeBtn {
				color: black;
				font-size: 15px;
				border-color: crimson;
				border-radius: 20px;
				margin-left: 100px;
			}
		</style>
	</head>
	<nav id="nav" class="navbar navbar-inverse navbar-fixed-left">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">BakersBook</a>
			</div>

			<ul class="nav navbar-nav">
				<li><a href="homepage.php">Home</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="friends.php">Chef Friends</a></li>
				<li><a href="frienddisplayrequest.php">Chef Friend Requests <?php echo $requests_num ?></a></li>
				<li><a href="searchresult.php">Search Results</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="sign-up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			</ul>

			<form id="search-form" class="form-horizontal" method="POST" action="searchresult.php">
				<input type="text" id="search" name="search" placeholder="Search Chef Firends Here">
				<button type="submit" id="searchBtn" class="btn btn-default">Search</button>
			</form>

			<form id="post-form" class="form-horizontal" method="POST" action="makeareciepe.php">
				<button type="submit" id="recipeBtn" class="btn btn-default">Add a Reciepe Post</button>
			</form>
		</div>
	</nav> 

	<footer>
		<p> Copyright 2016. - All Rights Reserved. All content and graphics on this web site are the property of Heba, Ranim and Sally.</p>
		</details>
	</footer>

</html>