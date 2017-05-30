<html>
	<head>
		<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	</head>

	<?php
	session_start();
	include("connection.php");

	$getlikesQuery = "select likes_number from posts where email='".$_SESSION['email']."' and post_id='".$_SESSION['postid']."'";
	$getlikesQueryResult = mysqli_query($con, $getlikesQuery);
	$getlikesQueryResultrows = mysqli_num_rows($getlikesQueryResult);

	if($getlikesQueryResultrows)
	{
		while($record = mysqli_fetch_row($getlikesQueryResult))
		{
			$likesnum = $record[0];
			$likesnum = $likesnum + 1;
		}
	}

	//echo $_SESSION['postid'];
	$selectQueryupdate = "update posts set likes_number = '".$likesnum."' where email='".$_SESSION['email']."' and post_id='".$_SESSION['postid']."'";

	mysqli_query($con, $selectQueryupdate);
	die(mysqli_error($con));
	echo '<meta http-equiv="refresh" content="4; URL=profile.php"/>';
	?>
</html>