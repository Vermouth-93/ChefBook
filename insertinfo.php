<?php
session_start();

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$gender = $_POST['gender'];
$dateofbirth = $_POST['dob'];
$email = $_POST['email'];
$_SESSION['email'] = $email;
$password = md5($_POST['pwd']);

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
if($num_rows){//record exists
	//$("#signup-form").validate();
	echo '<meta http-equiv="refresh" content="2; URL=sign-up.php"/>';
}
else {//record doesn't exist
	if($gender == 'M'){
		$source = "malechef.jpg";
	}else $source = "suzy.png";

	$insertQuery = "INSERT INTO user_info (email,password_user,about_me,gender,hometown,profile_pic,martial_status,birthday,first_name,last_name,nickname) VALUES ('".$email."','".$password."','about me','".$gender."','hometown','".$source." ','g','".$dateofbirth."','".$first_name."','".$last_name."','".$nickname."')";
	$insertQueryResult = mysqli_query($con,$insertQuery);
	
}
echo '<meta http-equiv="refresh" content="2; URL=profile.php"/>';
mysqli_close($con);
?>

