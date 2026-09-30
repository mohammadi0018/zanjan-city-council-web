<?php

	if(!empty($_GET[xml])){
	$src = file_get_contents($_GET[xml]);
	
			preg_match_all('@<description[^>]*?>.*?</description>@siu',  $src , $matches );
			
			$mt = $matches[0][1] ;
			
			if(!empty($mt)){
			$mt=str_replace("<description><![CDATA[","",$mt);
			$mt=str_replace("]]>
	</description>","",$mt);
	
	$mt = explode("<img",$mt); // />

	
	$mt = $mt[0];
	
	$mt = str_replace("Temperature","دمای کنونی",$mt);
	$mt = str_replace("Humidity","رطوبت هوا",$mt);
	$mt = str_replace("Wind Direction","جهت باد",$mt);
	$mt = str_replace("Wind Speed","سرعت باد",$mt);
	
	$mt = explode("|",$mt);
	
	//print_R($mt);

?>
<table align="center" style="width:100%;" dir="rtl">

	<tr>
		<td id="img">
		<?
			$con = $mt[3];
			$con = explode(":",$con);
			$con = $con[1];
			$con = str_replace(" ","",$con);
			switch($con){
				case "Clear";
				$img = "images/fair.png";
				break;
				
				case "PartlyCloudy";
				$img = "images/pcloudy.png";
				break;

				case "MostlyCloudy";
				$img = "images/cloudy.png";
				break;
				
				case "Haze";
				$img = "images/fog.png";
				break;
				
				case "ScatteredClouds";
				$img = "images/cloudy.png";
				break;
				
				case "Mist";
				$img = "images/fog.png";
				break;
				
				case "Fog";
				$img = "images/fog.png";
				break;
				
				case "Overcast";
				$img = "images/cloudy.png";
				break;
				
				case "LightSnow";
				$img = "images/flurries.png";
				break;
				
				case "LightSnowShowers";
				$img = "images/rainsnow.png";
				break;
				
				case "LightSnowMist";
				$img = "images/fog.png";
				break;
				
				case "HeavySnow";
				$img = "images/snowshow.png";
				break;
				
				case "HeavySnowMist";
				$img = "images/snowshow.png";
				break;
				
				case "LightSnowMist";
				$img = "images/flurries.png";
				break;
				
				case "SnowMist";
				$img = "images/snowshow.png";
				break;
				
				case "LightSnow";
				$img = "images/flurries.png";
				break;
				
				case "FreezingFog";
				$img = "images/fog.png";
				break;
				
				case "LightRainSnow";
				$img = "images/rainsnow.png";
				break;
				
				case "Rain";
				$img = "images/lshowers.png";
				break;
				
				case "ShallowFog";
				$img = "images/fog.png";
				break;
				
				case "PatchesFogMist";
				$img = "images/fog.png";
				break;
				
				case "IceCrystals";
				$img = "images/flurries.png";
				break;
				
				case "HeavyRainShowers";
				$img = "images/lshowers.png";
				break;
				
				case "FunnelCloud";
				$img = "images/cloudy.png";
				break;
				
				default :
				$img = "images/unknown.png";
				break;
			
			}
		
		?>
		<img src="<?=$img ?>" align="middle"/>
		</td>
	</tr>
	<?
	
	foreach($mt as $key=>$val){
		if($key!='2' && $key != '3'){
	?>
	<tr>
		<td id="info<?=$key?>">
			<?
			if($key==0){
			
			$val = explode("/",$val);
			$val = "دمای کنونی : ".$val[1];
			}
			print $val;
			
			?>
		</td>
	</tr>
	<? }} ?>
</table>
<? } else { ?>
اطلاعاتی در دست نمی باشد.
<? }} else { ?>
اطلاعاتی در دست نمی باشد.
<?}?>