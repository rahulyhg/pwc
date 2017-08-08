<?php

    include("../includes/init.php");

	if (isset($_GET["id"])) {

		$id = base64_decode($_GET["id"]);

		if (mysqli_query($conn, "DELETE FROM camps WHERE camp_id = $id")) {

			$_SESSION["message"] = "Camp deleted";

		} else {

			$_SESSION["message"] = "Unable to delete camps" . mysqli_error($conn);

		}

	}

    header('Location: ' . $base_url . '?view=camps-list');
    die;

?>