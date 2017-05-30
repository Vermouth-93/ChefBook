<html>
	<?php 
	include("navigation-bars.php");
	include("connection.php");
	?>

	<head>
		<title>Homepage</title>
	</head>

	<style>
		#posts {
			font-size: 30px;
			color: white;
			font-family: monospace;
			border-color: crimson;
			border-style: dotted;
			margin-bottom: 20px;
			padding: 5px 0px;
		}
		#likeBtn {
				color: black;
				font-size: 15px;
				border-color: crimson;
				border-radius: 20px;
				margin-left: 46%;
			}
		body {
			background-color: #4B0082;
		}
	</style>
	<body>

		<?php	
		if(isset($_POST['title']) || isset($_POST['details']) || isset($_POST['image'])){
			$title = $_POST['title'];
			$details = $_POST['details'];
			$image = $_POST['image'];
			if( isset($_POST['privacy']) ){
				$privacy = $_POST['privacy'];
			}else {
				$privacy = 0;
			}

			$postsnumber = "SELECT * from posts";	
			$postsnumberesult = mysqli_query($con,$postsnumber);
			$postsnumberesultrows = mysqli_num_rows($postsnumberesult);
			$postsnumberesultrows = $postsnumberesultrows + 1;
			//$_SESSION['postid'] = $postsnumberesultrows;
			
			$insertQuery = "INSERT INTO posts (email,post_id,likes_number,caption,image,posted_time,is_public) VALUES ('".$_SESSION['email']."','".$postsnumberesultrows."',0,'".$details."','".$image."',now(),'".$privacy."')";
			$insertQueryResult = mysqli_query($con,$insertQuery);
		}

		//show friends' posts in newsfeed

		$postsQuery = "SELECT * from posts order by posted_time desc";

		/*$postsQuery = "select * from posts,profile where profile.email = '".$_SESSION['email']."' and (posts.email
		= '".$_SESSION['email']."' || posts.email IN (select distinct user1_email, user2_email from friends_with where
	    (user1_email= '".$_SESSION['email']."' or user2_email= '".$_SESSION['email']."')
	    and friends_with.request_status = 1))order by posted_time desc";
		die(mysqli_error($con));*/

		//$postsQuery = "select * from posts,friends_with where (email='".$_SESSION['email']."' OR (friends_with.user1_email= '".$_SESSION['email']."' OR friends_with.user2_email= '".$_SESSION['email']."')
		//AND friends_with.request_status = 1)) AND posts.is_public = 1 AND (email=friends_with.user1_email OR email=friends_with.user1_email) order by posted_time desc";

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
				echo '<br>';
				echo 'Number of Likes: '.$post[2].' ';//number of likes
				//$_SESSION['postid'] = $post[1];
				
				//email,postid,liks#,caption,image,time,privacy
			?>
			<form class="form-group" method="POST" action="incrlikes.php"> 
				<button id="likeBtn" type="submit" class="btn btn-default">Like this Post</button>
			</form>

			<script>
				(document).ready(function(){
					$("#likeBtn").click(function(){
						$.ajax({
							type: 'POST',
							url: 'incrlikes.php',
							success: function(data) {          
							}
						});
					});
				});
			</script>
		</div>
		<?php
			}
		}

		mysqli_close($con);
		?>	

	</body>
</html>