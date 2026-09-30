<?php

function paging($page, $cmd, $sec)
{
	$paging2 = array();
	if(isset($_GET['pagingoffset'])){
	$pagingoffset=trim($_GET['pagingoffset']);
	}
	else{
		$pagingoffset=0;
	}
	
	
	for($offset=0;$offset<10;){
		$paging=$offset*10;
		$offset++;
		
		$pagingstring .="<a href=?page=$page&cmd=$cmd&sec=$sec&pagingoffset=$paging>$offset</a>&nbsp;  &nbsp;";
	}
	
	$paging2['pagingoffset']=$pagingoffset;
	$paging2['pagingstring']=$pagingstring;
	
	return $paging2;

}//eofn

?>