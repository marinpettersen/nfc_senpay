<?php
	// local connection
	// $host = "127.0.0.1";
	// $uname = "root";
	// $password = '';
	// $db = 'nfcpay';

	// $connect = mysqli_connect($host, $uname, $password, $db);

	//remote conection
	$host = "85.10.205.173:3306";
	$uname = "marinpettersen";
	$password = 'aniz1910';
	$db = 'nfcpay';

	$connect = mysqli_connect($host, $uname, $password, $db);
	
?>