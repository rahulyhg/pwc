<?php

    include("../includes/init.php");


    if (checkYoutube($_POST["video_uri"])) {

	    $query = "INSERT INTO videos (video_uri, video_description) VALUES ('". mysql_real_escape_string($_POST["video_uri"]) ."', '". mysql_real_escape_string($_POST["video_description"]) ."')";

		if (mysqli_query($conn, $query)) {

			$_SESSION["message"] = "New video added";

		} else {

			$_SESSION["message"] = "Unable to add video";

		}

    } else {

    	$_SESSION["message"] = "Invalid video";

    }

    header('Location: ' . $base_url . '?view=videos-list');

    die;    

?>