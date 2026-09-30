<?php
/*****************************************************
**	name:				Staticpage						**
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

require_once './+lib/models/staticpage/Interface.php';


class Staticpage implements InterfaceStaticpage
{	

	public function getAll($params = '*', $order='createDate', $numPerPage='', $offset=0,$sql_where)
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
				FROM static_page 
				where 1=1 $sql_where
				ORDER BY $order desc
				$limit";
				//echo $sql;
		$newsList = $db->getAll($sql);
		if($newsList and is_array($newsList))
			return $newsList;
	}
	
	
	public function add($params)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
        $set = 'SET createDate=now()';
		//print_r($params);
		if(!empty($params['categoryid']))
			$set .= ", parent='$params[categoryid]'";
		if(!empty($params['content']))
			$set .= ", content='$params[content]'";
		if(!empty($params['title']))
			$set .= ", title='$params[title]'";

		$sql = "INSERT INTO static_page
				$set";
			//echo $sql;
		if($db->query($sql))
			return true;
		else
			return false;
	}
	

	public function getByNewsId($newsId, $params = '*')
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$newsRow = array();
		if(is_array($params))
			$params = implode(',', $params);

		$sql = "SELECT $params
				FROM static_page
				WHERE page_id='$newsId'";
				//echo $sql;		
		$newsRow = $db->getRow($sql);
		if($newsRow and is_array($newsRow))
			return $newsRow;
	}

	

	public function setCountViewer($newsId)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';

		
		$listnews=$this->getByNewsId($newsId, $params = '*');
		$countViewer=$listnews['countViewer'];
		//print_r($listnews);
		$countViewer++;
		
		$sql = "UPDATE static_page
				SET countViewer='$countViewer'
				WHERE page_id='$newsId'";
				//echo $sql;
		if($db->query($sql))
			return true;
		else
			return false;
	}

	
	public function getCurrentInsertIid($table)
	{
		$db = new DB();
		$q = "SELECT LAST_INSERT_ID() FROM $table";
		$link=$db->query($q);
		return mysql_num_rows($link) + 1;
	}

	
	public function update($newsId, $params)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';


		if(!empty($params['content']))
			$set .= " content='$params[content]'";

		$sql = "UPDATE static_page set
				$set
				WHERE page_id='$newsId'";
				//echo $sql;
		if($db->query($sql))
			return true;
		else
			return false;	
	}	

	
	public function remove($newsId)
	{
		$db = new DB();
		$sql = "delete from static_page where page_id='$newsId' and parent<>'0'";
		//echo $sql;
		$db->query($sql);
	}

}
?>  