<?php
session_start();

$email = $_POST['email'];
$_SESSION['email'] = $email;
$password = $_POST['pwd'];

$host = 'localhost';
$user = 'root';
$mypass = '';
$db = 'socialnetwork';

$con = mysqli_connect($host,$user,$mypass,$db);
if(!$con){
	echo 'Oops, could not connect to phpMyAdmin!'.'<br>';
}		

$selectQuery = "select email from user_info where email='$email'";
$selectQueryResult = mysqli_query($con, $selectQuery);
$num_rows = mysqli_num_rows($selectQueryResult);

$selectQueryp = "select password_user from user_info where email = '$email' and password_user = MD5('$password')";
$selectQueryResultp = mysqli_query($con, $selectQueryp);
$num_rowsp = mysqli_num_rows($selectQueryResultp);

if(!$num_rows){//record exists
	//$("#signup-form").validate();
	echo '<meta http-equiv="refresh" content="2; URL=login.php"/>';
}
else if ($num_rows && !$num_rowsp)
{
	echo '<meta http-equiv="refresh" content="2; URL=login.php"/>';
}
else {
	echo '<meta http-equiv="refresh" content="2; URL=profile.php"/>';
}
mysqli_close($con);

?>