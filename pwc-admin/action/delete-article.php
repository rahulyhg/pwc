<?php

    include("../includes/init.php");

	if (isset($_GET["article"])) {

		$article_id = base64_decode($_GET["article"]);

		if (mysqli_query($conn, "DELETE FROM blog_post WHERE blog_id = $article_id")) {

			$_SESSION["message"] = "Article deleted";

		} else {

			$_SESSION["message"] = "Unable to delete article";

		}

	}

    header('Location: ' . $base_url . '?view=articles-list');
    die;

?>