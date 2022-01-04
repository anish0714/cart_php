<?php
define('INCLUDE_CHECK',true);
require('connection.php');
$result = array();
$userEmail = isset($_GET['email']) ? $_GET['email'] : '';
$userPass = isset($_GET['password']) ? $_GET['password'] : '';
if($userEmail && $userPass){
	$query = mysqli_query($link,"SELECT * FROM user WHERE email = '$userEmail' AND password = '$userPass'");
	if(mysqli_num_rows($query)){
		$result['status'] = 'success';
		$result['data'] = mysqli_fetch_assoc($query);
	}
	else{
		$result['status'] = 'error';
		$result['message'] = 'Wrong combination of Email and Password';
	}
}
else{
	$result['status'] = 'error';
	$result['message'] = 'Email or Password is Empty';
}
echo json_encode($result);
require('close_connection.php');
?>