<?php //include("application/view/head.php");

$lang=$_GET['la'];
if($lang=="")
$lang="fa";

include_once('./+lib/models/news/News.php');
include_once('./+lib/models/staticpage/Staticpage.php');

$title = 'news';
$newsmanager = new News();
$staticpageobj=new Staticpage();
$news= $newsmanager->getAll('*','createDate',20,0,"");
$headermsg= $staticpageobj->getAll('*','createDate',20,0," and page_id='78'");
?>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>سایت اطلاع رسانی شورای شهر زنجان</title>
<link href="css/layout_fa.css" rel="stylesheet" type="text/css" />
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

<script src="js/slide.js" type="text/javascript"></script>
<script  type="text/javascript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_1114174418_0) return;
        window.mm_menu_1114174418_0 = new Menu("root",150,21,"Tahoma",11,"#000000","#FFFFFF","#8CB0C8","#4A7C9D","right","middle",5,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_1114174418_0.addMenuItem("رئیس شورا","location='index.php?page=staticpage&cmd=staticpageview&page_id=1'");
  mm_menu_1114174418_0.addMenuItem("نايب رئيس شورا ","location='index.php?page=staticpage&cmd=staticpageview&page_id=2'");
  mm_menu_1114174418_0.addMenuItem("خزانه دار شورا ","location='index.php?page=staticpage&cmd=staticpageview&page_id=3'");
  mm_menu_1114174418_0.addMenuItem(" منشي هيئت رئيسه  ","location='index.php?page=staticpage&cmd=staticpageview&page_id=74'");
  mm_menu_1114174418_0.addMenuItem("منشي دوم هيئت رئيسه","location='index.php?page=staticpage&cmd=staticpageview&page_id=75'");
   mm_menu_1114174418_0.hideOnMouseOut=true;
   mm_menu_1114174418_0.bgColor='#FFFFFF';
   mm_menu_1114174418_0.menuBorder=1;
   mm_menu_1114174418_0.menuLiteBgColor='';
   mm_menu_1114174418_0.menuBorderBgColor='';
   window.mm_menu_1114175031_0 = new Menu("root",130,27,"Tahoma",11,"#000000","#FFFFFF","#8CB0C8","#4A7C9D","right","middle",5,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_1114175031_0.addMenuItem("جلسات&nbsp;عمومی&nbsp;شورا","location='index.php?page=staticpage&cmd=staticpageview&page_id=92'");
  mm_menu_1114175031_0.addMenuItem("بازدیدها","location='index.php?page=staticpage&cmd=staticpageview&page_id=93'");
  mm_menu_1114175031_0.addMenuItem("پروژه&nbsp;ها&nbsp;و&nbsp;طرح&nbsp;ها","location='index.php?page=staticpage&cmd=staticpageview&page_id=94'");
  mm_menu_1114175031_0.addMenuItem("افتتاحیه&nbsp;ها","location='index.php?page=staticpage&cmd=staticpageview&page_id=95'");
  mm_menu_1114175031_0.addMenuItem("اشخاص&nbsp;و&nbsp;اعضای&nbsp;شورا","location='index.php?page=staticpage&cmd=staticpageview&page_id=96'");
  mm_menu_1114175031_0.addMenuItem("شهر&nbsp;زنجان","location='index.php?page=staticpage&cmd=staticpageview&page_id=97'");
   mm_menu_1114175031_0.hideOnMouseOut=true;
   mm_menu_1114175031_0.bgColor='#FFFFFF';
   mm_menu_1114175031_0.menuBorder=1;
   mm_menu_1114175031_0.menuLiteBgColor='';
   mm_menu_1114175031_0.menuBorderBgColor='';
   
window.mm_menu_1114174514_0 = new Menu("root",130,27,"Tahoma",11,"#000000","#FFFFFF","#8CB0C8","#4A7C9D","right","middle",5,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_1114174514_0.addMenuItem("اخبار","location='index.php?page=news&cmd=archive&category=1'");
  mm_menu_1114174514_0.addMenuItem("شورا و نطق ها و مصاحبه ها","location='index.php?page=news&cmd=archive&category=3'");
  mm_menu_1114174514_0.addMenuItem("مصوبات","location='index.php?page=news&cmd=archive&category=4'");
  mm_menu_1114174514_0.addMenuItem("لوایح","location='index.php?page=news&cmd=archive&category=5'");
  mm_menu_1114174514_0.addMenuItem("طرح&nbsp;ها","location='index.php?page=news&cmd=archive&category=6'");
   mm_menu_1114174514_0.hideOnMouseOut=true;
   mm_menu_1114174514_0.bgColor='#FFFFFF';
   mm_menu_1114174514_0.menuBorder=1;
   mm_menu_1114174514_0.menuLiteBgColor='';
   mm_menu_1114174514_0.menuBorderBgColor='';
window.mm_menu_1114174931_0 = new Menu("root",130,27,"Tahoma",11,"#000000","#FFFFFF","#8CB0C8","#4A7C9D","right","middle",5,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_1114174931_0.addMenuItem("کمیسیون توسعه و عمران شهري","location='index.php?page=staticpage&cmd=staticpageview&page_id=4'");
  mm_menu_1114174931_0.addMenuItem("کمیسیون فرهنگی واجتماعي و زيست شهری","location='index.php?page=staticpage&cmd=staticpageview&page_id=5'");
  mm_menu_1114174931_0.addMenuItem("کمیسیون اداري و مالي و برنامه و بودجه","location='index.php?page=staticpage&cmd=staticpageview&page_id=6'");
  mm_menu_1114174931_0.addMenuItem("کمیسیون طرح و برنامه","location='index.php?page=staticpage&cmd=staticpageview&page_id=7'");
  mm_menu_1114174931_0.addMenuItem("کمیسیون پیگیري و نظارت","location='index.php?page=staticpage&cmd=staticpageview&page_id=8'");
   mm_menu_1114174931_0.hideOnMouseOut=true;
   mm_menu_1114174931_0.bgColor='#FFFFFF';
   mm_menu_1114174931_0.menuBorder=1;
   mm_menu_1114174931_0.menuLiteBgColor='';
   mm_menu_1114174931_0.menuBorderBgColor='';

    window.mm_menu_1114175123_0 = new Menu("root",130,27,"Tahoma",11,"#000000","#FFFFFF","#8CB0C8","#4A7C9D","right","middle",5,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_1114175123_0.addMenuItem("اعضای&nbsp;دور&nbsp;چهارم","location='index.php?page=staticpage&cmd=staticpageview&page_id=167'");
  mm_menu_1114175123_0.addMenuItem("اعضای&nbsp;دور&nbsp;سوم","location='index.php?page=staticpage&cmd=staticpageview&page_id=11'");
  mm_menu_1114175123_0.addMenuItem("اعضای&nbsp;دور&nbsp;دوم","location='index.php?page=staticpage&cmd=staticpageview&page_id=10'");
  mm_menu_1114175123_0.addMenuItem("اعضای&nbsp;دور&nbsp;اول","location='index.php?page=staticpage&cmd=staticpageview&page_id=10'");
   mm_menu_1114175123_0.hideOnMouseOut=true;
   mm_menu_1114175123_0.bgColor='#FFFFFF';
   mm_menu_1114175123_0.menuBorder=1;
   mm_menu_1114175123_0.menuLiteBgColor='';
   mm_menu_1114175123_0.menuBorderBgColor='';
  window.mm_menu_1114175232_0 = new Menu("root",130,27,"Tahoma",11,"#000000","#FFFFFF","#8CB0C8","#4A7C9D","right","middle",5,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_1114175232_0.addMenuItem("تاریخچه","location='index.php?page=staticpage&cmd=staticpageview&page_id=12'");
  mm_menu_1114175232_0.addMenuItem("وظایف&nbsp;و&nbsp;اختیارات&nbsp;شورا","location='index.php?page=staticpage&cmd=staticpageview&page_id=13'");
  mm_menu_1114175232_0.addMenuItem("قوانین&nbsp;و&nbsp;آیین&nbsp;نامه&nbsp;ها","location='index.php?page=staticpage&cmd=staticpageview&page_id=14'");
  mm_menu_1114175232_0.addMenuItem("عملکرد&nbsp;شورا","location='index.php?page=staticpage&cmd=staticpageview&page_id=15'");
  mm_menu_1114175232_0.addMenuItem("گالری&nbsp;فیلم&nbsp;و&nbsp;تصاویر&nbsp;شورا","location='index.php?page=staticpage&cmd=staticpageview&page_id=76'");
   mm_menu_1114175232_0.hideOnMouseOut=true;
   mm_menu_1114175232_0.bgColor='#FFFFFF';
   mm_menu_1114175232_0.menuBorder=1;
   mm_menu_1114175232_0.menuLiteBgColor='';
   mm_menu_1114175232_0.menuBorderBgColor='';

mm_menu_1114175232_0.writeMenus();
} // mmLoadMenus()

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script src="js/SpryValidationTextField.js" type="text/javascript"></script>
<link href="css/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />
<link href="css/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/mm_menu.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</head>

<body onload="MM_preloadImages('images/farsi1.gif','images/english1.gif')">
<script language="JavaScript1.2">mmLoadMenus();</script>
<div id="wrapper">
  <div class="back" id="heder">
    <table width="778" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="354" rowspan="2"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="340" height="165">
          <param name="movie" value="flash/Untitled-2.swf" />
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="swfversion" value="6.0.65.0" />
          <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
          <param name="expressinstall" value="Scripts/expressInstall.swf" />
          <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
          <!--[if !IE]>-->
          <object type="application/x-shockwave-flash" data="flash/Untitled-1.swf" width="340" height="165">
            <!--<![endif]-->
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="swfversion" value="6.0.65.0" />
            <param name="expressinstall" value="Scripts/expressInstall.swf" />
            <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
            <div>
              <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
              <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
            </div>
            <!--[if !IE]>-->
          </object>
          <!--<![endif]-->
        </object></td>
        <td width="421" height="98">&nbsp;</td>
        <td width="10" rowspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" height="50" valign="middle"><?php echo $headermsg[0]['content']?></td>
      </tr>
    </table>
  </div>
  <div id="menu">
    <table width="990" height="37" border="0" cellpadding="0" cellspacing="0">
      <tr>
       
     
        <td width="139" align="center" valign="middle"><a href="#" name="link11" id="link2" onmouseover="MM_showMenu(window.mm_menu_1114174514_0,-49,25,null,'link11')" onmouseout="MM_startTimeout();">آرشیو</a></td>
      
	
        <td width="2" align="center" valign="middle"><img src="images/khat.gif" width="2" height="26" /></td>
        <td width="139" align="center" valign="middle"><a href="#" name="link7" id="link4" onMouseOver="MM_showMenu(window.mm_menu_1114175031_0,-30,25,null,'link7')" onMouseOut="MM_startTimeout();">گالری تصاویر</a></td>
      
	   
	   
	   	
	   <td width="2" align="center" valign="middle"><img src="images/khat.gif" width="2" height="26" /></td>
        <td width="139" align="center" valign="middle"><a href="#" name="link10" id="link3" onmouseover="MM_showMenu(window.mm_menu_1114174931_0,-33,25,null,'link10')" onmouseout="MM_startTimeout();">کميسيون ها</a></td>
	   <td width="2" align="center" valign="middle"><img src="images/khat.gif" width="2" height="26" /></td>
        <td width="139" align="center" valign="middle"><a href="#" name="link9" id="link5" onmouseover="MM_showMenu(window.mm_menu_1114175123_0,-30,25,null,'link9')" onmouseout="MM_startTimeout();">اعضای شورا</a></td>
		<td width="2" align="center" valign="middle"><img src="images/khat.gif" width="2" height="26" /></td>
        <td width="139" align="center" valign="middle"><a href="" name="link8" id="link1" onmouseover="MM_showMenu(window.mm_menu_1114174418_0,-30,25,null,'link8')" onmouseout="MM_startTimeout();">حوزه ریاست</a></td>
	   <td width="2" align="center" valign="middle"><img src="images/khat.gif" width="2" height="26" /></td>
	   <td width="139" align="center" valign="middle"><a href="#" name="link12" id="link6" onmouseover="MM_showMenu(window.mm_menu_1114175232_0,-33,25,null,'link12')" onmouseout="MM_startTimeout();">درباره شورا</a></td>
        <td width="2" align="center" valign="middle"><img src="images/khat.gif" width="2" height="26" /></td>
        <td width="139" align="center" valign="middle"><a href="?">صفحه اصلی</a></td>
      </tr>
    </table>
  </div>
  <div id="marquee"> 
  <marquee direction="right" scrolldelay="100">
  <?php 
  $i=0;
  while($news[$i]){
  ?>
  &nbsp; - &nbsp;
  <a href="index.php?page=news&cmd=newsview&newsid=<?php echo $news[$i]['newsId']?>">
<font face="tahoma" color="#FFFFFF">  <?php echo $news[$i]['title']?></font>
  </a>
  &nbsp;&nbsp;
  <?php $i++;} ?>
  </marquee>
  </div>
  <div id="main">
    <table width="990" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="170" align="center" valign="top"><div id="rightmenu">
          <table width="190" height="180" border="0">
            <tr>
              <td width="180" valign="top" bgcolor="#E8EFF7">
			  
			  
			  <?php echo $staticpagelist['one'][0]['content'];?>
			  
			  </td>
            </tr>
          </table>
          <table width="190" height="180" border="0">
            <tr>
              <td valign="top" bordercolor="#F0F0F0" bgcolor="#E8EFF7">
			  
			  
			  <?php echo $staticpagelist['two'][0]['content'];?>
			  
			  </td>
            </tr>
          </table>
     <!--     <table width="190" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="27" rowspan="3" valign="top"><img src="images/right_menu.gif" width="26" height="32" /><img src="images/right_menu.gif" width="26" height="32" /><img src="images/right_menu.gif" width="26" height="32" /></td>
              <td width="187" height="29" class="backmenuleft" onclick="doSlide(oghat1)" ><span class="pointer">اوقات شرعی</span></td>
              <td width="6" rowspan="3" valign="top"><img src="images/left_menu.gif" width="5" height="32" /><img src="images/left_menu.gif" width="5" height="32" /><img src="images/left_menu.gif" width="5" height="32" /></td>
            </tr>
            <tr>
              <td height="29" class="backmenuleft" onClick="doSlide('abohava1');" ><span class="pointer">آب و هوا</span></td>
            </tr>
            <tr>
              <td height="29" class="backmenuleft" onClick="doSlide('daftartelephon1');" ><span class="pointer"> دفتر تلفن</span></td>
            </tr>
          </table>-->
          <table width="159" border="1" cellpadding="0" cellspacing="0"  bordercolor="#7A8699" style="border:none">
            <tr>
              <td height="265" align="center" valign="top">
			  
			  
			  <div id="abohava1" ><img src="images/Weather-icon-15.gif" width="85" height="90" /><br/><br/>
                
                <table width="175" border="0" >
                  <tr bgcolor="#E8EFF7">
                    <td height="33"  colspan="7" align="center">
					
					
					 	<style>
							div#weather{
						border:1px #999999 solid;
						padding:10px;
						text-align:center;
						width:100%;
						margin-right:auto;
						margin-left:auto
					}
						</style>
						<script>
						$(document).ready(function(){
						
							// daryaft etlaate shahrhaye mojood dar file cities.txt
							$("#weather").load("+lib/utility/weather.php?xml=http://rss.wunderground.com/auto/rss_full/global/stations/40729.xml");
							
							$("option#city").click(function(){
							
								xml = $(this).attr('value');
								
								changecity(xml);
							
							
							
							})
						
						})
							function changecity(xml){
							
								$("#weather").html('<img src="img/loading.gif"/>');
								$("#weather").load("weather.php?xml="+xml);
							
							
							}
						</script>
					  <div style="width:100px">
	
						<div id="weather">
							<img src="images/loading.gif"/>
						</div>
						<select  style="width:100px;visibility:hidden;">
						<?php 
						
							$cit = file_get_contents("cities.txt");
							$cot = explode("\n",$cit);
							foreach($cot as $city){
								
								$city = explode(":",$city);
								print_r($city);
								$name = $city[0];
								$xml = $city[1].":".$city[2];
								?>
									<option id="city" value="<?=$xml?>"> <?=$name?> </option>
								<?
							
							}
						
						?>
						</select>
					</div>
					
					
					</td>
                    </tr>
        
                </table>
               
              </div><div id="oghat1">
                <table width="179" height="266" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="center" dir="ltr" valign="top"><img src="images/oghat.gif" width="113" height="39" />
					
					
                      <!--<table width="171" border="0" >
                        <tr  bgcolor="#E8EFF7">
                          <td width="45" height="24" align="center" valign="top">&nbsp;</td>
                          <td width="39" align="center" valign="top">مانده تا</td>
                          <td colspan="2" align="center" valign="top">غروب خورشید</td>
                          </tr>
                        <tr  bgcolor="#E8EFF7">
                          <td colspan="2" align="center">اذان صبح</td>
                          <td width="20">&nbsp;</td>
                          <td width="67">05:45:16</td>
                        </tr>
                        <tr  bgcolor="#E8EFF7">
                          <td colspan="2" align="center">طلوع خورشید</td>
                          <td>&nbsp;</td>
                          <td>05:45:16</td>
                        </tr>
                        <tr  bgcolor="#E8EFF7">
                          <td colspan="2" align="center">اذان ظهر</td>
                          <td>&nbsp;</td>
                          <td>05:45:16</td>
                        </tr>
                        <tr  bgcolor="#E8EFF7">
                          <td colspan="2" align="center">غروب خورشید</td>
                          <td>&nbsp;</td>
                          <td>05:45:16</td>
                        </tr>
                        <tr  bgcolor="#E8EFF7">
                          <td colspan="2" align="center">اذان مغرب</td>
                          <td>&nbsp;</td>
                          <td>05:45:16</td>
                        </tr>
                        <tr  bgcolor="#E8EFF7">
                          <td height="10" colspan="2" align="center">افق به اوقات</td>
                          <td colspan="2">&nbsp;</td>
                          </tr>
                      </table>-->
					  
					  
					  		  
				<div class="moduletable">
					
					﻿<script type='text/javascript' src='js/azan.js'></script><script language=javascript>function pz() {};init();document.getElementById('cities').selectedIndex=16;coord();main();</script>
		</div>
					
					  
					  </td>
					</tr>
                  <tr>
                    <td align="center"><table width="179" border="0" cellspacing="0" cellpadding="0" >
                      <tr> </tr>
                    </table></td>
                  </tr>
                </table>
              </div>
                <div id="daftartelephon1" ><img src="images/telephon.gif" width="99" height="76" />
                  <table width="167" border="0">
                    <tr>
                      <td width="85" align="right" bgcolor="#E8EFF7">مخابرات شورا</td>
                      <td width="72" align="center" valign="middle" bgcolor="#E8EFF7">4223521</td>
                    </tr>
                    <tr>
                      <td align="right" bgcolor="#E8EFF7">دفتر ریاست </td>
                      <td align="center" valign="middle" bgcolor="#E8EFF7">4223520</td>
                    </tr>
                    <tr>
                      <td align="right" bgcolor="#E8EFF7">فکس</td>
                      <td align="center" valign="middle" bgcolor="#E8EFF7">4223517</td>
                    </tr>
                    <tr>
                      <td height="22" align="right" bgcolor="#E8EFF7">دفتر نشریه سیمای زنجان </td>
                      <td align="center" valign="middle" bgcolor="#E8EFF7">4223519</td>
                    </tr>
                    <tr>
                      <td height="22" align="right" bgcolor="#E8EFF7">روابط عمومی شورا </td>
                      <td align="center" valign="middle" bgcolor="#E8EFF7">4222020</td>
                    </tr>
                    <tr>
                      <td height="22" align="right" bgcolor="#E8EFF7"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=140">ادامه ...</a></td>
                      <td align="center" valign="middle" bgcolor="#E8EFF7">&nbsp;</td>
                    </tr>
                   
                  </table>
                </div></td>
            </tr>
          </table>
          <!--<table width="190" height="54" border="0" cellpadding="0" cellspacing="0">
            <tr height="1"> </tr>
            <tr>
              <td width="9" height="25"><img src="images/block5.gif" width="9" height="25" /></td>
              <td width="179" class="backmenu"><div align="center">آمار بادید </div></td>
              <td width="3"><img src="images/block6.gif" width="3" height="25" /></td>
            </tr>
            <tr height="1"></tr>
            <tr>
              <td height="22" colspan="3" align="center" valign="top">
			  <table width="189" border="1" cellpadding="0" cellspacing="0" bordercolor="#7A8699" style="border:none">
                <tr>
                  <td height="20" align="center" valign="top">
				  <table width="183" border="0">
                    <tr>
                      <td width="104" align="right" bgcolor="#E8EFF7">آمار بازدید کاربرها</td>
                      <td width="69" align="center" valign="middle" bgcolor="#E8EFF7">16545</td>
                    </tr>
                  </table></td>
                </tr>
              </table>			    </td>
            </tr>
          </table>-->
          <p>&nbsp;</p>
        </div></td>
        <td width="600" align="center" valign="top">
		<table width="574" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="5" align="left" valign="top" class="left_line"><img src="images/up_left_line.gif" width="21" height="5" /> </td>
            <td height="5" align="left" valign="top" class="up_link"></td>
            <td width="12" align="right" valign="top" class="right_line"><img src="images/up_right_line.gif" width="12" height="5" /></td>
            <td width="1"  colspan="2"></td>
          </tr>
          
          <tr>
            <td width="20" rowspan="2" align="left" valign="bottom" class="left_line"><img src="images/button_line_line.gif" width="20" height="5" /></td>
            <td width="542" height="673" valign="top">
            

            
              <p>
                <?php include("application/view/$content")?>
              </p></td>
            <td width="12" class="right_line">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" class="buttonline"><table align="right" width="52" height="57" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td><img src="images/bottom_line.gif" width="52" height="57" /></td>
                </tr>
                        </table></td>
            </tr>
        </table>
		
		
		<table width="481" border="0" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td height="70" colspan="64" class="linkskhadamat">&nbsp;</td>
            </tr>
          <tr>
            <td width="21" height="157" class="linksleft">&nbsp;</td>
              <td width="439" align="center" valign="top" class="linkscenter"><table width="436" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="119" height="197" align="right" valign="top"><p><a href="http://www.mci.ir/">&#1582;&#1583;&#1605;&#1575;&#1578; &#1605;&#1588;&#1578;&#1585;&#1705;&#1740;&#1606; &#1578;&#1604;&#1601;&#1606; &#1607;&#1605;&#1585;&#1575;&#1607;</a></p>
                      <p><a href="http://www.tcz.ir/">&#1582;&#1583;&#1605;&#1575;&#1578; &#1605;&#1588;&#1578;&#1585;&#1705;&#1740;&#1606; &#1578;&#1604;&#1601;&#1606; &#1579;&#1575;&#1576;&#1578;</a></p>
                      <p><a href="http://ebooking.iranair.com/">&#1582;&#1585;&#1740;&#1583; &#1575;&#1740;&#1606;&#1578;&#1585;&#1606;&#1578;&#1740; &#1576;&#1604;&#1740;&#1591; &#1607;&#1608;&#1575;&#1662;&#1740;&#1605;&#1575;</a></p>
                    <p><a href="http://nezaratmehr.icm.ir/MOTMHR/01/MOTMHRc01s01p01.aspx?new=1">&#1579;&#1576;&#1578; &#1606;&#1575;&#1605; &#1605;&#1578;&#1602;&#1575;&#1590;&#1740;&#1575;&#1606; &#1605;&#1587;&#1705;&#1606; &#1605;&#1607;&#1585;</a></p></td>
                    <td width="24" align="right" valign="top"><table width="24" height="120" border="0" cellpadding="0" cellspacing="0"  >
                      <tr>
                        <td height="32" valign="middle"><img src="images/5-5.gif" width="21" height="32" /></td>
                      </tr>
                      <tr>
                        <td height="34" valign="middle"><img src="images/6-6.gif" width="20" height="25" /></td>
                      </tr>
                      <tr>
                        <td height="23" valign="middle"><img src="images/7-7.gif" width="20" height="20" /></td>
                      </tr>
                      <tr>
                        <td height="27" valign="bottom"><img src="images/12-12.gif" width="21" height="21" /></td>
                      </tr>
                      </table> </p>
                    <p>&nbsp;</p></td>
                    <td width="130" align="right" valign="top"><p><a href="http://ticket.raja.ir/cgi-bin/Raja.dll/Signin">&#1582;&#1585;&#1740;&#1583; &#1575;&#1740;&#1606;&#1578;&#1585;&#1606;&#1578;&#1740; &#1576;&#1604;&#1740;&#1591; &#1602;&#1591;&#1575;&#1585;</a></p>
                      <p><a href="http://znabfa.ir/">&#1582;&#1583;&#1605;&#1575;&#1578; &#1588;&#1585;&#1705;&#1578; &#1570;&#1576; &#1608; &#1601;&#1575;&#1590;&#1604;&#1575;&#1576;</a></p>
                      <p><a href="http://www.hotelyab.com/">&#1588;&#1576;&#1705;&#1607; &#1585;&#1586;&#1608;&#1585;&#1575;&#1587;&#1740;&#1608;&#1606; &#1607;&#1578;&#1604; &#1607;&#1575;&#1740; &#1575;&#1740;&#1585;&#1575;&#1606;</a></p>
                    <p><a href="http://www.irancell.ir/Layer2/?id=234">&#1588;&#1575;&#1585;&#1688; &#1575;&#1740;&#1606;&#1578;&#1585;&#1606;&#1578;&#1740; &#1587;&#1740;&#1605; &#1705;&#1575;&#1585;&#1578; &#1575;&#1740;&#1585;&#1575;&#1606;&#1587;&#1604;</a></p></td>
                    <td width="25" align="right" valign="top">
                      <table width="24" height="129" border="0" cellpadding="0" cellspacing="0"  >
                      <tr>
                        <td height="32" valign="middle"><img src="images/9-9.gif" width="20" height="32" /></td>
                      </tr>
                      <tr>
                        <td height="30" valign="middle"><img src="images/10-10.gif" width="20" height="25" /></td>
                      </tr>
                      <tr>
                        <td height="32" valign="middle"><img src="images/11-11.gif" width="20" height="20" /></td>
                      </tr>
                      <tr>
                        <td height="32" valign="middle"><img src="images/2-2.gif" width="21" height="22" /></td>
                      </tr>
                    </table>
                      <p>&nbsp;</p>
                    <p>&nbsp;</p></td>
                    <td width="114" align="right" valign="top"><p><a href="https://bill.samanepay.com/">&#1662;&#1585;&#1583;&#1575;&#1582;&#1578; &#1575;&#1740;&#1606;&#1578;&#1585;&#1606;&#1578;&#1740; &#1602;&#1576;&#1608;&#1590;</a></p>
                      <p><a href="http://www.epolice.ir/">&#1582;&#1583;&#1605;&#1575;&#1578; &#1575;&#1604;&#1705;&#1578;&#1585;&#1606;&#1740;&#1705;&#1740; &#1662;&#1604;&#1740;&#1587; +10</a></p>
                      <p><a href="http://tntsearch.post.ir/">&#1585;&#1607;&#1740;&#1711;&#1585;&#1740; &#1605;&#1585;&#1587;&#1608;&#1604;&#1575;&#1578; &#1662;&#1587;&#1578;&#1740;</a></p>
                    <p><a href="http://www.nigc-zanjan.ir/">&#1582;&#1583;&#1605;&#1575;&#1578; &#1588;&#1585;&#1705;&#1578; &#1711;&#1575;&#1586;</a></p></td>
                    <td width="24" align="right" valign="top"><table width="24" height="130" border="0" cellpadding="0" cellspacing="0"  >
                      <tr>
                        <td height="32" valign="middle"><img src="images/1-1.gif" width="21" height="32" /></td>
                      </tr>
                      <tr>
                        <td height="34" valign="middle"><img src="images/8-8.gif" width="20" height="25" /></td>
                      </tr>
                      <tr>
                        <td height="29" valign="middle"><img src="images/3-3.gif" width="20" height="22" /></td>
                      </tr>
                      <tr>
                        <td height="32" valign="middle"><img src="images/4-4.gif" width="21" height="25" /></td>
                      </tr>
                    </table>
                    <br/></td>
                  </tr>
              </table></td>
              <td width="21" valign="top" class="linksright">&nbsp;</td>
            </tr>
        </table>
               
		<table width="527" border="0" cellspacing="0" cellpadding="0" align="center">
            <tr>
              <td height="45" align="center" class="textlinkcopycopy" >
			  <hr />
                <p>
                  <span class="text">کلیه حقوق این سایت متعلق به شورای اسلامی شهر زنجان می باشد</span></p>
                <p><a href="index.php?page=staticpage&cmd=staticpageview&page_id=141">برنامه نویسی و طراحی </a></p></td>
            </tr>
        </table>
		
		
		
		
		
		
		</td>
        <td width="220" align="center" valign="top"><div id="rightmenu">
          <table width="220" border="0" bordercolor="#759DB7" cellpadding="0" cellspacing="0">
            <tr>
              <td width="3" align="left" valign="middle"><img src="images/block3.gif" alt="" width="3" height="25" /></td>
              <td width="207" height="25" align="right" valign="middle" class="backmenu">جستجو</td>
              <td width="10" align="right" valign="middle"><img src="images/block1.gif" alt="" width="9" height="25" /></td>
            </tr>
            <tr>
              <td height="42" colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><form id="form1" name="form1" method="post" action="">
                <span id="sprytextfield1">
                  <label>جستجو:<span id="sprytextfield1">
                  <input type="text" name="serch" id="serch" />
                  </span> </label>
                  </span><a href="#"><img src="images/search.gif" width="16" height="16" border="0" /></a>
              </form></td>
            </tr>

          </table>
		  <table width="211" height="230" border="0">
            <tr>
              <td width="180" valign="top" bgcolor="#E8EFF7">
			  
			  
			  <?php echo $staticpagelist['right'][0]['content'];?>
			  
			  </td>
            </tr>
          </table>
		  
		   <table width="211" height="230" border="0">
            <tr>
              <td width="180" valign="top" bgcolor="#E8EFF7">
			  
			  
			  <?php echo $staticpagelist['right2'][0]['content'];?>
			  
			  </td>
            </tr>
          </table>
		  
		  
          <table width="220" border="0" bordercolor="#759DB7" cellpadding="0" cellspacing="0">
            <tr>
              <td width="3" align="left" valign="middle"><img src="images/block3.gif" alt="" width="3" height="25" /></td>
              <td width="207" height="25" align="right" valign="middle" class="backmenu">معرفی شهر زنجان</td>
              <td width="10" align="right" valign="middle"><img src="images/block1.gif" alt="" width="9" height="25" /></td>
            </tr>
			 <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=17"><img src="images/left_pointer.gif" border="0" width="15" height="6" />درباره شهر زنجان</a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=16"><img src="images/left_pointer.gif" border="0" width="15" height="6" />آثار تاریخی</a></span></td>
            </tr>

            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=18"><img src="images/left_pointer.gif" border="0" width="15" height="6" />جاذبه های گردشگری</a></span></td>
            </tr>
			 <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=142"><img src="images/left_pointer.gif" border="0" width="15" height="6" />مفاخر و مشاهیر </a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=19"><img src="images/left_pointer.gif" border="0" width="15" height="6" />صنایع دستی</a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=40"><img src="images/left_pointer.gif" border="0" width="15" height="6" />گالری عکس شهر زنجان</a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=20"><img src="images/left_pointer.gif" border="0" width="15" height="6" />خواهر خوانده های زنجان</a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=21"><img src="images/left_pointer.gif" border="0" width="15" height="6" />گردش در زنجان</a></span></td>
            </tr>
          </table>
		  
		  
		  
		  
		  <table width="220" border="0" bordercolor="#759DB7" cellpadding="0" cellspacing="0">
            <tr>
              <td width="3" align="left" valign="middle"><img src="images/block3.gif" alt="" width="3" height="25" /></td>
              <td width="207" height="25" align="right" valign="middle" class="backmenu">ارتباط با شورا </td>
              <td width="10" align="right" valign="middle"><img src="images/block1.gif" alt="" width="9" height="25" /></td>
            </tr>
			 <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=143"><img src="images/left_pointer.gif" border="0" width="15" height="6" />زمان ملاقات با اعضای شورا </a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=144"><img src="images/left_pointer.gif" border="0" width="15" height="6" />ارتباط با اعضای شورا </a></span></td>
            </tr>

            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=145"><img src="images/left_pointer.gif" border="0" width="15" height="6" />شکایات و نامه ها</a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=146"><img src="images/left_pointer.gif" border="0" width="15" height="6" /> پیشنهاد پروژه های جدید </a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=147"><img src="images/left_pointer.gif" border="0" width="15" height="6" />پاسخ به سوالات شما</a></span></td>
            </tr>
           
          </table>
		  
		  
		  
		  <table width="220" border="0" bordercolor="#759DB7" cellpadding="0" cellspacing="0">
            <tr>
              <td width="3" align="left" valign="middle"><img src="images/block3.gif" alt="" width="3" height="25" /></td>
              <td width="207" height="25" align="right" valign="middle" class="backmenu">امکانات سایت </td>
              <td width="10" align="right" valign="middle"><img src="images/block1.gif" alt="" width="9" height="25" /></td>
            </tr>
			 <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=148"><img src="images/left_pointer.gif" border="0" width="15" height="6" />نقشه شهر زنجان </a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=149"><img src="images/left_pointer.gif" border="0" width="15" height="6" />نقشه استان زنجان  </a></span></td>
            </tr>

            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=150"><img src="images/left_pointer.gif" border="0" width="15" height="6" />نقشه سایت  </a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=151"><img src="images/left_pointer.gif" border="0" width="15" height="6" /> پرسش و پاسخ  درباره سایت </a></span></td>
            </tr>
           
           
          </table>
		  
          <!--<table width="220" border="0" bordercolor="#759DB7" cellpadding="0" cellspacing="0">
            <tr>
              <td width="3" align="left" valign="middle"><img src="images/block3.gif" alt="" width="3" height="25" /></td>
              <td width="207" height="25" align="right" valign="middle" class="backmenu">ارتباط با شورا</td>
              <td width="10" align="right" valign="middle"><img src="images/block1.gif" alt="" width="9" height="25" /></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="#"><img src="images/left_pointer.gif" border="0" width="15" height="6" />زمان ملاقات با اعضای شورا</a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="#"><img src="images/left_pointer.gif" border="0" width="15" height="6" />ارتباط با اعضای شورا</a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="#"><img src="images/left_pointer.gif" border="0" width="15" height="6" />شکایات، نامه ها</a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="#"><img src="images/left_pointer.gif" border="0" width="15" height="6" />رهگیری نامه ها</a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="#"><img src="images/left_pointer.gif" border="0" width="15" height="6" />پیشنهاد اجرای پروژه های جدید</a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="#"><img src="images/left_pointer.gif" border="0" width="15" height="6" />پاسخ به سوالات شما</a></span></td>
            </tr>
          </table>
          <table width="220" border="0" bordercolor="#759DB7" cellpadding="0" cellspacing="0">
            <tr>
              <td width="3" align="left" valign="middle"><img src="images/block3.gif" alt="" width="3" height="25" /></td>
              <td width="207" height="25" align="right" valign="middle" class="backmenu">نظرسنجی</td>
              <td width="10" align="right" valign="middle"><img src="images/block1.gif" alt="" width="9" height="25" /></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="#"><img src="images/left_pointer.gif" border="0" width="15" height="6" />عملکرد سایت</a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="#"><img src="images/left_pointer.gif" border="0" width="15" height="6" />عملکرد شورا</a></span></td>
            </tr>
          </table>-->
          <table width="220" border="0" bordercolor="#759DB7" cellpadding="0" cellspacing="0">
            <tr>
              <td width="3" height="25" align="left" valign="middle"><img src="images/block3.gif" alt="" width="3" height="25" /></td>
              <td width="207" height="25" align="right" valign="middle" class="backmenu">جعبه پیوندها</td>
              <td width="10" align="right" valign="middle"><img src="images/block1.gif" alt="" width="9" height="25" /></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="http://www.leader.ir/langs/FA/"><img src="images/left_pointer.gif" border="0" width="15" height="6" />دفتر معظم رهبری</a></span></td>
            </tr>
            <tr>
              <td height="22" colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="http://www.president.ir/fa/"><img src="images/left_pointer.gif" border="0" width="15" height="6" />دفتر ریاست جمهوری</a></span></td>
            </tr>
            <tr>
              <td height="21" colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="http://www.ostandari-zn.ir"><img src="images/left_pointer.gif" border="0" width="15" height="6" /> استانداري زنجان</a></span></td>
            </tr>
            <tr>
              <td height="22" colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="http://www.zanjan.ir"><img src="images/left_pointer.gif" border="0" width="15" height="6" />شهرداری زنجان</a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=81"><img src="images/left_pointer.gif" border="0" width="15" height="6" />شورای اسلامی شهر ها </a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=82"><img src="images/left_pointer.gif" border="0" width="15" height="6" />ادارت و سازمان های استان زنجان</a></span></td>
            </tr>
           
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=83"><img src="images/left_pointer.gif" border="0" width="15" height="6" />شهرداریهای کشور</a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=84"><img src="images/left_pointer.gif" border="0" width="15" height="6" />سایت های خبری</a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=85"><img src="images/left_pointer.gif" border="0" width="15" height="6" />سايت‌هاي فرهنگي</a></span></td>
            </tr>
            <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=86"><img src="images/left_pointer.gif" border="0" width="15" height="6" />سايت‌هاي ورزشي</a></span></td>
            </tr>
            <tr>
              <td height="21" colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=87"><img src="images/left_pointer.gif" border="0" width="15" height="6" />موتورهاي جستجو</a></span></td>
            </tr>
			
			 <tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=88"><img src="images/left_pointer.gif" border="0" width="15" height="6" />استانداریهای کشور</a></span></td>
            </tr>
			
			
			<tr>
              <td colspan="3" align="right" valign="middle" bgcolor="#E8EFF7"><span class="text"><a href="index.php?page=staticpage&cmd=staticpageview&page_id=89"><img src="images/left_pointer.gif" border="0" width="15" height="6" />سایر سایت ها</a></span></td>
            </tr>
			

          </table>
          <p>&nbsp;</p>
        </div></td>
      </tr>
    </table>
    <!--<table width="990" border="0">
      <tr>
        <td height="411">
		
		
		
		
		</td>
      </tr>
    </table>-->
  </div>
</div>
<p>&nbsp;</p>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
</body>
</html>








