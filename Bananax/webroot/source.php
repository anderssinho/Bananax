<?php 
/**
 * This is a bananax pagecontroller.
 *
 */
// Include the essential config-file which also creates the $bananax variable with its defaults.
include(__DIR__.'/config.php'); 


// Add style for csource
$bananax['stylesheets'][] = 'css/source.css';


// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));


// Do it and store it all in variables in the bananax container.
$bananax['title'] = "Visa källkod";

$bananax['main'] = "<h1>Visa källkod</h1>\n" . $source->View();


// Finally, leave it all to the rendering phase of bananax.
include(BANANAX_THEME_PATH);