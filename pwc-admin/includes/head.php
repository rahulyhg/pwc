<?php

$base_url = "http://" . $_SERVER['SERVER_NAME'] . "/";

if ($_SERVER['SERVER_NAME'] == "localhost") {
    $base_url = $base_url."pwc/";
}

$base_url = $base_url."pwc-admin/";

// Start the session
session_start();

if (isset($_GET["action"])) {

    if ($_GET["action"] == "logout") {
        // remove all session variables
        session_unset(); 
        // destroy the session 
        session_destroy(); 
    }

}

if (isset($_POST["password"])) {
    
    if ($_POST["password"] == "admin") {
        // Set session variables
        $_SESSION["password"] = base64_encode($_POST["password"]);
    }
    
    $_SESSION["message"] = "Invalid password";

    header('Location: '.$_SERVER['PHP_SELF']);
    die;    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pragya Wellness - Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=$base_url?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=$base_url?>css/simple-sidebar.css" rel="stylesheet">

</head>
