<?php

session_start();

$con = mysqli_connect('localhost', '<localhost_username>', '<localhost_password>');

mysqli_select_db($con, '<database_name>');

$name = $_POST['user']
$pass = $_POST['password']

$s = "select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	header('location:homepage.php');
}
else{
	header('location:login.php');
}

?>