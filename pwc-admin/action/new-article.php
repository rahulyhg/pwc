<?php

    include("../includes/init.php");


	if (mysqli_query($conn, "INSERT INTO blog_post (blog_details, blog_title) VALUES ('". mysqli_real_escape_string($conn,  $_POST["blog_details"]) ."', '". mysqli_real_escape_string($conn,  $_POST["blog_title"]) ."')")) {

		$_SESSION["message"] = "New article created";

	} else {

		$_SESSION["message"] = "Unable to create article";

	}


    header('Location: ' . $base_url . '?view=articles-list');
    die;    

?>