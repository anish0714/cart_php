<?php
define('INCLUDE_CHECK',true);
require('connection.php');
$result = array();
$query = mysqli_query($link,"SELECT * FROM product");
while($row = mysqli_fetch_assoc($query)){
    $result[] = $row;
}
echo json_encode($result);
require('close_connection.php');
?>