<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");

$action = $page->actions();

// TODO: force dev setting for testing
session()->value("dev", 1);


$page->bodyClass("declaration");
$page->pageTitle("Vælg parti");




$page->header();
$page->template("pages/list.php");
$page->footer();

?>