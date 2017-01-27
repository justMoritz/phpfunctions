<?php

// Collection of PHP functions written and used in some of my projects


// startsWith and endsWith Functions adapted from
// http://phapalegaurav.blogspot.com/2013/10/php-startswith-and-endswith-functions.html
// by Gaurav Phapale
function endsWith($haystack, $needle)
{
    return $needle === "" || substr($haystack, -strlen($needle)) === $needle;
} 

function startsWith($haystack, $needle)
{
    return $needle === "" || strpos($haystack, $needle) === 0;
}  






?>