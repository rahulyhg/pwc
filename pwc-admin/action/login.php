<?php

    include("../includes/init.php");

    $retval = mysqli_query($conn, "SELECT password FROM admin_user");

    if($retval ) {
        $data = $retval->fetch_array(MYSQLI_ASSOC);
    } else {
      die("Could not get data: " . mysqli_error($conn) . " <hr>");
    }

    
    if (isset($_POST["password"])) {
        
        if ($_POST["password"] == $data["password"]) {
            // Set session variables
            $_SESSION["password"] = $_POST["password"];
        }
        
        $_SESSION["message"] = "Invalid password";

        header('Location: ' . $base_url);
        die;    

    }


    header('Location: ' . $base_url);
    die;    

?>