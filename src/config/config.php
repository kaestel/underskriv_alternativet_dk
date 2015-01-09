<?php
/**
* This file contains definitions
*
* @package Config
*/
header("Content-type: text/html; charset=UTF-8");
error_reporting(E_ALL);

/**
* Required site information
*/
define("SITE_UID", "ALT");
define("SITE_NAME", "underskriv.alternativet.dk");
define("SITE_URL", (isset($_SERVER["HTTPS"]) ? "https" : "http")."://".$_SERVER["SERVER_NAME"]);
define("SITE_EMAIL", "alternativet@alternativet.dk");


/**
* Optional constants
*/
define("DEFAULT_PAGE_DESCRIPTION", "");
define("DEFAULT_LANGUAGE_ISO", "DA");
define("DEFAULT_COUNTRY_ISO", "DK");


// Enable items model
define("SITE_ITEMS", true);

// Enable notifications (send collection email after N notifications)
define("SITE_COLLECT_NOTIFICATIONS", 50);

define("SITE_INSTALL", true);



// slug options
$slug_data = array("alternativet");


// slug default data
$slug_data_intro = '';
$slug_data_address = '';
$slug_data_receipt = '';
$slug_data_footer = '<div class="about">Vælgererklæring.dk</div>';


?>
