<?php
include_once('./+lib/function/form.inc.php');
include_once('./+lib/function/paging.inc.php');
include_once('./+lib/models/news/News.php');


$title = 'news';
$newsmanager = new News();

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
		$content= 'addnews.php';
		
		//set for paging offset....
		$paging=paging('news','manage','admin');
		$pagingoffset=$paging['pagingoffset'];
		$pagingstring=$paging['pagingstring'];
		
		$categoryList=$newsmanager->getAllCategories('*','categoryid',10,'0');
		$newslist= $newsmanager->getAll('*','createDate',10,$pagingoffset,'');

		include_once('./fckeditor/fckeditor.php') ;
		$oFCKeditor = new FCKeditor('text');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = '';
		break;
		
	case 'search':
		$title = 'مدیریت اخبار';
		$content= 'addnews.php';
		
		//set for paging offset....
		$paging=paging('news','manage','admin');
		$pagingoffset=$paging['pagingoffset'];
		$pagingstring=$paging['pagingstring'];
		
		$params['searchcategory']= addslashes(trim($_POST['searchcategory']));
		$params['searchstatus']= addslashes(trim($_POST['searchstatus']));
		$params['searchtext']= addslashes(trim($_POST['searchtext']));
		
		$sqlwhere="";
		
		if($params['searchtext']!="" ){
		$sqlwhere .=" and (title like '%$params[searchtext]%' or text  like '%$params[searchtext]%')";
		}

		if($params['searchcategory']!=""){
		$sqlwhere .=" and tbl_newscategory.categoryId ='$params[searchcategory]'";
		
		}
		
		$newslist= $newsmanager->getAll('*','tbl_news.createDate',10,$pagingoffset,$sqlwhere);
		$categoryList=$newsmanager->getAllCategories('*','categoryid',10,'0');
		

		include_once('./fckeditor/fckeditor.php') ;
		$oFCKeditor = new FCKeditor('text');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = '';
		break;
		
	case 'insert' :
		$title = 'مدیریت اخبار';
		$content= 'addnews.php';
		
		//set for paging offset....
		$paging=paging('news','manage','admin');
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
			$categoryList=$newsmanager->getAllCategories('*','categoryid',10,'0');
			$newslist= $newsmanager->getAll('*','createDate',10,$pagingoffset,'');	
			
		}
		break;
		
	case 'delete' :
		$title='مدیریت اخبار';
		$content='addnews.php';
		
		//set for paging offset....
		$paging=paging('news','manage','admin');
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
		$categoryList=$newsmanager->getAllCategories('*','categoryid',10,'0');
		$newslist= $newsmanager->getAll('*','createDate',10,$pagingoffset,'');
		break;
		
	case 'edit':
		$title = 'نمایش اخبار';
		$content= 'addnews.php';
		$newsid=trim($_GET['newsid']);
		
		//set for paging offset....
		$paging=paging('news','manage','admin');
		$pagingoffset=$paging['pagingoffset'];
		$pagingstring=$paging['pagingstring'];
		
		
		$newslistbyid=$newsmanager->getByNewsId($newsid,'*');
		$categoryList=$newsmanager->getAllCategories('*','categoryid',10,'0');
		$newslist= $newsmanager->getAll('*','createDate',10,$pagingoffset,'');
		include_once('./fckeditor/fckeditor.php');
		$oFCKeditor = new FCKeditor('text');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = $newslistbyid['text'];
		//print_r($newslist);
		break;
		
	case 'update':
		$title = 'نمایش اخبار';
		$content= 'addnews.php';
		$newsid=trim($_GET['newsid']);
		
		//set for paging offset....
		$paging=paging('news','manage','admin');
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
		$categoryList=$newsmanager->getAllCategories('*','categoryid',10,'0');
		$newslist= $newsmanager->getAll('*','createDate',10,$pagingoffset,'');
		//print_r($newslist);
		break;
	
	//.............................front end ................................	
	case 'newsview':
		$title = 'نمایش اخبار';
		$content= 'newsview.php';
		$newsid=trim($_GET['newsid']);
		$newslist=$newsmanager->getByNewsId($newsid,'*');
		$newsmanager->setCountViewer($newsid);
		
		break;
	case 'archive':
		$title = 'نمایش اخبار';
		$content= 'newsarchive.php';
		$category=trim($_GET['category']);
		
		//set for paging offset....
		$paging=paging('news','archive','');
		$pagingoffset=$paging['pagingoffset'];
		$pagingstring=$paging['pagingstring'];
		
		$newslist= $newsmanager->getAll('*','createDate',100,$pagingoffset,"and categoryId='$category'");
	
		break;
		
	default :	
	
		$content = 'home.php';
		$newslist= $newsmanager->getAll('*','createDate',10,$pagingoffset,'');
}


?>