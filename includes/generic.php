<?php
    
    function getYouTubeId($url) 
    {
        
        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) 
        {   
            return $match[1];
        } 

        return "";

    } 

?>