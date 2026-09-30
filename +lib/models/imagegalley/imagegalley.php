<?php
/*****************************************************
**	name:				Interfaceimagegalley						**
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

require_once './+lib/models/imagegalley/Interface.php';


class Imagegalley implements Interfaceimagegalley
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
				FROM imagegalley  
				where 1=1 $sql_where
				ORDER BY $order desc
				$limit";
				//echo $sql;
		$newsList = $db->getAll($sql);
		if($newsList and is_array($newsList))
			return $newsList;
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
				FROM imagegalley
				WHERE id='$newsId'";
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
		
		$sql = "UPDATE imagegalley
				SET countViewer='$countViewer'
				WHERE id='$newsId'";
				//echo $sql;
		if($db->query($sql))
			return true;
		else
			return false;
	}
	
	public function upload()
		{

		chmod("images", 0777); 
			  if (isset ($_FILES['picture'])){
					  $imagename = $_FILES['picture']['name'];
					 if(!$imagename == "")
					  {
					  $source = $_FILES['picture']['tmp_name'];
		
					  $imagetype = $_FILES['picture']['type'];
					  
					  $target1 = "images/galleyimage/".$imagename;
				
					  move_uploaded_file($source, $target1);
					  //echo $target1;
					return $target1;
					
				 } 
			}	
				 else
				 {
				 echo "error uplode";
				 }	  
	}

	public function add($params)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$set = 'SET ';
	    $categoryid=$params['category'];
		
		if(!empty($params['category']))
			$set .= " categoryid='$params[category]'";
		if(!empty($params['title']))
			$set .= ", title='$params[title]'";
		if(!empty($params['text']))
			$set .= ", description='$params[text]'";
		
		//set for picure	
		$picture= $this->upload();
		if($picture!="")
		$set .= ", image='$picture'";

		$sql = "INSERT INTO imagegalley
				$set";
				//echo $sql;
		$result = $db->query($sql);
		if($result)
			{
			return true;
			}
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
		$set = 'SET ';

		if(!empty($params['category']))
			$set .= " categoryid='$params[category]'";
		if(!empty($params['title']))
			$set .= ", title='$params[title]'";
		if(!empty($params['text']))
			$set .= ", description='$params[text]'";
			
		//set for picure	
		$picture= $this->upload();
		if($picture!="")
		$set .= ", image='$picture'";
		
		

		$sql = "UPDATE imagegalley
				$set
				WHERE id='$newsId'";
				//echo $sql;
		if($db->query($sql))
			return true;
		else
			return false;	
	}	

	
	public function remove($newsId)
	{
		$db = new DB();
		$sql = "delete from imagegalley where id='$newsId'";
		//echo $sql;
		$db->query($sql);
	}
	

}