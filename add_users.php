<?php
define('INCLUDE_CHECK',true);
require('connection.php');
$result = array();
$input = json_decode(file_get_contents('php://input'), true);
if(isset($input['email']) && isset($input['password']) && isset($input['username'])&& isset($input['address'])){
	$email = $input['email'];
	$password = $input['password'];	
	$username = $input['username'];
	$address = $input['address'];
	mysqli_query($link,"INSERT INTO user(email,password,username,address,phistory) VALUES('$email','$password','$username','$address' , '')");
	$result['status'] = 'success';
	$result['message'] = 'Inserted Successfully';
}
else{
	$result['status'] = 'error';
	$result['message'] = 'All the fields ((email,password,username,address) are Required';
}
echo json_encode($result);
require('close_connection.php');
?>