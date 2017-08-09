<?php

    include("../includes/init.php");

	if (mysqli_query($conn, "UPDATE blog_post SET blog_details = '".mysqli_real_escape_string($conn,  $_POST["blog_details"])."', blog_title = '".mysqli_real_escape_string($conn,  $_POST["blog_title"])."' WHERE blog_id = ".base64_decode($_POST["blog_id"])." ")) {

		$_SESSION["message"] = "Article updated";

	} else {

		$_SESSION["message"] = "Unable to update article";

	}


    header('Location: ' . $base_url . '?view=articles-list');
    die;    

?>