<?php
/*****************************************************
**	name:				News						**
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

require_once './+lib/models/news/Interface.php';


class News implements InterfaceNews
{	
	public function __construct()
	{
		if(isset($_SESSION['install']['news']) and !$_SESSION['install']['news']) {
			self::install();
		}
	}

	public static function install()
	{
		//create datebase conection
		$db = new DB();

		//table group
		$sql = "CREATE TABLE IF NOT EXISTS tbl_news (
				  newsId int(10) unsigned NOT NULL auto_increment,
				  title varchar(255) collate utf8_persian_ci default NULL,
				  text text collate utf8_persian_ci,
				  status enum('inactive','active','deleted') collate utf8_persian_ci NOT NULL default 'inactive',
				  createDate timestamp NULL default NULL,
				  modifiedDate timestamp NULL default NULL on update CURRENT_TIMESTAMP,
				  PRIMARY KEY  (newsId)
				) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=3 ;

				CREATE TABLE IF NOT EXISTS tbl_newsgroup (
					groupId int(20) unsigned NOT NULL auto_increment,
					newsId int(10) unsigned NOT NULL,
					categoryId tinyint(3) unsigned NOT NULL default '1',
					PRIMARY KEY  (groupId),
					KEY newsId (newsId),
					KEY categoryId (categoryId)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;

				CREATE TABLE IF NOT EXISTS tbl_newscategory (
					categoryId tinyint(3) unsigned NOT NULL auto_increment,
					category varchar(128) collate utf8_persian_ci NOT NULL,
					status enum('inactive','active','deleted') collate utf8_persian_ci NOT NULL default 'inactive',
					createDate timestamp NULL default NULL,
					modifiedDate timestamp NULL default NULL on update CURRENT_TIMESTAMP,
					PRIMARY KEY  (categoryId)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;";
		if($db->multiQuery($sql)) {
			$_SESSION['install']['news'] = 1;
		}else {
			$_SESSION['install']['news'] = 0;
		}
	}

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
				FROM tbl_news  
				inner join tbl_newscategory using(categoryId)
				where 1=1 $sql_where
				ORDER BY $order desc
				$limit";
				//echo $sql;
		$newsList = $db->getAll($sql);
		if($newsList and is_array($newsList))
			return $newsList;
	}
	
		public function getSpecialNews($params = '*', $order='createDate', $numPerPage='', $offset=0,$where)
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
				FROM tbl_news
				where 1=1 $where 
				ORDER BY $order desc
				$limit";
				//echo $sql;
		$newsList = $db->getAll($sql);
		if($newsList and is_array($newsList))
			return $newsList;
	}
	
	public function getMaghale($params = '*', $order='createDate', $numPerPage='', $offset=0,$where)
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
				FROM tbl_news  
				left join  tbl_newsgroup using(newsId)
				left join  tbl_newscategory using(categoryId)
				where 1=1 $where 
				ORDER BY $order desc
				$limit";
				//echo $sql;
		$newsList = $db->getAll($sql);
		if($newsList and is_array($newsList))
			return $newsList;
	}
	

	public function getAllCategories($params = '*', $order='createDate', $numPerPage='', $offset=0)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$limit = '';
		$categoryList = array();
		if(is_array($params))
			$params = implode(',', $params);

		if(!empty($numPerPage) and is_numeric($numPerPage)) {
			$limit = "LIMIT $offset, $numPerPage";
		}

		$sql = "SELECT $params
				FROM tbl_newscategory
				ORDER BY $order
				$limit";
				//echo $sql;
		//error_reporting(E_ALL);
		//ini_set('display_errors', '1');

		$categoryList = $db->getAll($sql);
		
		//print($categoryList);
		//print_r($categoryList);
		if($categoryList and is_array($categoryList))
			return $categoryList;
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
				FROM tbl_news
				WHERE newsId='$newsId'";
				//echo $sql;		
		$newsRow = $db->getRow($sql);
		if($newsRow and is_array($newsRow))
			return $newsRow;
	}

	public function getByCategoryId($categoryId, $params = '*', $order='n.createDate', $numPerPage='', $offset=0)
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
				FROM tbl_news AS n
				LEFT JOIN tbl_newsgroup AS ng USING(newsId)
				LEFT JOIN tbl_newscategory AS nc USING(categoryId)
				WHERE ng.categoryId='$categoryId'
				ORDER BY $order desc
				$limit";
		$newsList = $db->getAll($sql);
		if($newsList and is_array($newsList))
			return $newsList;
	}

	public function getCategoryById($categoryId, $params = '*')
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$categoryList = array();
		if(is_array($params))
			$params = implode(',', $params);
        
		$sql = "SELECT $params
				FROM tbl_category
				WHERE categoryId='$categoryId'";
		$categoryList = $db->getAll($sql);
		if($categoryList and is_array($categoryList))
			return $categoryList;
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
		
		$sql = "UPDATE tbl_news
				SET countViewer='$countViewer'
				WHERE newsId='$newsId'";
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
					  
					  $target1 = "images/newsimage/".$imagename;
				
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
		$set = 'SET createDate=now()';
	    $categoryid=$params['category'];
		
		if(!empty($params['category']))
			$set .= ", categoryId='$params[category]'";
		if(!empty($params['title']))
			$set .= ", title='$params[title]'";
		if(!empty($params['text']))
			$set .= ", text='$params[text]'";
		
		//set for picure	
		$picture= $this->upload();
		if($picture!="")
		$set .= ", picture='$picture'";

		$sql = "INSERT INTO tbl_news
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

	public function addCategory($params)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
        $set = 'SET createDate=now()';

		if(!empty($params['status']))
			$set .= ", status='$params[status]'";
		if(!empty($params['category']))
			$set .= ", category='$params[category]'";

		$sql = "INSERT INTO tbl_newscategory
				$set";
		if($db->query($sql))
			return true;
		else
			return false;
	}

	public function update($newsId, $params)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$set = 'SET modifiedDate=now()';

		if(!empty($params['category']))
			$set .= ", categoryId='$params[category]'";
		if(!empty($params['title']))
			$set .= ", title='$params[title]'";
		if(!empty($params['text']))
			$set .= ", text='$params[text]'";
			
		//set for picure	
		$picture= $this->upload();
		if($picture!="")
		$set .= ", picture='$picture'";
		
		

		$sql = "UPDATE tbl_news
				$set
				WHERE newsId='$newsId'";
				//echo $sql;
		if($db->query($sql))
			return true;
		else
			return false;	
	}	

	public function updateCategory($categoryId, $params)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$set = 'SET modifiedDate=now()';

		if(!empty($params['status']))
			$set .= ", status='$params[status]'";
		if(!empty($params['category']))
			$set .= ", category='$params[category]'";

		$sql = "UPDATE tbl_newscategory
				$set
				WHERE categoryId='$newsId'";
		if($db->query($sql))
			return true;
		else
			return false;		
	}

	private function setCategoryStatus($categoryId, $status)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';

		$sql = "UPDATE tbl_newscategory
				SET status='$status'
				WHERE categoryId='$categoryId'";
		if($db->query($sql))
			return true;
		else
			return false;
	}
	public function remove($newsId)
	{
		$db = new DB();
		$sql = "delete from tbl_news where newsid='$newsId'";
		//echo $sql;
		$db->query($sql);
	}
	public function removeCategory($categoryId)
	{
		$db = new DB();
		$sql = '';

		if($this->setCategoryStatus($categoryId, 'deleted'))
			return true;
		else
			return false;
	}

}
?>