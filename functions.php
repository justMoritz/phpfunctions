<?php

  #Collection of PHP functions written and used in some of my projects
  
  # startsWith and endsWith Functions adapted from
  # http://phapalegaurav.blogspot.com/2013/10/php-startswith-and-endswith-functions.html
  # by Gaurav Phapale


/**
 * Easily var dump in pre-formatted tags
 * @param $input variable or expression
 */
function pp_vardump( $input ){
  echo '<pre>';
  var_dump($input);
  echo '</pre>';
}


/**
 *  Checks if a string ends with a substring
 *  @param  [string] $haystack  String to be searched
 *  @param  [string] $needle    String to be found
 *  @return [bool]              True or false
 */
function endsWith($haystack, $needle){
  return $needle === "" || substr($haystack, -strlen($needle)) === $needle;
} 


/**
 *  Checks if a string starts with a substring
 *  @param  [string] $haystack  String to be searched
 *  @param  [string] $needle    String to be found
 *  @return [bool]              True or false
 */
function startsWith($haystack, $needle){
  return $needle === "" || strpos($haystack, $needle) === 0;
}  


/**
 *  Checks if a string contains a substring
 *  @param  [string] $haystack  String to be searched
 *  @param  [string] $needle    String to be found
 *  @return [bool]              True or false
 */
function doesContain($haystack, $needle){
    if (strpos($haystack, $needle) !== false) {
        return true;
    }   
    else{
        return false;   
    }
}


# Wordpress only Function

/**
 * Gets Page based on unique Template name
 * (will return the first page only!)
 *
 * @param  string $input This is the unique name of the page based on the
 *                       naming pattern of the template
 * @return array         Returns the first page that matches the template
 */
function get_page_by_template_name( $input ) {
  $pages = get_pages(array(
    'meta_key' => '_wp_page_template',
    'meta_value' => 'template-'.$input.'.php'
  ));
  return isset($pages[0]) ? $pages[0] : null;
}
