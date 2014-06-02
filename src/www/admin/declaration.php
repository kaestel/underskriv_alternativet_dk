<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");

// include the output class for output method support
include_once("class/system/output.class.php");

$action = $page->actions();
$output = new Output();
$fs = new FileSystem();



$page->bodyClass("declaration");
$page->pageTitle("Declarations");


if(is_array($action) && count($action)) {

	// LIST ITEM
	// Requires exactly two parameters /enable/#item_id#
	if(count($action) == 1 && $action[0] == "list") {

		$page->header(array("type" => "admin"));
		$page->template("admin/declaration/list.php");
		$page->footer(array("type" => "admin"));
		exit();

	}

	// DOWNLOAD ITEM
	else if(count($action) == 2 && $action[0] == "download") {
	

		$file = PUBLIC_FILE_PATH."/declarations/".$action[1];
		if(file_exists($file)) {
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header("Content-Type: application/force-download");
			header('Content-Disposition: attachment; filename=' . urlencode(basename($file)));
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			header('Content-Length: ' . filesize($file));
			ob_clean();
			flush();
			readfile($file);
		}

//		header("Location: /admin/declaration/list");
		exit();
	
	}

	// DOWNLOAD ITEM
	else if(count($action) == 1 && $action[0] == "downloadAll") {
	

		$folder = PUBLIC_FILE_PATH."/declarations/";
		$files = $fs->files($folder, array("allow_extensions" => "pdf"));

		$fs->makeDirRecursively(PRIVATE_FILE_PATH."/declaration_zips");
		$fs->makeDirRecursively(PRIVATE_FILE_PATH."/declaration_archive");

		$zip = new ZipArchive();
		$zip_file = PRIVATE_FILE_PATH."/declaration_zips/bundle_".time().".zip";
//		print $zip->open($zip_file);
//		print $zip_file;
		if($zip->open($zip_file, ZipArchive::CREATE)) {
			foreach($files as $file) {
				$zip->addFile($file, basename($file));
			}
		    $zip->close();

			// archive files
			foreach($files as $file) {
				copy($file, PRIVATE_FILE_PATH."/declaration_archive/".basename($file));
				unlink($file);
			}

			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header("Content-Type: application/force-download");
			header('Content-Disposition: attachment; filename=' . urlencode(basename($zip_file)));
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			header('Content-Length: ' . filesize($zip_file));
			ob_clean();
			flush();
			readfile($zip_file);

		}

		exit();
	
	}

	// DELETE ITEM
	else if(count($action) == 2 && $action[0] == "archive") {
	

		$file = PUBLIC_FILE_PATH."/declarations/".$action[1];
		if(file_exists($file)) {
			$fs->makeDirRecursively(PRIVATE_FILE_PATH."/declaration_archive");
			copy($file, PRIVATE_FILE_PATH."/declaration_archive/".$action[1]);
			unlink($file);
		}
		$output->screen(array("cms_status" => "success"));

//		header("Location: /admin/declaration/list");
		exit();
	
	}


}

$page->header();
$page->template("404.php");
$page->footer();

?>
