<?php
define('INCLUDE_CHECK',true);
require('connection.php');
$result = array();
$input = json_decode(file_get_contents('php://input'), true);
if(isset($input['product']) && isset($input['user']) && isset($input['rating']) && isset($input['comment'])){
	$user = $input['user'];
	$rating = $input['rating'];
	$product = $input['product'];
	$image = $input['image'];
	$comment = $input['comment'];
	mysqli_query($link,"INSERT INTO comment(user,rating,product,image,comment) VALUES('$user','$rating','$product','$image','$comment')");
	$result['status'] = 'success';
	$result['message'] = 'Inserted Successfully';
}
else{
	$result['status'] = 'error';
	$result['message'] = 'All the fields ((user,rating,product,image,comment) are Required';
}
echo json_encode($result);
require('close_connection.php');
?>