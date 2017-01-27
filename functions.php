<?php

// Collection of PHP functions written and used in some of my projects


// startsWith and endsWith Functions adapted from
// http://phapalegaurav.blogspot.com/2013/10/php-startswith-and-endswith-functions.html
// by Gaurav Phapale
// Checks if a string ends with a substring
function endsWith($haystack, $needle)
{
    return $needle === "" || substr($haystack, -strlen($needle)) === $needle;
} 

// Checks if a string starts with a substring
function startsWith($haystack, $needle)
{
    return $needle === "" || strpos($haystack, $needle) === 0;
}  


// Function checks if a string contains a substring
function doesContain($haystack, $needle){
    if (strpos($haystack, $needle) !== false) {
        return true;
    }   
    else{
        return false;   
    }
}




?>