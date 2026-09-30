<?php
include_once('./+lib/function/form.inc.php');
include_once('./+lib/function/paging.inc.php');
//include_once('./+lib/models/user/User.php');


$title = 'user';
$usermanager = new User();

//set for status updat or insert mod
if($cmd=="edit")
{
	$userid=trim($_GET['userid']);
	$nextcmd="update&userid=$userid";
	$boxadduserdisplay="inline";
}
else
{
	$nextcmd="insert";
	$boxadduserdisplay="none";
}




switch ($cmd) {
    case 'manage':
		$title = 'مدیریت اخبار';
		$content= 'adduser.php';
		
		//set for paging offset....
		$paging=paging('user','manage','admin');
		$pagingoffset=$paging['pagingoffset'];
		$pagingstring=$paging['pagingstring'];
		
		$userlist= $usermanager->getAll('*','id',10,$pagingoffset,'');
		break;
		
	
		
	case 'insert' :
		$title = 'مدیریت اخبار';
		$content= 'adduser.php';
		
		//set for paging offset....
		$paging=paging('user','manage','admin');
		$pagingoffset=$paging['pagingoffset'];
		$pagingstring=$paging['pagingstring'];
		

		if(!empty($_POST)) {
			$params = array();
			//print_r($_POST);
			//$params['user_name'] = trim($_POST['user_name']);
			//$params['password']  = trim($_POST['password']);
			foreach($_POST as $key => $value)
			{
				$params[$key]=trim($value);
			}
			//print_r($params);
			$params['permission']="";
			foreach($_POST['permission'] as $key => $value)
			{
				$params['permission'][$key]=trim($value);
			}
			
			//print_r($params);

			
			$usermanager->add($params,'admin');
			$userlist= $usermanager->getAll('*','id',10,$pagingoffset,'');	
			
		}
		break;
		
	case 'notpermission' :
		$content = "notpermission.php";
		break;
	case 'delete' :
		$content = "adduser.php";
		$user_code = trim($_GET['user_code']);
		$usermanager->remove($user_code);
		
	default :	
	
		$content = 'home.php';
		$userlist= $usermanager->getAll('*','createDate',10,$pagingoffset,'');
}


?>