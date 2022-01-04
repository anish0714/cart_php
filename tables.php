<?php
define('INCLUDE_CHECK',true);
require('connection.php');
$db_schema = "CREATE TABLE product(
				id int(3) NOT NULL auto_increment,
				description text NOT NULL,
				image text NOT NULL,
				price int(5),
				shipping int(5),
				PRIMARY KEY(id)
			)";
if(!mysqli_query($link,$db_schema)){
	echo mysqli_error($link);
}

$db_schema = "CREATE TABLE user(
				id int(3) NOT NULL auto_increment,
				email text NOT NULL,
				password text NOT NULL,
				username varchar(15),
				phistory text,
				address text,
				PRIMARY KEY(id)
			)";
if(!mysqli_query($link,$db_schema)){
	echo mysqli_error($link);
}

$db_schema = "CREATE TABLE comment(
				id int(9) NOT NULL auto_increment,
				product int(3) NOT NULL,
				user int(3) NOT NULL,
				rating int(1) NOT NULL,
				image text NOT NULL,
				comment text NOT NULL,
				PRIMARY KEY(id)
			)";
if(!mysqli_query($link,$db_schema)){
	echo mysqli_error($link);
}

$db_schema = "CREATE TABLE cart(
				id int(9) NOT NULL auto_increment,
				products text NOT NULL,
				quantities text NOT NULL,
				user int(3),
				PRIMARY KEY(id)
			)";
if(!mysqli_query($link,$db_schema)){
	echo mysqli_error($link);
}
require('close_connection.php');
?>