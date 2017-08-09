<?php

    include("../includes/init.php");

	$startDate = date("Y-m-d H:i:s", strtotime($_POST["camp_scheduled_date"]));
	$endDate = date("Y-m-d H:i:s", strtotime($_POST["camp_end_date"]));


	if (mysqli_query($conn, "INSERT INTO camps (camp_title, camp_city, camp_detail, camp_scheduled_date, camp_end_date) VALUES ('". mysqli_real_escape_string($conn,  $_POST["camp_title"]) ."', '". mysqli_real_escape_string($conn,  $_POST["camp_city"]) ."', '". mysqli_real_escape_string($conn,  $_POST["camp_detail"]) ."', '". $startDate ."', '". $endDate ."')")) {

		$_SESSION["message"] = "New camp created";

	} else {

		$_SESSION["message"] = "Unable to create camp" . mysqli_error($conn);

	}


    header('Location: ' . $base_url . '?view=camps-list');
    die;    

?>