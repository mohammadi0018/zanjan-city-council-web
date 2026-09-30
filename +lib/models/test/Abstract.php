<?php

abstract class AbstractNews
{
	protected $_db;

	/**
	* Force Extending class to define this method
	*/
	public abstract function getAll($params = '*', $order);
	public abstract function getByNewsId($newsid, $params = '*');
	public abstract function getByCategoryId($categoryId, $params = '*', $order);
	public abstract function getCategoryById($categoryId, $params = '*');
	public abstract function getAllCategories($params = '*', $order);
	public abstract function setStatus($newsId, $status);
	public abstract function add($params);
	public abstract function addCategory($params);
	public abstract function setCategoryStatus($categoryId, $status);
	public abstract function update($newsId, $params);
	public abstract function updateCategory($categoryId, $params);

	/**
	* Make Required Tables and startup variables.
	*/
	protected static function install()
	{
		//table group
		$sql = "CREATE TABLE IF NOT EXISTS `tbl_news` (
					`newsId` int(10) unsigned NOT NULL auto_increment,
					`title` varchar(255) collate utf8_persian_ci NOT NULL,
					`text` text collate utf8_persian_ci NOT NULL,
					`status` enum('active','inactive','deleted') collate utf8_persian_ci NOT NULL,
					`createDate` timestamp NULL default NULL,
					`modifiedDate` timestamp NULL default NULL on update CURRENT_TIMESTAMP,
					PRIMARY KEY  (`newsId`)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;

				CREATE TABLE IF NOT EXISTS `tbl_newsgroup` (
					`groupId` int(20) unsigned NOT NULL auto_increment,
					`newsId` int(10) unsigned NOT NULL,
					`categoryId` tinyint(3) unsigned NOT NULL default '1',
					PRIMARY KEY  (`groupId`),
					KEY `newsId` (`newsId`),
					KEY `categoryId` (`categoryId`)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;

				CREATE TABLE IF NOT EXISTS `tbl_newscategory` (
					`categoryId` tinyint(3) unsigned NOT NULL auto_increment,
					`category` varchar(128) collate utf8_persian_ci NOT NULL,
					`status` enum('active','inactive','deleted') collate utf8_persian_ci NOT NULL,
					`createDate` timestamp NULL default NULL,
					`modifiedDate` timestamp NULL default NULL on update CURRENT_TIMESTAMP,
					PRIMARY KEY  (`categoryId`)
				) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=1 ;";
		if($this->_db->multiQuery($sql)) {
			$_SESSION['install']['news'] = 1;
		}else {
			$_SESSION['install']['news'] = 0;	
		}
		die($_SESSION['install']['news']);
	}
	
}
