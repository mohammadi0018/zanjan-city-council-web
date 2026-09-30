<?php

interface InterfaceTransaction
{
	public function getAll($params = '*',$where_sql , $order='createDate', $numPerPage='', $offset=0);
}
