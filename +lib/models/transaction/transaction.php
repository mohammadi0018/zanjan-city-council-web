<?php
/*****************************************************
**	name:				transaction						**
**	version:			1.0							**
**	kind:				Model Implementation		**
**	author:				m.karimi					**
**	create date:		19 Oct 2010					**
**	edit date:			-- --- ----					**
**	PHP Ver.:			5+							**
**	mySql Ver.:			5+							**
**	Requered Classes:	mySqli						** 
******************************************************/

/**
* require news Abstract
*/

require_once './+lib/models/transaction/Interface.php';


class Transaction implements InterfaceTransaction
{	

	public function getAll($params = '*',$where_sql , $order='createDate', $numPerPage='', $offset=0)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$limit = '';
		$newsList = array();

		if(is_array($params))
			$params = implode(',', $params);

		if(!empty($numPerPage) and is_numeric($numPerPage)) {
			$limit = "LIMIT $offset, $numPerPage";
		}

		$sql = "SELECT $params
				FROM tbl_transaction
				where 1=1 $where_sql
				ORDER BY $order desc
				$limit";
				//echo $sql;
		$transaction = $db->getAll($sql);
		//print_r($transaction);
		if($transaction and is_array($transaction))
			return $transaction;
	}//eof


}//end class