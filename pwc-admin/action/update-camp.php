<?php

    include("../includes/init.php");

	$startDate = date("Y-m-d H:i:s", strtotime($_POST["camp_scheduled_date"]));
	$endDate = date("Y-m-d H:i:s", strtotime($_POST["camp_end_date"]));

    $query = "UPDATE camps SET camp_title = '".mysqli_real_escape_string($conn,  $_POST["camp_title"])."',  
    camp_city = '".mysqli_real_escape_string($conn,  $_POST["camp_city"])."', 
    camp_detail = '".mysqli_real_escape_string($conn,  $_POST["camp_detail"])."', 
    camp_scheduled_date = '".$startDate."', 
    camp_end_date = '".$endDate."'
    WHERE camp_id = '".base64_decode($_POST["camp_id"])."' ";


	if (mysqli_query($conn, $query)) {

		$_SESSION["message"] = "Camp updated";

	} else {

		$_SESSION["message"] = "Unable to update camp: " . mysqli_error($conn);

	}


    header('Location: ' . $base_url . '?view=camps-list');
    die;    

?>