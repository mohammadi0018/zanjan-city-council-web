<?php
session_start();
//require_once('./+lib/ini-set.inc.php');
require_once('./+lib/site.conf.php');
require_once('./+lib/site.func.php');
//require_once('./+lib/site.view.php');

require_once('./+lib/models/db/xdb.model.php');

require_once('./+lib/models/user/user.model.php');

$php_self 		= $_SERVER['PHP_SELF'];
$query_string 	= $_SERVER['QUERY_STRING'];
$href 			= $php_self.(empty($query_string) ? '' : '?'.$query_string);

$section= empty($_REQUEST['section'])? 'guest' : $_REQUEST['section'];
$page  	= empty($_REQUEST['page'])? '' : $_REQUEST['page'];
$cmd  	= empty($_REQUEST['cmd'])? '' : $_REQUEST['cmd'];
$lang = 'fa';

if(!empty($_REQUEST['la'])) {
	$lang = $_REQUEST['la'];
}


?>