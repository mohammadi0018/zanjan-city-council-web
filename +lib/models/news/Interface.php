<?php

interface InterfaceNews
{
	static function install();
	public function getAll($params = '*', $order='createDate', $numPerPage='', $offset=0,$sql_where);
	public function getByNewsId($newsid, $params = '*');
	public function getByCategoryId($categoryId, $params = '*', $order='n.createDate', $numPerPage='', $offset=0);
	public function getCategoryById($categoryId, $params = '*');
	public function getAllCategories($params = '*', $order='createDate', $numPerPage='', $offset=0);
	public function add($params);
	public function addCategory($params);
	public function update($newsId, $params);
	public function updateCategory($categoryId, $params);
	public function remove($newsId);
	public function removeCategory($categoryId);
}
