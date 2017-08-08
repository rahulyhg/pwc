<?php


	$dbhost = $_SERVER['RDS_HOSTNAME'];
	$dbport = $_SERVER['RDS_PORT'];
	$dbname = $_SERVER['RDS_DB_NAME'];
	$charset = 'utf8' ;

	$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
	$username = $_SERVER['RDS_USERNAME'];
	$password = $_SERVER['RDS_PASSWORD'];

	$pdo = new PDO($dsn, $username, $password);

	$query = file_get_contents("pwc.sql");

	$stmt = $pdo->prepare($query);


	if ($stmt->execute()) {
	     echo "Success";
	} else {
	     echo "Fail";
	}


?>