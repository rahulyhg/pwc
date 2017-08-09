<?php

    include("../includes/init.php");

    if (checkYoutube($_POST["video_uri"])) {

		if (mysqli_query($conn, "UPDATE videos SET video_uri = '".mysqli_real_escape_string($conn,  $_POST["video_uri"])."', video_description = '".mysqli_real_escape_string($conn,  $_POST["video_description"])."' WHERE video_id = ".base64_decode($_POST["video_id"])." ")) {

			$_SESSION["message"] = "Video updated";

		} else {

			$_SESSION["message"] = "Unable to update video";

		}


    } else {

    	$_SESSION["message"] = "Invalid video";

    }

    
    header('Location: ' . $base_url . '?view=videos-list');
    die;    

?>