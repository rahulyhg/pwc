<?php

    include("../includes/init.php");

    if (checkYoutube($_POST["video_uri"])) {

		if (mysqli_query($conn, "UPDATE videos SET video_uri = '".mysql_real_escape_string($_POST["video_uri"])."', video_description = '".mysql_real_escape_string($_POST["video_description"])."' WHERE video_id = ".base64_decode($_POST["video_id"])." ")) {

			$_SESSION["message"] = "Article updated";

		} else {

			$_SESSION["message"] = "Unable to update article";

		}


    } else {

    	$_SESSION["message"] = "Invalid video";

    }

    
    header('Location: ' . $base_url . '?view=videos-list');
    die;    

?>