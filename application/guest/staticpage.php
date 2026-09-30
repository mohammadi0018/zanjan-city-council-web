<?php
include_once('./+lib/function/form.inc.php');
include_once('./+lib/function/paging.inc.php');
include_once('./+lib/models/staticpage/Staticpage.php');


$title = 'news';
$newsmanager = new Staticpage();

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
		$content= 'staticpagemanage.php';
		

		
		$newslist= $newsmanager->getAll('*','page_id',30,0,'');
		$categoryList= $newsmanager->getAll('*','page_id',50,0,"and parent='0'");

		include_once('./fckeditor/fckeditor.php') ;
		$oFCKeditor = new FCKeditor('text');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = '';
		break;
		
	case 'insert' :
		$title = 'مدیریت ';
		$content= 'staticpagemanage.php';
		
		//set for paging offset....
		$paging=paging('staticpage','manage','admin');
		$pagingoffset=$paging['pagingoffset'];
		$pagingstring=$paging['pagingstring'];
		
		include_once('./fckeditor/fckeditor.php');
		$oFCKeditor = new FCKeditor('text');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = '';

		if(!empty($_POST)) {
			$params = array();
			$params['title'] = trim($_POST['title']);
			$params['content']  = trim($_POST['text']);
			$params['categoryid']= addslashes(trim($_POST['categoryid']));
			$newsmanager->add($params);
			$categoryList=$newsmanager->getAll('*','page_id',50,0,"and parent='0'");
			$newslist= $newsmanager->getAll('*','createDate',10,$pagingoffset,'');	
			//print_r($_POST);
			
		}
		break;
		
	case 'search':
		$title = 'مدیریت اخبار';
		$content= 'staticpagemanage.php';
		

		
		$params['categoryid']= addslashes(trim($_POST['categoryid']));
		$params['searchtext']= addslashes(trim($_POST['searchtext']));
		
		$sqlwhere="";
		
		if($params['searchtext']!="" ){
		$sqlwhere .=" and (title like '%$params[searchtext]%' or content  like '%$params[searchtext]%')";
		}

		if($params['categoryid']!=""){
		$sqlwhere .=" and (parent ='$params[categoryid]' or page_id ='$params[categoryid]') ";
		
		}
		
		$newslist= $newsmanager->getAll('*','page_id',30,0,$sqlwhere);
		$categoryList= $newsmanager->getAll('*','page_id',50,0,"and parent='0'");
		

		include_once('./fckeditor/fckeditor.php') ;
		$oFCKeditor = new FCKeditor('text');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = '';
		break;
		

		
	case 'edit':
		$title = 'نمایش اخبار';
		$content= 'staticpagemanage.php';
		$newsid=trim($_GET['newsid']);

		
		
		$newslistbyid=$newsmanager->getByNewsId($newsid,'*');
		$newslist= $newsmanager->getAll('*','page_id',30,0,'');
		include_once('./fckeditor/fckeditor.php');
		$oFCKeditor = new FCKeditor('text');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = $newslistbyid['content'];
		//print_r($newslist);
		$categoryList= $newsmanager->getAll('*','page_id',50,0,"and parent='0'");
		break;
		
	case 'update':
		$title = 'نمایش اخبار';
		$content= 'staticpagemanage.php';
		$newsid=trim($_GET['newsid']);
		

		
		if(!empty($_POST)) {
			$params = array();
			$params['content']  = trim($_POST['text']);
			$params['page_id']= addslashes(trim($_GET['newsId']));
			//print_r($params);	
			$newsmanager->update($newsid, $params);
		}
		include_once('./fckeditor/fckeditor.php');
		$oFCKeditor = new FCKeditor('text');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = '';
		$newslist= $newsmanager->getAll('*','page_id',30,0,'');
		$categoryList= $newsmanager->getAll('*','page_id',50,0,"and parent='0'");
		//print_r($newslist);
		break;
	
	case 'delete':
		$title = 'نمایش اخبار';
		$content= 'staticpagemanage.php';
		$newsid=trim($_GET['page_id']);
		$newsmanager->remove($newsid);

		include_once('./fckeditor/fckeditor.php');
		$oFCKeditor = new FCKeditor('text');
		$oFCKeditor->BasePath = 'fckeditor/';
		$oFCKeditor->Value = '';
		$newslist= $newsmanager->getAll('*','page_id',30,0,'');
		$categoryList= $newsmanager->getAll('*','page_id',50,0,"and parent='0'");
		//print_r($newslist);
		break;
	
	//.............................front end ................................	
	case 'staticpageview':
		
		$content= 'staticpageview.php';
		$newsid=trim($_GET['page_id']);
		$parent=trim($_GET['parent']);
		if($parent=="")
		$parent=$newsid;
		$newslist=$newsmanager->getByNewsId($newsid,'*');
		$staticPageMenu= $newsmanager->getAll('*','page_id',50,0,"and (parent='$parent' or page_id='$parent')");
		$title = $newslist['title'];
		$newsmanager->setCountViewer($newsid);
		break;

}


?>