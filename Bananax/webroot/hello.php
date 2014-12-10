<?php 
/**
 * This is a bananax pagecontroller.
 *
 */
// Include the essential config-file which also creates the $bananax variable with its defaults.
include(__DIR__.'/config.php'); 

// Define what to include to make the plugin to work
$bananax['stylesheets'][]        = 'css/slideshow.css';
$bananax['jquery'] = true;
$bananax['javascript_include'][] = 'js/slideshow.js';

// Do it and store it all in variables in the bananax container.
$bananax['title'] = "Min dynamiska OOPHP-sida";

$bananax['main'] = <<<EOD
<div id="slideshow" class='slideshow' data-host="" data-path="img/me/" data-images='["europe.jpg", "dota2.jpg", "mountain.jpg"]'>
<img src='img/me/mountain.jpg' width='950px' height='180px' alt='Me'/>
</div>

<article class="readable" style="width:80%">
<h1>Om Mig</h1>

<p>Jag heter Viktor Andersson, är 24 år och studerar för närvarande ett program som heter Webbprogrammering 
på Blekinge Tekniska Högskola. Jag har precis flyttat ihop med min tjej i en ny lägenhet här nere i Karlskrona och ser fram emot 
många timmars kodande de kommande åren"</p>
</article>
EOD;

// Finally, leave it all to the rendering phase of bananax.
include(BANANAX_THEME_PATH);
