<?php 
/**
 * This is a bananax pagecontroller.
 *
 */
// Include the essential config-file which also creates the $bananax variable with its defaults.
include(__DIR__.'/config.php'); 



// Do it and store it all in variables in the bananax container.
$bananax['title'] = "404";
$bananax['header'] = "";
$bananax['main'] = "This is a bananax 404. Document is not here.";
$bananax['footer'] = "";

// Send the 404 header 
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of bananax.
include(BANANAX_THEME_PATH);
