<html>
	<head>
		<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	</head>

	<?php
	session_start();
	include("connection.php");

	$selectQuery = "update friends_with set request_status = 1 where user2_email='".$_SESSION['email']."' and request_status = 0";
	$selectQueryResult = mysqli_query($con, $selectQuery);

	echo '<meta http-equiv="refresh" content="1; URL=profile.php"/>';
	?>
</html>