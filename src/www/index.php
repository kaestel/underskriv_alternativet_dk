<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

header('P3P: CP="NOI ADM DEV COM NAV OUR STP"');
include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");

$action = $page->actions();


header("Location: /alternativet");

?>