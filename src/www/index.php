<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

session_set_cookie_params(3600, '/', "underskriv.alternativet.dk");
include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();


header("Location: /alternativet");

?>