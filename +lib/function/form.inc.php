<?php

function checkInput($val, $label, $digit=false)
{
	if($digit==true) {
		if(!empty($val) and is_numeric($val)) {
			return true;
		}else {
			return false;
		}
	}else {
		if(empty($val) or !is_string($val)) {
			return false;		
		}
		return true;
	}
}//eofn
function checkEmail($val)
{
	if(!empty($val)) {
		$arr = explode('@',$val);
		if(count($arr)!=2) {
			$msg = 'فیلد<span style=text-decoration:underline> پست الکترونیکی</span> را با فرمت صحیح وارد کنید';
			return false;		
		}
	}else {
		$msg = '<span style=text-decoration:underline>پست الکترونیکی</span> خودتان را وارد کنید';
		return false;
	}
	return true;
}

function checkUsername($username)
{
	global $db;
	$username = addslashes(trim($username));

	$sql = "SELECT userName
			FROM tbl_username
			WHERE userName='$username' AND status='active'";
	if($db->getOne($sql)) {
		return false;
	}
	return true;
}//eofn

function checkRePassword($pass1, $pass2)
{
	if($pass1 != $pass2)
		return false;
	return true;
}//eofn

function checkPasswordLenght($pass)
{	
	if(empty($pass) or strlen($pass)<6 or strlen($pass)>15 ) {
		return false;
	}
	return true;
}//eofn

function checkEnumInput($gender, $enumvar)
{
	foreach($enumvar as  $var)
		if($gender==$var)
			return $gender;
		$flag=1;
		$msg='جنسیت خودتان را مشخص کنید';
}//eofn
?>