<?php

    include("../includes/init.php");

    if (isset($_POST["oldPassword"]) && isset($_POST["newPassword"])) {
        
        if ($_POST["oldPassword"] == $data["password"]) {

        	mysqli_query($conn, "INSERT admin_user SET password = '". $_POST["newPassword"] ."' ");

        	if (mysqli_affected_rows($conn) > 0) {
        		$_SESSION["message"] = "Password changed, login again";
        	} else {
        		$_SESSION["message"] = "Password not changed";
        	}

        } else {

        	$_SESSION["message"] = "Invalid old password";

        }

    }

    header('Location: ' . $base_url . '?view=articles-list');
    die;    

?>