<?php
include_once('./+lib/function/form.inc.php');
include_once('./+lib/function/paging.inc.php');
include_once('./+lib/models/imagegalley/imagegalley.php');


$title = 'news';
$newsmanager = new Imagegalley();

//set for status updat or insert mod
if($cmd=="edit")
{
	$newsid=trim($_GET['newsid']);
	$nextcmd="update&newsid=$newsid";
	$boxaddnewsdisplay="inline";
}
else
{
	$nextcmd="insert";
	$boxaddnewsdisplay="none";
}




switch ($cmd) {
    case 'manage':
		$title = 'مدیریت اخبار';
		$content= 'imagegalleymanage.php';
		
		//set for paging offset....
		$paging=paging('imagegalley','manage','admin');
		$pagingoffset=$paging['pagingoffset'];
		$pagingstring=$paging['pagingstring'];
		
		$newslist= $newsmanager->getAll('*','id',10,$pagingoffset,'');

		include_once('./fckeditor/fckeditor.php') ;
		$oFCKeditor = new FCKeditor('text');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = '';
		break;
		
	case 'search':
		$title = 'مدیریت اخبار';
		$content= 'imagegalleymanage.php';
		
		//set for paging offset....
		$paging=paging('imagegalley','manage','admin');
		$pagingoffset=$paging['pagingoffset'];
		$pagingstring=$paging['pagingstring'];
		
		$params['searchcategory']= addslashes(trim($_POST['searchcategory']));
		$params['searchtext']= addslashes(trim($_POST['searchtext']));
		
		$sqlwhere="";
		
		if($params['searchtext']!="" ){
		$sqlwhere .=" and (title like '%$params[searchtext]%' or description  like '%$params[searchtext]%')";
		}

		if($params['searchcategory']!=""){
		$sqlwhere .=" and categoryid ='$params[searchcategory]'";
		
		}
		
		$newslist= $newsmanager->getAll('*','id',10,$pagingoffset,$sqlwhere);
		

		include_once('./fckeditor/fckeditor.php') ;
		$oFCKeditor = new FCKeditor('text');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = '';
		break;
		
	case 'insert' :
		$title = 'مدیریت اخبار';
		$content= 'imagegalleymanage.php';
		
		//set for paging offset....
		$paging=paging('imagegalley','manage','admin');
		$pagingoffset=$paging['pagingoffset'];
		$pagingstring=$paging['pagingstring'];
		
		include_once('./fckeditor/fckeditor.php');
		$oFCKeditor = new FCKeditor('text');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = '';

		if(!empty($_POST)) {
			$params = array();
			$params['title'] = trim($_POST['title']);
			$params['text']  = trim($_POST['text']);
			$params['category']= addslashes(trim($_POST['category']));
			$newsmanager->add($params);
		}
		$newslist= $newsmanager->getAll('*','id',10,$pagingoffset,'');
		break;
		
	case 'delete' :
		$title='مدیریت اخبار';
		$content='imagegalleymanage.php';
		
		//set for paging offset....
		$paging=paging('imagegalley','manage','admin');
		$pagingoffset=$paging['pagingoffset'];
		$pagingstring=$paging['pagingstring'];
		
		include_once('./fckeditor/fckeditor.php');
		$oFCKeditor = new FCKeditor('text');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = '';
		if(!empty($_GET)) {
			$newsid=trim($_GET['newsid']);
			$newsmanager->remove($newsid);
		}
		$newslist= $newsmanager->getAll('*','id',10,$pagingoffset,'');
		break;
		
	case 'edit':
		$title = 'نمایش اخبار';
		$content= 'imagegalleymanage.php';
		$newsid=trim($_GET['newsid']);
		
		//set for paging offset....
		$paging=paging('imagegalley','manage','admin');
		$pagingoffset=$paging['pagingoffset'];
		$pagingstring=$paging['pagingstring'];
		
		
		$newslistbyid=$newsmanager->getByNewsId($newsid,'*');
		$newslist= $newsmanager->getAll('*','id',10,$pagingoffset,'');
		include_once('./fckeditor/fckeditor.php');
		$oFCKeditor = new FCKeditor('text');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = $newslistbyid['text'];
		//print_r($newslist);
		break;
		
	case 'update':
		$title = 'نمایش اخبار';
		$content= 'imagegalleymanage.php';
		$newsid=trim($_GET['newsid']);
		
		//set for paging offset....
		$paging=paging('imagegalley','manage','admin');
		$pagingoffset=$paging['pagingoffset'];
		$pagingstring=$paging['pagingstring'];
		
		if(!empty($_POST)) {
			$params = array();
			$params['title'] = trim($_POST['title']);
			$params['text']  = trim($_POST['text']);
			$params['category']= addslashes(trim($_POST['category']));
			//print_r($params);	
			$newsmanager->update($newsid, $params);
		}
		include_once('./fckeditor/fckeditor.php');
		$oFCKeditor = new FCKeditor('text');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = '';
		$newslist= $newsmanager->getAll('*','id',10,$pagingoffset,'');
		//print_r($newslist);
		break;
	
	//.............................front end ................................	
	case 'imagegalleyview':
		$title = 'نمایش اخبار';
		$content= 'imagegalleyview.php';
		
			//set for paging offset....
		$paging=paging('imagegalley','imagegalleyview','');
		$pagingoffset=$paging['pagingoffset'];
		$pagingstring=$paging['pagingstring'];
		
		$newsid=trim($_GET['category']);
		$newslist=$newsmanager->getAll('*','id',20,$pagingoffset,"and  categoryid='$newsid'");
		$newsmanager->setCountViewer($newsid);
		break;
	
		
	default :	
	
		$content = 'home.php';
		$newslist= $newsmanager->getAll('*','createDate',10,$pagingoffset,'');
}


?>