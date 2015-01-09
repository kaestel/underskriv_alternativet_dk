<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");

$action = $page->actions();


$page->bodyClass("declaration");
$page->pageTitle("Vælgererklæring");
$slug = session()->value("slug");



// Received POST data
if($_SERVER["REQUEST_METHOD"] == "POST") {

	// save data in session
	$posts = $_POST;
	foreach($posts as $name => $value) {
		session()->value($name, $value);
	}

	// redirect to clear POST state
	header("Location: ".$page->url);
	exit();

}


// print PDF
else if(count($action) == 2 && $action[0] == "print") {

//		$page->header();
	$page->template("declaration/print.php");
//		$page->footer();
	exit();


}


// no session data OR bad slug
else if(!session()->value("signature_id") || !session()->value("slug") || array_search(session()->value("slug"), $slug_data) == -1) {

	header("Location: /");
	exit();

}

// include slug data
include("config/data-".$slug.".php");

// show template
if(count($action) == 1) {

	// signature form
	if($action[0] == "signature") {

		$page->page(array(
			"templates" => "declaration/signature.php"
		));

		// $page->header();
		// $page->template("declaration/signature.php");
		// $page->footer();
		exit();

	}
	// preview declaration
	else if($action[0] == "preview") {

		$page->page(array(
			"templates" => "declaration/preview.php"
		));

		// $page->header();
		// $page->template("declaration/preview.php");
		// $page->footer();
		exit();

	}
	// receipt
	else if($action[0] == "receipt") {

		$page->page(array(
			"templates" => "declaration/receipt.php"
		));
		// $page->header();
		// $page->template("declaration/receipt.php");
		// $page->footer();
		exit();

	}
	// error
	else if($action[0] == "error") {

		$page->page(array(
			"templates" => "declaration/error.php"
		));
		// $page->header();
		// $page->template("declaration/receipt.php");
		// $page->footer();
		exit();

	}
	// save data and perform print action (redirects to receipt or error)
	else if($action[0] == "save") {

		$page->template("declaration/save.php");
		exit();
	}

}

// back to personal data form (with slug already set)
$page->page(array(
	"templates" => "declaration/start.php"
));

// $page->header();
// $page->template("declaration/start.php");
// $page->footer();

//header("Location: /".$slug);
exit();


?>