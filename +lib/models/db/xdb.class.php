<?php

class DB {
	public $link_flag=1;
	public $link='';

	function __construct()
	{
		if($this->link = new mysqli(MYSQLHOST, MYSQLUSER, MYSQLPASS)) {
			$this->link->select_db(MYSQLDB);
			$this->multiQuery('
				SET NAMES "utf8";
				SET collation_connection = "utf8_persian_ci";
				SET collation_server = "utf8_persian_ci";
				SET character_set_client = "utf8";
				SET character_set_connection = "utf8";
				SET character_set_results = "utf8";
				SET character_set_server = "utf8";
				SET CHARACTER SET UTF8;
				SET session collation_connection="utf8_persian_ci";
				DEFAULT CHARSET = "utf8"; ');
		}else {
			$this->link_flag=0;
			echo '::Error::';
			die();
		}
	}//eofn
	function query($sql)
	{
		return $this->link->query($sql);
	}//eofn
	
	function getAll($sql)
	{
		if($result=$this->link->query($sql)) {
			while($row=$result->fetch_array(MYSQLI_ASSOC))
				$list[]=$row;
			return $list;
		}else {
			return false;
		}
	}//eofn
	function getRow($sql)
	{
		if($result=$this->link->query($sql)) {
			$list=$result->fetch_array(MYSQLI_ASSOC);
			return $list;
		}else {
			return false;
		}
	}//eofn
	function getOne($sql)
	{
		if($result=$this->link->query($sql)) {
			$list=$result->fetch_row();
			$list=$list[0];
			return $list;
		}else {
			return false;
		}
	}//eofn
	function multiQuery($query, $params = array())
	{
		if(empty($query)) return NULL;
		
		$qLine = explode("\n", $query);
		foreach($qLine as $key=>$q) {
			$qLine[$key] = trim($q);
		}
		$query = implode("\n", $qLine);
		$qLine = explode(";\n", $query);
		foreach($qLine as $key=>$q) {
			if(trim($q)){
				$res[] = $this->link->query($q);
			}	
		}
		return $res;
	}//eofn
	public function lastId()
	{
		return mysqli_insert_id($this->link);
	}
	
	public function getOption($list, $index, $name)
	{
		if($list) {
			for ($i = 0; $i < count($list); $i ++)
			$options[$list[$i][$index]] = $list[$i][$name];
			
			if ($options)
			return $options;
		}
	}//eofn
	
}//eocl

?>