<html>
	<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	<?php
	//session_start();
	include("navigation-bars.php");
	include("connection.php");

	$selectQuery = "select user1_email from friends_with where user2_email='".$_SESSION['email']."' and request_status = 0";
	$selectQueryResult = mysqli_query($con, $selectQuery);
	$num_rows = mysqli_num_rows($selectQueryResult);
	//echo $num_rows;
	if($num_rows)
	{
		while($record = mysqli_fetch_row($selectQueryResult))
		{
			$user2 = $record;
	?>
	<li><?php echo $user2[0];?></li>
	<form id="accept-form" class="form-horizontal method="POST" action="acceptfriend.php" ">
		<button type="submit" class="btn btn-default" id="accept">Accept</button>

		<button type="submit" class="btn btn-default" id="reject">Reject</button>
		</div>
	</form>
<?php
		}
	} ?>
<script>
	(document).ready(function(){
		$("#accept").click(function(){
			$.ajax({
				type: 'POST',
				url: 'acceptfriend.php',
				success: function(data) {          
				}
			});
		});
	});
</script>

<script>
	(document).ready(function(){
		$("#reject").click(function(){
			$.ajax({
				type: 'POST',
				url: 'rejectfriend.php',
				success: function(data) {          
				}
			});
		});
	});
</script>
<?php
$_SESSION['requests_num'] = $num_rows;
?>
</html>