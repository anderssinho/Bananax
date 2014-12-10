<?php 
/**
 * This is a bananax pagecontroller.
 *
 */
// Include the essential config-file which also creates the $bananax variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the bananax container.
$bananax['title'] = "Redovisning";

$bananax['main'] = <<<EOD
<article class="readable">
<h1>Redovisning av kursmomenten</h1>

<h2>Kmom01: Kom igång med Objektorienterad PHP</h2>
<p>
</p>
<h2>Kmom02: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom03: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom04: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom05: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom06: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom07/10: ...</h2>

<p>Redovisningstext...</p>


</article>

EOD;


// Finally, leave it all to the rendering phase of bananax.
include(BANANAX_THEME_PATH);