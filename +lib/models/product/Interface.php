<?php

interface InterfaceProduct
{
	static function install();
	public function getAll($params = '*', $order='createDate');
	public function getByProductId($Productid, $params = '*');
	public function getByCategoryId($categoryId, $params = '*', $order='createDate');
	public function getCategoryById($categoryId, $params = '*');
	public function getAllCategories($params = '*', $order='createDate');
	public function setStatus($ProductId, $status);
	public function add($params);
	public function addCategory($params);
	public function setCategoryStatus($categoryId, $status);
	public function update($ProductId, $params);
	public function updateCategory($categoryId, $params);
}