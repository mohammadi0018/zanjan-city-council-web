<?php

require_once('+lib/site.module.php');

$layout 	= empty($config['main']['layout']) ? 'index.tpl' : $config['main']['layout'];
$content	= empty($content) ? 'home.php' : $content;


if( ($section=='guest') or
	($section=='user' and @$user->group=='user') or
	($section=='user' and @$user->group=='admin') or
	($section=='admin' and @$user->group=='admin')
) {
	
	if(file_exists('application/'.$section.'/'.$page.'.php')) {
		require_once('application/'.$section.'/'.$page.'.php');
		if($section=='admin' and @$user->group=='admin')
			$layout = 'admin/index.php';
	}else {
		if($section=='admin' and @$user->group=='admin') {
			$layout  = 'admin/index.php';
			$content = 'admin/home.php';
		}else {
			include_once('application/guest/home.php');
		}
	}
}else {
	
	require('application/guest/login.php');
}


$lang=$_GET['la'];
$sec=$_GET['sec'];
if($lang=="")
$lang="fa";
if($sec=="admin")
$lang="admin";
if($sec=="user")
$lang="user";

$layout = $lang . DIRECTORY_SEPARATOR . $layout;
$content = $lang . DIRECTORY_SEPARATOR . $content;
if($content=="fa\home.tpl")
$content="fa\home.php";
//echo $content;
//echo "'application/'.$section.'/'.$page.'.php'";
//echo $content;
//smarty variable assign
//$smarty->assign('content', @$content);
//$smarty->assign('title', @$title);
//$smarty->assign('section', @$section);
//$smarty->assign('page', @$page);
//$smarty->assign('user', @$user);
//$smarty->assign('list', @$list);
//$smarty->assign('cmd', @$cmd);
//$smarty->assign('msg', @$msg);
//$smarty->assign('P', @$P);
//$smarty->assign('test', 'alooooooooooooo');
//$smarty->assign('lang', @$lang);

if($sec=="admin")
{
	if(!($user->id))
		{
		include("application/view/admin/login.php");
		}
		else
		{
		include("application/view/admin/index.php");
		}
}
else if($sec=="user")
{
	include("application/view/user/index.php");

}
else if($sec=="")
{
		if($page=="")
		{
			include("application/view/fa/index.php");
		}
		else if($page=="staticpage")
		{
			include("application/view/fa/indexstaicpage.php");
		}
		else 
		{
			include("application/view/fa/indexOtherPage.php");
		}
}


//$smarty->display($layout?$layout:'_null.tpl');

?>