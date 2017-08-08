<?php

	$charset = 'utf8' ;

    if ($_SERVER['SERVER_NAME'] == "localhost") {

		$dbhost = "localhost";
		$dbport = "";
		$dbname = "pwc";
		$username = "root";
		$password = "";

	} else {

		$dbhost = $_SERVER['RDS_HOSTNAME'];
		$dbport = $_SERVER['RDS_PORT'];
		$dbname = $_SERVER['RDS_DB_NAME'];
		$username = $_SERVER['RDS_USERNAME'];
		$password = $_SERVER['RDS_PASSWORD'];

	}
	
	
	$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";

	$pdo = new PDO($dsn, $username, $password);

	$query = file_get_contents("pwc.sql");

	$stmt = $pdo->prepare($query);


	if ($stmt->execute()) {
	     echo "Success";
	} else {
	     echo "Fail";
	}


?>