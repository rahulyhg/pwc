<?php

    function getYouTubeId($url) 
    {
        
        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) 
        {   
            return $match[1];
        } 

        return "";

    } 

    
    function checkYoutube($url) 
    {
        if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) 
        {   

            $headers = get_headers('https://www.youtube.com/watch?v=' . $match[1]);

            if (strpos($headers[0], '200')) 
            {
                return $match[1];
            } 

            return false;   
        } 

        return false;
    } 
    
    
?>
