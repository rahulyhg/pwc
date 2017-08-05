<?php

    include("../includes/init.php");


    // remove all session variables
    session_unset(); 
    // destroy the session 
    session_destroy(); 


    header('Location: ' . $base_url);
    die;    

?>