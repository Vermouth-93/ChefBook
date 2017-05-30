<?php
$host = 'localhost';
$user = 'root';
$mypass = '';
$db = 'socialnetwork';

$con = mysqli_connect($host,$user,$mypass,$db);
if(!$con){
	echo 'Oops, could not connect to phpMyAdmin!'.'<br>';
}//else echo 'Connection established successfully!'.'<br>';
?>