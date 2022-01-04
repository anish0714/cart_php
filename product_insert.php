<?php
define('INCLUDE_CHECK',true);
require('connection.php');
$result = array();
$input = json_decode(file_get_contents('php://input'), true);
if(isset($input['description']) && isset($input['image']) && isset($input['price']) && isset($input['shipping'])){
	$description = $input['description'];
	$image = $input['image'];
	$price = $input['price'];
	$shipping = $input['shipping'];
	mysqli_query($link,"INSERT INTO product(description,image,price,shipping) VALUES('$description','$image',$price,$shipping)");
	$result['status'] = 'success';
	$result['message'] = 'Inserted Successfully';
}
else{
	$result['status'] = 'error';
	$result['message'] = 'All the fields (description, image, price, shipping) are Required';
}
echo json_encode($result);
require('close_connection.php');
?>