<?php
	$mysql_host='localhost';
	$mysql_user='root';
	$mysql_password='mastermind2000$';
	$mysql_database = 'Fixit';

	$link = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database);
	if(!$link){
		die('Some error');
	}
?>

	