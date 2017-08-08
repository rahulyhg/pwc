<?php

    include("../includes/init.php");

	if (isset($_GET["id"])) {

		$id = base64_decode($_GET["id"]);

		if (mysqli_query($conn, "DELETE FROM videos WHERE video_id = $id")) {

			$_SESSION["message"] = "Video deleted";

		} else {

			$_SESSION["message"] = "Unable to delete video";

		}

	}

    header('Location: ' . $base_url . '?view=videos-list');
    die;

?>