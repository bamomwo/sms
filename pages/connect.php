<?php

	$server = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = 'schoolmgsystem';

	$conn = mysqli_connect($server,$user,$password,$dbname);

	if(!$conn){
		die(mysqli_connect_error());
	}

?>