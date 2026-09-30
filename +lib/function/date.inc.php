<?php

function nowDate()
{
	require_once("./+lib/jdf.php");
	$salint = jdate("y");
	$mahint = jdate("m");
	$dayint = jdate("d");
	$minint = jdate("i");
	$hourint = jdate("H");
	$Tarikh = "$salint$mahint$dayint";
	
  $roz=substr($Tarikh,4,2);
  $mah=substr($Tarikh,2,2);
  $sal=substr($Tarikh,0,2);
  $sal="13".$sal;
  
 $day_shamsi=date('w');
  
  switch($day_shamsi)
  {
    
	case "0" :  $final_day_shamsi="یکشنبه";
	break;
	case "1" :  $final_day_shamsi="دوشنبه";
	break;
	case "2" :  $final_day_shamsi="سه شنبه";
	break;
	case "3" :  $final_day_shamsi="چهار شنبه";
	break;
	case "4" :  $final_day_shamsi="پنج شنبه";
	break;
	case "5" :  $final_day_shamsi="جمعه";
	break;
	case "6" :  $final_day_shamsi="شنبه";
	break;
	
  }//end switvch
  

switch($mahint)
  {
    
	case "01" :  $mah_text="فروردین";
	break;
	case "02" :  $mah_text="اردیبهشت";
	break;
	case "03" :  $mah_text="خرداد";
	break;
	case "04" :  $mah_text="تیر";
	break;
	case "05" :  $mah_text="مرداد";
	break;
	case "06" :  $mah_text="شهریور";
	break;
	case "07" :  $mah_text="مهر";
	break;
	case "08" :  $mah_text="آبان";
	break;
	case "09" :  $mah_text="آذر";
	break;
	case "10" :  $mah_text="دی";
	break;
	case "11" :  $mah_text="بهمن";
	break;
	case "12" :  $mah_text="اسفند";
	break;
	
  }//end switvch
  
     $nowDate=" $final_day_shamsi   :" . $roz ."  / " . $mah_text ." / " .$sal;
	 
  	 return $nowDate;
  
}//eofn

?>