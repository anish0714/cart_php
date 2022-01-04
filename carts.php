<?php
define('INCLUDE_CHECK',true);
require('connection.php');
$result = array();
$userId = isset($_GET['userid']) ? $_GET['userid'] : '';
if($userId){
	$query = mysqli_query($link,"SELECT * FROM cart WHERE user = '$userId' ");
	if(mysqli_num_rows($query)){
		$result['status'] = 'success';
		$result['data'] = mysqli_fetch_assoc($query);
	}
	else{
		$result['status'] = 'error';
		$result['message'] = 'Wrong userId';
}
	}
else{
	$result['status'] = 'error';
	$result['message'] = 'userID';
}

echo json_encode($result);
require('close_connection.php');
?>