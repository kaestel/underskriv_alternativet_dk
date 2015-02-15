<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

session_set_cookie_params(3600, '/', "underskriv.alternativet.dk");
include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();


$page->bodyClass("declaration");
$page->pageTitle("Vælgererklæring");

$slug = "alternativet";


session()->value("slug", $slug);
include("config/data-".$slug.".php");



$page->header();
$page->template("declaration/start.php");
$page->footer();

?>