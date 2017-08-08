<?php

    include("../includes/init.php");

	if (isset($_GET["id"])) {

		$id = base64_decode($_GET["id"]);

		if (mysqli_query($conn, "DELETE FROM blog_post WHERE blog_id = $id")) {

			$_SESSION["message"] = "Article deleted";

		} else {

			$_SESSION["message"] = "Unable to delete article" . mysqli_error($conn);

		}

	}

    header('Location: ' . $base_url . '?view=articles-list');
    die;

?>