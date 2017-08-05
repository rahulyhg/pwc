<?php

    $base_url = "http://" . $_SERVER['SERVER_NAME'] . "/";

    if ($_SERVER['SERVER_NAME'] == "localhost") {
        $base_url = $base_url."pwc/";
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pragya Wellness Center - Holistic approach for Physical, Mental wellness and Spritual enlightenment</title>

    <!-- Font family -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,500|Redressed" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?=$base_url?>vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?=$base_url?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=$base_url?>assets/css/modern-business.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    /* Temporary fix for img-fluid sizing within the carousel */
    
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>


