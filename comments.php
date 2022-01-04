<?php
define('INCLUDE_CHECK',true);
require('connection.php');
$result = array();
$productId = isset($_GET['productid']) ? $_GET['productid'] : '';
if($productId){
	$query = mysqli_query($link,"SELECT * FROM comment WHERE product = '$productId' ");
	if(mysqli_num_rows($query)){
		$result['status'] = 'success';
		$result['data'] = mysqli_fetch_assoc($query);
	}
	else{
		$result['status'] = 'error';
		$result['message'] = 'Wrong productId';
}
	}
else{
	$result['status'] = 'error';
	$result['message'] = 'productID';
}echo json_encode($result);
require('close_connection.php');
?>