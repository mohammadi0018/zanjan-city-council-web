<?php

switch($cmd) {
	case 'contact':
		$title = 'Contact Us';
		$content = 'contact.tpl';
		if(!empty($_POST)) {
			// Email a copy of the message to person completing the form
			include_once('./+lib/function/form.inc.php');
			$flag = 0;
			if(empty($_POST['name'])) {
				if($flag == 0) {
					$flag = 1;
					if($lang == 'en')
						$msg = 'please insert your First Name';
					else
						$msg = 'لطفا نام خود را وارد کنید';
				}
			}
			if(!checkEmail($_POST['email'], 'E-mail Address')){
				if($flag == 0) {
					$flag = 1;
					if($lang == 'en')
						$msg = 'please insert your E-mail Address with correct format';
					else
						$msg = 'لطفا آدرس ایمیلتان را وارد کنید';	
				}
			}
			if(empty($_POST['message'])) {
				if($flag == 0) {
					$flag = 1;
					if($lang == 'en')
						$msg = 'please insert mail message';
					else
						$msg = ' لطفا متن ایمیلتان را وارد کنید ';
				}
			}
			if($flag == 0) {
				$mailInfo = array();
				$mailInfo = $_POST;
				$mailMsg = '';
				$mailMsg .= 'name: ' . $mailInfo['name'] . "\n";
				$mailMsg .= 'company: ' . $mailInfo['company'] . "\n";
				$mailMsg .= 'phonne Number: ' . $mailInfo['phone'] . "\n";
				$mailMsg .= 'E-mail: ' . $mailInfo['email'] . "\n";
				$mailMsg .= 'Message: ' . $mailInfo['message'] . "\n";
				@mail('info@parschemco.com', $mailInfo['name'], $mailMsg, "From: parschemco.ir");
				$msg = 'sended';
				$smarty->assign('mail','mail');
			}else {
				$list = $_POST;
				$smarty->assign('alert','alert');			
			}
		}
		break;
	case 'order':
		$title = 'Order Form';
		$content = 'order.tpl';
		if(!empty($_POST)) {
			// Email a copy of the message to person completing the form
			include_once('./+lib/function/form.inc.php');
			$flag = 0;
			if(empty($_POST['name'])) {
				if($flag == 0) {
					$flag = 1;
					if($lang == 'en')
						$msg = 'please insert your First Name';
					else
						$msg = 'لطفا نام خود را وارد کنید';				}
			}
			if(!checkEmail($_POST['email'], 'E-mail Address')){
				if($flag == 0) {
					$flag = 1;
					if($lang == 'en')
						$msg = 'please insert your E-mail Address with correct format';
					else
						$msg = 'لطفا آدرس ایمیلتان را وارد کنید';
				}
			}
			if(empty($_POST['message'])) {
				if($flag == 0) {
					$flag = 1;
					if($lang == 'en')
						$msg = 'please insert mail message';
					else
						$msg = ' لطفا متن سفارشتان را وارد کنید ';				}
			}
			if($flag == 0) {
				$mailInfo = array();
				$mailInfo = $_POST;
				$mailMsg = '';
				$mailMsg .= 'name: ' . $mailInfo['name'] . "\n";
				$mailMsg .= 'company: ' . $mailInfo['company'] . "\n";
				$mailMsg .= 'phonne Number: ' . $mailInfo['phone'] . "\n";
				$mailMsg .= 'E-mail: ' . $mailInfo['email'] . "\n";
				$mailMsg .= 'Message: ' . $mailInfo['message'] . "\n";
				@mail('info@parschemco.com', $mailInfo['name'], $mailMsg, "From: parschemco.ir");
				$msg = 'sended';
				$smarty->assign('mail','mail');
			}else {
				$list = $_POST;
				$smarty->assign('alert','alert');			
			}
		}
		break;
}

?>