dsadsad<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");

$action = $page->actions();


$page->bodyClass("declaration");
$page->pageTitle("Alternativet - Vælgererklæring");


$page->header();
$page->template("declaration/start.php");
$page->footer();

?>