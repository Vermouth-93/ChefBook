<html>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<?php 
	//session_start();
	include("navigation-bars.php");?>
	<?php include("connection.php");?>
	<link rel="stylesheet" type="text/css" href="design.css">

	<?php
	if( isset($_POST['imgurl']) ){
		$newimgurl = $_POST['imgurl'];
	}

	?>

	<head>
		<title>Profile</title>       
		<style>
			#profpic {
				margin: auto;
				display: block;
				position: relative;
			}
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
			ul {
				color: bisque;
				font-size: 20px;
			}
			.float-left-area {
				width: 35%;
				float: left;
				margin-top: 30px;
				margin-left: 10px;
				margin-bottom: 30px;
			}
			.float-right-area {
				width: 60%;
				float: right;
				margin-top: 30px;
				margin-right: 10px;
				margin-bottom: 30px;
			}
			.inner-left {
				padding: 20px 5px 20px 5px;
				margin-right: 5px;
				border-top-style: dotted;
				border-right-style: dotted;
				border-bottom-style: dotted;
				border-left-style: solid;
				border-color: crimson;
				border-width: 8px;
				border-radius: 10px;
				min-height: 60px;
			}
			.inner-right {
				font-size: 11px;
				padding: 5px 5px 5px 5px;
				border-top-style: dotted;
				border-right-style: dotted;
				border-bottom-style: dotted;
				border-left-style: solid;
				border-color: crimson;
				border-width: 8px;
				border-radius: 10px;
				min-height: 60px;
			}
			.clear-floated { 
				clear: both; 
				height: 1px; 
				font-size: 1px; 
				line-height: 1px; 
				padding: 0; 
				margin: 0; 
			}
			#posts {
				font-size: 30px;
				text-align: center;
				color: white;
				font-family: monospace;
				border-color: crimson;
				border-style: dotted;
				margin-bottom: 20px;
				padding: 5px 0px;
			}
			#editBtn {
				color: black;
				font-size: 15px;
				border-color: crimson;
				border-radius: 20px;
				margin-left: 46%;
			}
		</style>

	</head>
	<body>
		<?php

		if( isset($_SESSION['email'])){


			$email = $_SESSION['email'];

			$dataQuery = "select * from user_info where email='$email'";
			$dataQueryResult = mysqli_query($con, $dataQuery);
			$num_rows = mysqli_num_rows($dataQueryResult);

			if($num_rows){
				while($record = mysqli_fetch_row($dataQueryResult)){
					$user_email = $record[0];
					$user_aboutme = $record[2];
					$user_gender = $record[3];
					$user_hometown = $record[4];
					$user_profimage = $record[5];
					$user_maritalstatus = $record[6];
					$user_dob = $record[7];
					$user_firstname = $record[8];
					$user_lastname = $record[9];
					$user_nickname = $record[10];
				}	
			}

			if( isset($newimgurl) ){//to check if image was edited by user
				$user_profimage = $newimgurl;
			}

		?>

		<img id="profpic" src="<?php echo $user_profimage?>" class="img-thumbnail border" alt="Profile Picture" width="200" height="200">
		<h1><?php 
			if($user_nickname){
				echo $user_nickname;
			}else{
				echo $user_firstname.' '.$user_lastname;
			}?></h1>

		<form class="form-group" method="POST" action="editprofpic.php"> 
			<button id="editBtn" type="submit" class="btn btn-default">Edit Profile Picture</button>
		</form>

		<div class="float-left-area">
			<div class="inner-left">
				<ul><!--add corresponding data from DB after every bullet using php-->
					<li>First Name: <?php echo $user_firstname ?></li>
					<li>Last Name: <?php echo $user_lastname ?></li>
					<li>Nickname: <?php echo $user_nickname ?></li>
					<li>Email: <?php echo $user_email ?></li>
					<li>Gender: <?php echo $user_gender ?></li>
					<li>Date of Birth: <?php echo $user_dob ?></li>
					<li>Hometown: <?php echo $user_hometown ?></li>
					<li>Marital Status: <?php echo $user_maritalstatus ?></li>
					<li>About me: <?php echo $user_aboutme ?></li>
				</ul>
			</div>
		</div>

		<div class="float-right-area">
			<div class="inner-right">

				<?php
				$postsQuery = "select * from posts where email='".$_SESSION['email']."' order by posted_time desc";
			$postsQueryResult = mysqli_query($con,$postsQuery);
			$postsQueryResultRows = mysqli_num_rows($postsQueryResult);
			if($postsQueryResultRows)
			{
				while($record = mysqli_fetch_row($postsQueryResult))
				{
					$post = $record;?>
				<div id="posts">
					<img src="<?php echo $post[4];?>" class="img-circle img-responsive" style="display:inline" alt="uploaded image here" width="304" height="236">
					<?php
					echo '<br>';
					echo 'Caption: '.$post[3].' ';//caption
					echo '<br>';
					echo 'Time of Upload: '.$post[5].' ';//posted_time
					echo 'Number of Likes: '.$post[6].' ';//number of likes
					?></div>
				<?php
				}
			}
			mysqli_close($con);
		}else{
			echo "You sould sing in first to display your profile !";
		}
				?>

			</div>
		</div>
		<div class="clear-floated"></div>

	</body>
</html>