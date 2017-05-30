<html>
	<?php include("navigation-bars.php");
	include("connection.php");
	?>
	<link rel="stylesheet" type="text/css" href="design.css">

	<head>
		<title>Friends</title>
	</head>
	<?php
	$selectQuery = "select distinct user1_email, user2_email from friends_with where
	(user1_email= '".$_SESSION['email']."' or user2_email= '".$_SESSION['email']."')
	 and friends_with.request_status = 1";

	$selectQueryResult = mysqli_query($con, $selectQuery);
	$num_rows = mysqli_num_rows($selectQueryResult);

	if($num_rows)
	{
		while($record = mysqli_fetch_row($selectQueryResult))
		{
			$friend = $record;

	?>
	<li><a href="profile.php"> <?php echo $friend[0];?> </a></li>'    
	<?php
		}
	}

	?>
</html>