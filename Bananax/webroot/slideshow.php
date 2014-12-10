<?php 
/**
 * This is a bananax pagecontroller.
 *
 */
// Include the essential config-file which also creates the $bananax variable with its defaults.
include(__DIR__.'/config.php'); 


// Define what to include to make the plugin to work
$bananax['stylesheets'][]        = 'css/slideshow.css';
$bananax['javascript_include'][] = 'js/slideshow.js';

$bananax['navbar'];

// Do it and store it all in variables in the bananax container.
$bananax['title'] = "Slideshow för att testa JavaScript i bananax";

$bananax['main'] = <<<EOD
<div id="slideshow" class='slideshow' data-host="" data-path="img/me/" data-images='["dota2.jpg", "mountain.jpg"]'>
<img src='img/me/dota2.jpg' width='950px' height='180px' alt='Photo'/>
</div>

<h1>En slideshow med JavaScript</h1>
<p>Detta är en exempelsida som visar hur bananax fungerar tillsammans med JavaScript.</p>
EOD;


// Finally, leave it all to the rendering phase of bananax.
include(BANANAX_THEME_PATH);
