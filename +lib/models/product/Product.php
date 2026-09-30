<?php
/*****************************************************
**	name:				Product						**
**	version:			1.0							**
**	kind:				Model Implementation		**
**	author:				O.Aghaei					**
**	create date:		19 Oct 2008					**
**	edit date:			-- --- ----					**
**	PHP Ver.:			5+							**
**	mySql Ver.:			5+							**
**	Requered Classes:	mySqli						** 
******************************************************/

/**
* require product Abstract
*/

require_once './+lib/models/product/Interface.php';


class Product implements InterfaceProduct
{
	public function __construct()
	{
		if(isset($_SESSION['install']['product']) and !$_SESSION['install']['product']) {
			self::install();
		}
	}

	public static function install()
	{
		//create datebase conection
		$db = new DB();

		$sql = '';

		//table group
		$sql = "CREATE TABLE IF NOT EXISTS tbl_product (
				  productId int(10) unsigned NOT NULL auto_increment,
				  product varchar(255) collate utf8_persian_ci default NULL,
				  description text collate utf8_persian_ci,
				  shortDescription varchar(255) collate utf8_persian_ci default NULL,
				  price int(10) unsigned NOT NULL default '0',
				  amount int(10) unsigned NOT NULL default '0',
				  company varchar(255) collate utf8_persian_ci default NULL,
				  keyword varchar(255) collate utf8_persian_ci default NULL,
				  pageTitle varchar(255) collate utf8_persian_ci default NULL,
				  features text collate utf8_persian_ci,
				  status enum('inactive','active','deleted') collate utf8_persian_ci NOT NULL default 'inactive',
				  createDate timestamp NULL default NULL,
				  modifiedDate timestamp NULL default NULL on update CURRENT_TIMESTAMP,
				  PRIMARY KEY  (productId),
				  FULLTEXT KEY product (product),
				  FULLTEXT KEY keyword (keyword)
				) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;

				CREATE TABLE IF NOT EXISTS tbl_productcategory (
				  categoryId tinyint(3) unsigned NOT NULL auto_increment,
				  category varchar(128) collate utf8_persian_ci default NULL,
				  status enum('inactive','active','deleted') collate utf8_persian_ci NOT NULL default 'inactive',
				  createDate timestamp NULL default NULL,
				  modifiedDate timestamp NULL default NULL on update CURRENT_TIMESTAMP,
				  PRIMARY KEY  (categoryId)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;

				CREATE TABLE IF NOT EXISTS tbl_productgroup (
				  groupId int(20) unsigned NOT NULL auto_increment,
				  productId int(10) unsigned NOT NULL,
				  categoryId tinyint(3) unsigned NOT NULL,
				  PRIMARY KEY  (groupId),
				  KEY productId (productId),
				  KEY categoryId (categoryId)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;";
		if($db->multiQuery($sql)) {
			$_SESSION['install']['product'] = 1;
		}else {
			$_SESSION['install']['product'] = 0;
		}
	}

	public function getAll($params='*', $order='createDate DESC')
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$productList = array();
		if(is_array($params))
			$params = implode(',', $params);

		$sql = "SELECT $params
				FROM tbl_product
				WHERE status!='deleted'
				ORDER BY $order
				LIMIT 26";
		$productList = $db->getAll($sql);
		if($productList and is_array($productList))
			return $productList;
	}

	public function getByProductId($productId, $params = '*')
	{
		//create datebase conection
		$db = new DB();
		$sql = '';
		$productRow = array();
		if(is_array($params))
			$params = implode(',', $params);

		$sql = "SELECT $params
				FROM tbl_product
				WHERE status!='deleted' AND productId='$productId'";
		$productRow = $db->getRow($sql);
		if($productRow and is_array($productRow))
			return $productRow;
	}
	public function getByCategoryId($categoryId, $params = '*', $order='createDate DESC')
	{
		//create datebase conection
		$db = new DB();
		
		$sql = '';
		$productList = array();
		if(is_array($params))
			$params = implode(',', $params);

		$sql = "SELECT $params
				FROM tbl_product
				WHERE categoryId='$categoryId' AND status!='deleted'
				ORDER BY $order";
		$productList = $db->getAll($sql);
		if($productList and is_array($productList))
			return $productList;
	}

	public function getCategoryById($categoryId, $params = '*')
	{
		//create datebase conection
		$db = new DB();
		
		$sql = '';
		$category = array();
		if(is_array($params))
			$params = implode(',', $params);

		$sql = "SELECT $params
				FROM tbl_category
				WHERE categoryId='$categoryId' AND status!='deleted'";
		$category = $db->getRow($sql);
		if($category and is_array($category))
			return $category;
		
	}
	
	public function getAllCategories($params = '*', $order='createDate DESC')
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$categoryList = array();
		if(is_array($params))
			$params = implode(',', $params);

		$sql = "SELECT $params
				FROM tbl_category
				WHERE status!='deleted'
				ORDER BY $order";
		$categoryList = $db->getRow($sql);
		if($categoryList and is_array($categoryList))
			return $categoryList;
	}
	
	public function setStatus($productId, $status)
	{
		//create datebase conection
		$db = new DB();
		$sql = '';

		$sql = "UPDATE tbl_product
				SET status='$status'
				WHERE productId='$productId'";
		if($db->query($sql))
			return true;
		else
			return false;
	}

	public function add($params)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$set = 'SET createDate=now()';

		if(!empty($params['status']))
			$set .= ", status='$params[status]'";
		if(!empty($params['product']))
			$set .= ", product='$params[product]'";
		if(!empty($params['description']))
			$set .= ", description='$params[description]'";
		if(!empty($params['shortDescription']))
			$set .= ", shortDescription='$params[shortDescription]'";
		if(!empty($params['price']))
			$set .= ", price='$params[price]'";
		if(!empty($params['amount']))
			$set .= ", amount='$params[amount]'";
		if(!empty($params['company']))
			$set .= ", company='$params[company]'";
		if(!empty($params['keyword']))
			$set .= ", keyword='$params[keyword]'";
		if(!empty($params['pageTitle']))
			$set .= ", pageTitle='$params[pageTitle]'";
		if(!empty($params['features']))
			$set .= ", features='$params[features]'";

		$sql = "INSERT INTO tbl_product
				$set";
		if($db->query($sql))
			return true;
		else
			return false;
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

		$sql = "INSERT INTO tbl_productcategory
				$set";
		if($db->query($sql))
			return true;
		else
			return false;
	}

	public function setCategoryStatus($categoryId, $status)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';

		$sql = "UPDATE tbl_productcategory
				SET status='$status'
				WHERE categoryId='$categoryId'";
		if($db->query($sql))
			return true;
		else
			return false;
	}

	public function update($productId, $params)
	{
		//create datebase conection
		$db = new DB();

		$sql = '';
		$set = 'SET modifiedDate=now()';

		if(!empty($params['status']))
			$set .= ", status='$params[status]'";
		if(!empty($params['product']))
			$set .= ", product='$params[product]'";
		if(!empty($params['description']))
			$set .= ", description='$params[description]'";
		if(!empty($params['shortdescription']))
			$set .= ", shortDescription='$params[shortdescription]'";
		if(!empty($params['price']))
			$set .= ", price='$params[price]'";
		if(!empty($params['amount']))
			$set .= ", amount='$params[amount]'";
		if(!empty($params['company']))
			$set .= ", company='$params[company]'";
		if(!empty($params['keyword']))
			$set .= ", keyword='$params[keyword]'";
		if(!empty($params['pagetitle']))
			$set .= ", pageTitle='$params[pagetitle]'";
		if(!empty($params['features']))
			$set .= ", features='$params[features]'";

		$sql = "UPDATE tbl_product
				$set
				WHERE productId='$productId'";
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

		$sql = "UPDATE tbl_productcategory
				$set
				WHERE categoryId='$productId'";
		if($db->query($sql))
			return true;
		else
			return false;
	}
	public function remove($productId)
	{
		$db = new DB();

		if($this->setStatus($productId, 'deleted'))
			return true;
		else
			return false;
	}
	public function removeCategory($categoryId)
	{
		$db = new DB();

		if($this->setCategoryStatus($categoryId, 'deleted'))
			return true;
		else
			return false;
	}
}