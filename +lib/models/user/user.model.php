<?PHP

require_once("user.class.php");
$user = new USER();
$sec=$_GET['sec'];
$urlcmd=$_GET['cmd'];
$urlpage=$_GET['page'];
$alert=$_GET['alert'];


//check user permission..........................
//$user_permission=$user->checkPermission($user->id);
////print_r($user_permission);
//if($alert!="notpermission" and $urlcmd!="logout" and $sec="admin")
//{
//	if(($urlpage!="" and $urlcmd!="") or ($urlpage!="user" and $urlcmd!="notpermission" and $urlcmd!="") )
//	{
//		
//			$flag=false;
//			if(!empty($user_permission))
//			{
//				foreach($user_permission as $key => $value)
//				{
//					foreach($value as $key2 => $value2)
//					{
//						$$key2=$value2;
//					}//end for each 
//					
//				if(($page==$urlpage and $cmd==$urlcmd))
//					{	
//						$flag=true;
//					}
//				}//end foreach
//			}
//			
//			if(($flag==false))
//				{
//					redirect("?page=user&cmd=notpermission&sec=admin&alert=notpermission");	
//					exit();
//				}
//	}//end if
//}//end if
//end checkpermission...............................






if($sec=='admin' and !($user->id) and !(empty($_POST['submit'])))
{
	$user->login($_POST['user_name'] , $_POST['password'] , 'admin');
		if(!($user->id))
		{
			$msg="System Message : your user name or password is not valid ";
		}
}
if($sec=='admin' and $urlcmd=='logout')
{
	$user->logout('');
	redirect('?sec=admin');
}


//user section.......................
//if($sec=='user' and !($user->id) and $cmd=='login')//login not do
//{
//	$username=$_POST['username'];
//	$password=$_POST['password'];
// 	$userinfo=$user->login($username,$password);
//
//	if($userinfo==1){//login is ok
//		redirect('?sec=user&cmd=home');
//	}//end if
//	else
//	{
//		redirect('?');
//	}
//}
//else if($sec=='user' and $cmd=='home')
//{
//	$content='userhome.php';
//}
//else if($sec=='user' and $cmd=='viewtransaction')
//{
//	$content='viewtransaction.php';
//}
//else if($sec=='user' and $cmd=='logout')
//{
//	$user->logout('');
//	redirect('?');
//}
//
//
//
//
//
//if($user->id) {
//	$sql = "SELECT ui.*, un.userName, uin.*
//			FROM tbl_userinfo AS ui
//			LEFT JOIN tbl_username AS un USING(userId)
//			LEFT JOIN tbl_userinst AS uin USING(userId)
//			WHERE userId='$user->id'";
//	//$user->info = $db->getRow($sql);
//}

?>