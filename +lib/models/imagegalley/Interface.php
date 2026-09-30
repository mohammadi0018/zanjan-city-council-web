<?php

interface Interfaceimagegalley
{
	
	public function getAll($params = '*', $order='createDate', $numPerPage='', $offset=0,$sql_where);
	public function getByNewsId($newsid, $params = '*');
	public function add($params);
	public function update($newsId, $params);
	public function remove($newsId);
}
