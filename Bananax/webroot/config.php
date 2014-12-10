<?php
/**
 * Config-file for bananax. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define bananax paths.
 *
 */
define('BANANAX_INSTALL_PATH', __DIR__ . '/..');
define('BANANAX_THEME_PATH', BANANAX_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(BANANAX_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the bananax variable.
 *
 */
$bananax = array();


/**
 * Site wide settings.
 *
 */
$bananax['lang']         = 'sv';
$bananax['title_append'] = ' | bananax en webbtemplate';

$bananax['header'] = <<<EOD
<img class='sitelogo' src='img/bananax.jpg' alt='bananax Logo'/>
<span class='sitetitle'>Bananax webbtemplate</span>
<span class='siteslogan'>Följ min utveckling inom OOPHP</span>
EOD;

$bananax['footer'] = <<<EOD
<footer><span class='sitefooter'> Created by Viktor Andersson | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

/**
*Navbar
*
*/
//$bananax['navbar'] = null; // To skip the navbar 
$bananax['navbar'] = array( 
  'class' => 'nb-plain', 
  'items' => array( 
    'Hem'         => array('text'=>'Hem',         'url'=>'hello.php',          'title' => 'Om mig'), 
    'Redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php', 'title' => 'Redovisningar för kursmomenten'), 
    'Källkod'     => array('text'=>'Källkod',     'url'=>'source.php',      'title' => 'Se källkoden'), 
  ), 
  'callback_selected' => function($url) { 
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) { 
      return true; 
    } 
  } 
);


/** 
 * Theme related settings. 
 * 
 */ 
//$bananax['stylesheet'] = 'css/style.css';
$bananax['stylesheets'] = array('css/style.css');
$bananax['favicon']    = 'favicon.ico';



/**
 * Settings for JavaScript.
 *
 */
$bananax['modernizr'] = 'js/modernizr.js';
$bananax['jquery_src'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
$bananax['jquery'] = null; // To disable jQuery
$bananax['javascript_include'] = array();
//$bananax['javascript_include'] = array('js/main.js'); // To add extra javascript files



/**
 * Google analytics.
 *
 */
$bananax['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics
