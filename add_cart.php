<?php
define('INCLUDE_CHECK',true);
require('connection.php');
$result = array();
$input = json_decode(file_get_contents('php://input'), true);
if(isset($input['products']) && isset($input['user']) && isset($input['quantities'])){
	$user = $input['user'];
	$quantities = $input['quantities'];
	$products = $input['products'];
	mysqli_query($link,"INSERT INTO cart(user,quantities,products) VALUES('$user','$quantities','$products')");
	$result['status'] = 'success';
	$result['message'] = 'Inserted Successfully';
}
else{
	$result['status'] = 'error';
	$result['message'] = 'All the fields ((user,quantities,products) are Required';
}
echo json_encode($result);
require('close_connection.php');
?>