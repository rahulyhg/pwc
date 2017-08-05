<?php

    include("../includes/init.php");

    $retval = mysqli_query($conn, "SELECT password FROM admin_user");

    if($retval ) {
        $data = $retval->fetch_array(MYSQLI_ASSOC);
    } else {
      die("Could not get data: " . mysqli_error($conn) . " <hr>");
    }

    if (isset($_POST["oldPassword"]) && isset($_POST["newPassword"])) {
        
        if ($_POST["oldPassword"] == $data["password"]) {

        	mysqli_query($conn, "UPDATE admin_user SET password = '". $_POST["newPassword"] ."' ");

        	if (mysqli_affected_rows($conn) > 0) {
        		$_SESSION["message"] = "Password changed, login again";
        	} else {
        		$_SESSION["message"] = "Password not changed";
        	}

		    // remove all session variables
		    session_unset(); 
		    // destroy the session 
		    session_destroy(); 

        } else {

        	$_SESSION["message"] = "Invalid old password";

        }
        
        

    }

    header('Location: ' . $base_url);
    die;    

?>