<?php
require_once('./+lib/models/db/xdb.model.php');
require_once('./+lib/utility/Image.php');

if(isset($_GET['i'])) {
	$img_id = $_GET['i'];
	$img_typeid = 1;
	if(isset($_GET['t']) and is_numeric($_GET['t']) ) {
		$img_typeid = $_GET['t'];
	}
	$imageManager = new Utility_Image();
	$imageManager->view($img_id, $img_typeid);
}else {
	exit();
}

?>