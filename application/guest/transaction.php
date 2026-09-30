<?php

include_once('./+lib/models/transaction/transaction.php');
include_once('./+lib/function/paging.inc.php');
$transaction=new Transaction();
//echo "dddd";
switch ($cmd) {
    case 'viewtransaction':
		$title = 'مشاهده تراکنشها';
		$content= 'viewtransaction.php';
		
		//set for paging offset...
		$paging=paging('user','viewtransaction','user');
		$pagingoffset=$paging['pagingoffset'];
		$pagingstring=$paging['pagingstring'];
		
		//prepare transaction for where sql...
		$transactions_view_where="";
		if(!empty($_POST['']))
		$transactions_view_where .="";
		if(!empty($_POST['']))
		$transactions_view_where .="";
		if(!empty($_POST['']))
		$transactions_view_where .="";
		if(!empty($_POST['']))
		$transactions_view_where .="";
		if(!empty($_POST['']))
		$transactions_view_where .="";
		if(!empty($_POST['']))
		$transactions_view_where .="";
		if(!empty($_POST['']))
		$transactions_view_where .="";
		
		
		
	
		$transactions=$transaction->getAll('*',$transactions_view_where ,'trans_install_date', 20, $pagingoffset);
		//print_r($transactions);
		//if($transactions and is_array($transactions))
		   //return $transactions;
		   
		break;
		
}


?>