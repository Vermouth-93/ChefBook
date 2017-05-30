<?php
include("navigation-bars.php");
include("connection.php");

$search_item = $_POST['search'];

if(strpos($search_item,'@')){//add if record exist
	$selectQueryf = "INSERT INTO friends_with (user1_email,user2_email,request_status) VALUES ('".$_SESSION['email']."','".$search_item."',0)";
	$selectQueryResultf = mysqli_query($con, $selectQueryf);
	echo 'FRIEND REQUEST HAS BEEN ADDED !';
	echo '<meta http-equiv="refresh" content="2; URL=homepage.php"/>';
}
else
{
	//echo '<meta http-equiv="refresh" content="2; URL=friend-request.php"/>';

	$selectQuerysearch = "select email from user_info where hometown='$search_item' or first_name='$search_item' or last_name='$search_item'";
	$selectQueryResultsearch = mysqli_query($con, $selectQuerysearch);
	$num_rows = mysqli_num_rows($selectQueryResultsearch);

	if($num_rows)
	{
		while($record = mysqli_fetch_row($selectQueryResultsearch))
		{
			$search = $record;

?>
<li><a href="profile.php"> <?php echo $search[0];?> </a></li>    
<?php		
		}
	}

}
?>