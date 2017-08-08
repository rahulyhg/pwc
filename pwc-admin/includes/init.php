<?php
    
    include("generic.php");

    $base_url = "http://" . $_SERVER['SERVER_NAME'] . "/";

    if ($_SERVER['SERVER_NAME'] == "localhost") {
        $base_url = $base_url."pwc/";
    }

    $base_url = $base_url."pwc-admin/";

//DB operations starts

    if ($_SERVER['SERVER_NAME'] == "localhost") {
        $conn = mysqli_connect("localhost", "root", "", "pwc");
    } else {
        $conn = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
    }

    if( !$conn ) {
      die("Could not connect: " . mysqli_error($conn) . "<hr>");
    }

//DB operations ends

//Start the session
    
    session_start();


    
?>