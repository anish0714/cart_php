<?php
if(!defined('INCLUDE_CHECK')) die('Error');
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'assignment1';
$link = mysqli_connect($db_host,$db_user,$db_pass) or die('Error');
if(mysqli_connect_errno()){
    die('Error in Connection');
}
mysqli_select_db($link,$db_database);
?>