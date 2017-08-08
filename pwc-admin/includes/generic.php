<?php

    /**
    * Check youtube url, check video exists or not,
    *
    * @param $url full youtube video url
    *
    * @return string - yotube video id
    */  
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