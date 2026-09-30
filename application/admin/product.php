<?php
include_once('./+lib/function/form.inc.php');
include_once('./+lib/models/product/Product.php');

$title = 'product';
$msg = '';
$flag = 0;
$input = array();
$productManager = '';
$productManager = new product();


switch($cmd) {
	case 'list':
		$title = 'product List';
		$content = 'admin/product_list.tpl';
		$list = $productManager->getAll();
		break;
	case 'input':
		include_once('./fckeditor/fckeditor.php') ;
		$title = 'Add product';
		$content = 'admin/product_input.tpl';

		$oFCKeditor = new FCKeditor('textproduct');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = '';
		$smarty->assign('oFCKeditor', $oFCKeditor);
		break;
	case 'insert':
		if(!empty($_POST)) {
			$params = array();
			$params['title'] = trim($_POST['titleproduct']);
			$params['text'] = addslashes(trim($_POST['textproduct']));
			$params['status'] = addslashes(trim($_POST['status']));
			$productManager->add($params);
		}
		redirect('index.php?section=admin&page=product&cmd=list');		
		break;
	case 'edit':
		include_once('./fckeditor/fckeditor.php') ;
		$title = 'Edit product';
		$content = 'admin/product_input.tpl';

		if(!empty($_GET['id']) and is_numeric($_GET['id']) ) {
			$productId = $_GET['id'];
			$list = $productManager->getByproductId($productId);

			$oFCKeditor = new FCKeditor('description');
			$oFCKeditor->BasePath = 'fckeditor/';
			$oFCKeditor->Value = $list['description'];
			$smarty->assign('oFCKeditor', $oFCKeditor);
		}else {
			redirect('index.php?section=admin&page=product&cmd=list');
		}
		break;
	case 'update':
		if(!empty($_POST)) {
			$params = array();
			$params['product'] = trim($_POST['titleproduct']);
			$params['shortdescription'] = addslashes(trim($_POST['shortdescription']));
			$params['price'] = addslashes(trim($_POST['price']));
			$params['amount'] = addslashes(trim($_POST['amount']));
			$params['company'] = addslashes(trim($_POST['company']));
			$params['keyword'] = addslashes(trim($_POST['keyword']));
			$params['pagetitle'] = addslashes(trim($_POST['pagetitle']));
			$params['description'] = trim($_POST['description']);
			$params['status'] = addslashes(trim($_POST['status']));
			$productId = addslashes(trim($_POST['id']));
			$productManager->update($productId, $params);
		}
		redirect('index.php?section=admin&page=product&cmd=list');		
		break;
	case 'remove':
		if(!empty($_GET['id']) and is_numeric($_GET['id'])) {
			$productId = addslashes(trim($_GET['id']));
			$productManager->remove($productId);
		}
		redirect('index.php?section=admin&page=product&cmd=list');		
		break;
	default:
		$content = 'admin/product_list.tpl';
		$title = 'product List';

		$list = $productManager->getAll();
}

?>