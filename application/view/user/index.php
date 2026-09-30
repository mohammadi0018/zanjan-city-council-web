<?php //include("application/view/head.php");

$lang=$_GET['la'];
if($lang=="")
$lang="fa";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/swfobject_modified.js" type="text/javascript"></script>
<script src="js/SpryValidationTextField.js" type="text/javascript"></script>
<script src="js/SpryValidationCheckbox.js" type="text/javascript"></script>
<script src="js/swfobject_modified.js" type="text/javascript"></script>
<script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_1201091418_0) return;
                        window.mm_menu_1201091418_0 = new Menu("root",119,21,"Tahoma",11,"#CCCCCC","#4F0D0F","#651012","#A9ADAF","right","middle",5,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_1201091418_0.addMenuItem("معرفی&nbsp;خدمات");
  mm_menu_1201091418_0.addMenuItem("انواع&nbsp;پایانه&nbsp;فروش");
  mm_menu_1201091418_0.addMenuItem("خدمات&nbsp;پشتیبانی");
  mm_menu_1201091418_0.addMenuItem("نحوه&nbsp;کار&nbsp;با&nbsp;دستگاه");
   mm_menu_1201091418_0.hideOnMouseOut=true;
   mm_menu_1201091418_0.bgColor='#FFFFFF';
   mm_menu_1201091418_0.menuBorder=0;
   mm_menu_1201091418_0.menuLiteBgColor='';
   mm_menu_1201091418_0.menuBorderBgColor='';

                          window.mm_menu_1208094348_0 = new Menu("root",119,21,"Tahoma",11,"#CCCCCC","#4F0D0F","#651012","#A9ADAF","right","middle",5,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_1208094348_0.addMenuItem("دارندگان&nbsp;کارت&nbsp;اعتباری");
  mm_menu_1208094348_0.addMenuItem("پذیرندگان");
   mm_menu_1208094348_0.hideOnMouseOut=true;
   mm_menu_1208094348_0.bgColor='#FFFFFF';
   mm_menu_1208094348_0.menuBorder=0;
   mm_menu_1208094348_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1208094348_0.menuBorderBgColor='#707578';
window.mm_menu_1208100327_0 = new Menu("root",119,21,"Tahoma",11,"#CCCCCC","#4F0D0F","#651012","#A9ADAF","right","middle",5,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_1208100327_0.addMenuItem("دفاتر");
  mm_menu_1208100327_0.addMenuItem("نمایندگی&nbsp;ها");
  mm_menu_1208100327_0.addMenuItem("مراکز&nbsp;تحت&nbsp;پوشش");
  mm_menu_1208100327_0.addMenuItem("درخواست&nbsp;نمایندگی");
   mm_menu_1208100327_0.hideOnMouseOut=true;
   mm_menu_1208100327_0.bgColor='#FFFFFF';
   mm_menu_1208100327_0.menuBorder=0;
   mm_menu_1208100327_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1208100327_0.menuBorderBgColor='#777777';

    window.mm_menu_1208100526_0_1 = new Menu("تقویم&nbsp;آموزشی",119,21,"Tahoma",11,"#CCCCCC","#4F0D0F","#651012","#A9ADAF","right","middle",5,0,1000,-5,7,true,true,true,0,true,true);
    mm_menu_1208100526_0_1.addMenuItem("ضمن&nbsp;خدمت");
    mm_menu_1208100526_0_1.addMenuItem("بدو&nbsp;خدمت");
     mm_menu_1208100526_0_1.hideOnMouseOut=true;
     mm_menu_1208100526_0_1.bgColor='#FFFFFF';
     mm_menu_1208100526_0_1.menuBorder=0;
     mm_menu_1208100526_0_1.menuLiteBgColor='#FFFFFF';
     mm_menu_1208100526_0_1.menuBorderBgColor='#777777';
  window.mm_menu_1208100526_0 = new Menu("root",119,21,"Tahoma",11,"#CCCCCC","#4F0D0F","#651012","#A9ADAF","right","middle",5,0,1000,-238,0,true,true,true,0,true,true);
  mm_menu_1208100526_0.addMenuItem(mm_menu_1208100526_0_1);
  mm_menu_1208100526_0.addMenuItem("جزوات&nbsp;آموزشی");
   mm_menu_1208100526_0.hideOnMouseOut=true;
   mm_menu_1208100526_0.childMenuIcon="images/arrows.gif";
   mm_menu_1208100526_0.bgColor='#FFFFFF';
   mm_menu_1208100526_0.menuBorder=0;
   mm_menu_1208100526_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1208100526_0.menuBorderBgColor='#777777';

      window.mm_menu_1208100616_0_1 = new Menu("ساختار&nbsp;سازمانی",119,21,"Tahoma",11,"#CCCCCC","#4F0D0F","#651012","#A9ADAF","right","middle",5,0,1000,-5,7,true,true,true,0,true,true);
    mm_menu_1208100616_0_1.addMenuItem("چارت");
    mm_menu_1208100616_0_1.addMenuItem("واحد&nbsp;ها");
    mm_menu_1208100616_0_1.addMenuItem("سهامداران");
     mm_menu_1208100616_0_1.hideOnMouseOut=true;
     mm_menu_1208100616_0_1.bgColor='#FFFFFF';
     mm_menu_1208100616_0_1.menuBorder=0;
     mm_menu_1208100616_0_1.menuLiteBgColor='#FFFFFF';
     mm_menu_1208100616_0_1.menuBorderBgColor='#777777';
  window.mm_menu_1208100616_0 = new Menu("root",124,21,"Tahoma",11,"#CCCCCC","#4F0D0F","#651012","#A9ADAF","right","middle",5,0,1000,-243,7,true,true,true,0,true,true);
  mm_menu_1208100616_0.addMenuItem("معرفی&nbsp;شرکت");
  mm_menu_1208100616_0.addMenuItem("معرفی&nbsp;کادر&nbsp;مدیریت");
  mm_menu_1208100616_0.addMenuItem(mm_menu_1208100616_0_1);
   mm_menu_1208100616_0.hideOnMouseOut=true;
   mm_menu_1208100616_0.childMenuIcon="images/arrows.gif";
   mm_menu_1208100616_0.bgColor='#FFFFFF';
   mm_menu_1208100616_0.menuBorder=0;
   mm_menu_1208100616_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1208100616_0.menuBorderBgColor='#777777';
window.mm_menu_1208100832_0 = new Menu("root",119,21,"Tahoma",11,"#CCCCCC","#4F0D0F","#651012","#A9ADAF","right","middle",5,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_1208100832_0.addMenuItem("شارژ&nbsp;همراه&nbsp;اول");
  mm_menu_1208100832_0.addMenuItem("شارژ&nbsp;ایرانسل");
   mm_menu_1208100832_0.hideOnMouseOut=true;
   mm_menu_1208100832_0.bgColor='#FFFFFF';
   mm_menu_1208100832_0.menuBorder=0;
   mm_menu_1208100832_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1208100832_0.menuBorderBgColor='#777777';

                    window.mm_menu_1223092621_0_1 = new Menu("مقالات",119,21,"Tahoma",11,"#A9ADAF","#4F0D0F","#4F0D0F","#A9ADAF","right","middle",5,0,1000,-238,7,true,true,true,0,true,true);
    mm_menu_1223092621_0_1.addMenuItem("ویژه");
    mm_menu_1223092621_0_1.addMenuItem("عادی");
     mm_menu_1223092621_0_1.hideOnMouseOut=true;
     mm_menu_1223092621_0_1.bgColor='#FFFFFF';
     mm_menu_1223092621_0_1.menuBorder=0;
     mm_menu_1223092621_0_1.menuLiteBgColor='#FFFFFF';
     mm_menu_1223092621_0_1.menuBorderBgColor='#777777';
  window.mm_menu_1223092621_0 = new Menu("root",119,21,"Tahoma",11,"#A9ADAF","#4F0D0F","#4F0D0F","#A9ADAF","right","middle",5,0,1000,-238,7,true,true,true,0,true,true);
  mm_menu_1223092621_0.addMenuItem("داخلی");
  mm_menu_1223092621_0.addMenuItem("بین&nbsp;المللی");
  mm_menu_1223092621_0.addMenuItem("دیگران");
  mm_menu_1223092621_0.addMenuItem("همایش&nbsp;استان&nbsp;ها");
  mm_menu_1223092621_0.addMenuItem(mm_menu_1223092621_0_1);
  mm_menu_1223092621_0.addMenuItem("آرشیو","location='?page=news&cmd=archive'");
   mm_menu_1223092621_0.hideOnMouseOut=true;
   mm_menu_1223092621_0.childMenuIcon="images/arrows.gif";
   mm_menu_1223092621_0.bgColor='#FFFFFF';
   mm_menu_1223092621_0.menuBorder=0;
   mm_menu_1223092621_0.menuLiteBgColor='#FFFFFF';
   mm_menu_1223092621_0.menuBorderBgColor='#777777';

mm_menu_1223092621_0.writeMenus();
} // mmLoadMenus()

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
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
<script language="JavaScript" src="js/mm_menu.js"></script>
<link href="css/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="css/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />
</head>

<body onload="MM_preloadImages('images/vorod1.gif','images/natayej1.gif')">
<form id="form" name="form" method="post" action="?sec=user&cmd=login">
<script language="JavaScript1.2">mmLoadMenus();</script>
<div class="main" id="main">
  <div class="zaban" id="zaban"> <br/>
    <a href="#">فارسی</a> |<a href="#"> English </a></div>
  <div class="menu" id="menu">
    <table width="860" height="35" border="0">
      <tr>
        <td width="140" align="center" valign="middle"><a href="#">ثبت درخواست ها و نظرات </a></td>
        <td width="84" align="center" valign="middle"><img src="images/nashan.gif" width="15" height="6" /><a href="#" name="link4" id="link7" onmouseover="MM_showMenu(window.mm_menu_1208100616_0,-40,26,null,'link4')" onmouseout="MM_startTimeout();">درباره ما</a></td>
        <td width="106" align="center" valign="middle"><img src="images/nashan.gif" width="15" height="6" /><a href="#" name="link8" id="link8" onmouseover="MM_showMenu(window.mm_menu_1208100832_0,-27,26,null,'link8')" onmouseout="MM_startTimeout();">خرید کارت شارژ</a></td>
        <td width="83" align="center" valign="middle"><img src="images/nashan.gif" width="15" height="6" /><a href="#" name="link6" id="link6" onmouseover="MM_showMenu(window.mm_menu_1208100526_0,-45,26,null,'link6')" onmouseout="MM_startTimeout();">آموزش</a></td>
        <td width="122" align="center" valign="middle"><img src="images/nashan.gif" width="15" height="6" /><a href="#" name="link5" id="link5" onmouseover="MM_showMenu(window.mm_menu_1208100327_0,-27,26,null,'link5')" onmouseout="MM_startTimeout();">دفاتر و نمایندگیها</a></td>
        <td width="96" align="center" valign="middle"><a href="#">ماهنامه یار و یاران</a> </td>
        <td width="119" align="center" valign="middle"><img src="images/nashan.gif" width="15" height="6" /><a href="#" name="link9" id="link3" onmouseover="MM_showMenu(window.mm_menu_1208094348_0,-27,26,null,'link9')" onmouseout="MM_startTimeout();">امور مشتریان</a></td>
        <td width="76" align="center" valign="middle"><img src="images/nashan.gif" width="15" height="6" /><a href="#" name="link2" id="link10" onmouseover="MM_showMenu(window.mm_menu_1223092621_0,-75,26,null,'link2')" onmouseout="MM_startTimeout();">اخبار</a></td>
      </tr>
    </table>
  </div>
  <div class="hrader" id="header">

    <table width="860" height="270" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="150" height="178" align="right" valign="top"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="143" height="140">
          <param name="movie" value="flash/header-site.swf" />
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="swfversion" value="6.0.65.0" />
          <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. -->
          <param name="expressinstall" value="flash/expressInstall.swf" />
          <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
          <!--[if !IE]>-->
          <object type="application/x-shockwave-flash" data="flash/header-site.swf" width="143" height="140">
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
        <td width="603" height="178" align="right" valign="top"><img src="images/headermenu.gif" width="607" height="171" border="0" usemap="#Map2" /></td>
        <td width="106" rowspan="3" align="left" valign="top"><img src="images/rightheadermenuleft.gif" width="104" height="200" border="0" usemap="#Map" /><img src="images/rightrightupgif.gif" width="104" height="41" /></td>
      </tr>
      <tr>
        <td height="28" colspan="2" align="right" valign="top" class="backmarquee">
         <marquee direction="right">
         شرکت کارت اعتباری ایران کیش بزرگترین psp کشور
         </marquee>
        </td>
      </tr>
      <tr>
        <td height="34" colspan="2" align="left" valign="top"><span> 
          <label><span id="sprytextfield"><span class="textfieldRequiredMsg">A value is required.</span></span><span class="textfieldRequiredMsg">A value is required.</span><span class="tabletext"></span></label>
          <span class="textfieldRequiredMsg">A value is required.</span></td>
        </tr>
      <tr>
        <td height="29" colspan="2" align="left" valign="top"><span id="sprytextfield1">
         </span>
          <table width="596" border="0" cellpadding="0" cellspacing="0">
            <tr>
            <td width="52">&nbsp;</td>
              <td width="544" height="29" valign="top"><span id="sprytextfield4">
              <img src="images/zarebin.gif" alt="" width="18" height="19" />
              <label>
                <input size="17" type="text" name="text2" id="text2" />
              </label>
              </span><span class="text">جستجو</span></td>
              
            </tr>
          </table>
          </td>
        <td width="106" height="29" align="left" valign="top">&nbsp;</td>
        </tr>
    </table>

  </div>
  <div class="content" id="content">

	<?php include("application/view/$content")?>

  </div> 

  <div class="rightmenu" id="rightmenu">
  <table width="214" border="0">
      <tr>
        <td width="2209" height="26" align="center" bgcolor="#8E122E" background="images/100.gif" >دسترسی سریع</td>
      </tr>
    </table>
    <div class="Amneu" id="Amenu">
      <a href="http://www.kiccc.com/mahname.zip">دریافت ماهنامه یاریاران (PDF)</a>
      <a href="#">ارسال مطالب به ماهنامه یاریاران</a>
      <a href="#">درخواست نصب پایانه فروش</a>
      <a href="#">نحوه کار با پایانه فروش (POS)</a>
      <a href="#">دریافت ریزتراکنش (پذیرندگان)</a>
    </div>
    
    <table width="213" border="0">
      <tr>
        <td height="26" align="center" bgcolor="#8E122E" background="images/100.gif">ورود اعضاء</td>
      </tr>
    </table>
    <table width="213" height="140" border="0">
      <tr>
        <td width="209" align="left" valign="top" bgcolor="#BDBFC4"><p class="tabletext">نام کاربری:<span id="sprytextfield5">
          <label>
            <input size="17" type="text" name="username" id="username" />
          </label>
          <span class="textfieldRequiredMsg">A value is required.</span></span></p>
            <p class="tabletext">کلمه عبور:<span id="sprytextfield6">
              <label>
                <input size="17" type="text" name="password" id="password" />
              </label>
            <span class="textfieldRequiredMsg">A value is required.</span></span></p>
          <p class="tabletext"><span id="sprycheckbox1">
            <label>
              <span id="sprycheckbox2"> <span class="checkboxRequiredMsg">Please make a selection.</span></span>Remember me
              <input type="checkbox" name="checkbox1" id="checkbox1" />
            </label>
          </span></p>
          <p><a onclick="form.submit();" href="#" ><img src="images/vrod.gif" name="Image15" width="85" height="22" border="0" id="Image15" /></a></p></td>
      </tr>
    </table>
    <table width="213" border="0">
      <tr>
        <td height="26" align="center" bgcolor="#8E122E" background="images/100.gif">نظرسنجی</td>
      </tr>
    </table>
    <table width="213" height="160" border="0">
      <tr>
        <td align="right" valign="top" bgcolor="#BDBFC4"><p class="text">سوال مورد نظر:<br/>سوال مورد نظر را در این قسمت باید تایپ کرد ، و جواب های درست را باید انتخاب نمود:</p>
          <table width="181" height="88" border="0" align="center">
              <tr>
                <td width="27" align="right"><label>
                  <input type="radio" name="radio3" id="radio3" value="radio3" />
                </label>
                 
                </td>
                <td width="47" align="right" class="text">متوسط</td>
                <td width="52" align="right"><label>
                  <input type="radio" name="radio" id="radio" value="radio" />
                </label>
                 
                </td>
                <td width="37" align="right" class="text">عالی</td>
              </tr>
              <tr>
                <td align="right"><label>
                  <input type="radio" name="radio4" id="radio4" value="radio4" />
                </label></td>
                <td align="right" class="text">بد</td>
                <td align="right"><label>
                  <input type="radio" name="radio2" id="radio2" value="radio2" />
                </label></td>
                <td align="right" class="text">خوب</td>
              </tr>
              <tr>
                <td height="36" colspan="2" align="left"><a href="#"><img border="0" src="images/natayej.gif" width="70" height="22" /></a></td>
                <td align="right">&nbsp;</td>
                <td align="right">&nbsp;</td>
              </tr>
            </table>
            <br/>
        </td>
      </tr>
    </table>
    <table width="213" border="0">
      <tr>
        <td height="26" align="center" bgcolor="#8E122E" background="images/100.gif">پربیننده ترین اخبار</td>
      </tr>
    </table>
    <table width="213" height="160" border="0">
      <tr>
        <td valign="top" bgcolor="#BDBFC4"><p class="tabletext"><a href="#">اخبار شماره 1خبار شماره 1خبار شماره 1خبار شماره 1خبار شماره </a></p>
            <p class="tabletext"><a href="#">اخبار شماره 2</a></p>
          <p class="tabletext"><a href="#">اخبار شماره 3</a></p>
          <p class="tabletext"><a href="#">اخبار شماره 4</a></p>
          <p class="tabletext"><a href="#">اخبار شماره 2</a></p></td>
      </tr>
    </table>
    <table width="213" border="0">
      <tr>
        <td height="26" align="center" bgcolor="#8E122E" background="images/100.gif">آمار بازدیدکنندگان</td>
      </tr>
    </table>
    <table width="213" height="80" border="0">
      <tr>
        <td valign="top" bgcolor="#BDBFC4">
        <table align="center" width="198" height="80" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="46" align="center">&nbsp;</td>
            <td width="149"class="tabletext">آمار کل بازدیدکنندگان:</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td class="tabletext">آمار بازدید امروز:</td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td class="tabletext">افراد آنلاین:</td>
          </tr>
        </table></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
  <div class="footer" id="footer">
    <p>
    <marquee>
     <img src="images/logobanks/(MASKAN).gif" />
     <img src="images/logobanks/ansar.gif" />
     <img src="images/logobanks/Bank Markazi.gif" />
     <img src="images/logobanks/bank parsian.gif" />
     <img src="images/logobanks/bank tose-saderat.gif" />
     <img src="images/logobanks/Eghtesade Novin.gif" />
     <img src="images/logobanks/Ghavamin.gif" />
     <img src="images/logobanks/Kar Afarin.gif" />
     <img src="images/logobanks/Keshavarzi.gif" />
     <img src="images/logobanks/Melat.gif" />
     <img src="images/logobanks/meli.gif" />
     <img src="images/logobanks/Pasargad Bank.gif" />
     <img src="images/logobanks/postbank2.gif" />
     <img src="images/logobanks/Refah.gif" />
     <img src="images/logobanks/Saderat.gif" />
     <img src="images/logobanks/saman.gif" />
     <img src="images/logobanks/Sepah.gif" />
     <img src="images/logobanks/Sina--.gif" />
     <img src="images/logobanks/Tejarat.gif" />
    </marquee>
    
    </p>
    <p>Copyright @2004-2010 - www.kiccc.com<br/>
      تمامی حقوق مطالب، تصاویر و طرح قالب برای شرکت ایران کیش محفوظ است.  </p>
    <p>&nbsp;  </p>
  </div>
</div>
</form>
<map name="Map" id="Map">
  <area shape="poly" coords="30,156" href="?" />
  <area shape="poly" coords="36,154,100,179,94,195,23,179" href="?" />
</map>
<map name="Map2" id="Map2">
  <area shape="poly" coords="291,100,206,105,206,122,292,122" href="#" />
  <area shape="poly" coords="308,99,305,122,480,143,485,115" href="#" />
  <area shape="poly" coords="501,118,497,141,604,170,604,148" href="#" />
</map>
<script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1");
var sprycheckbox3 = new Spry.Widget.ValidationCheckbox("sprycheckbox3");
var sprycheckbox4 = new Spry.Widget.ValidationCheckbox("sprycheckbox4");
var sprycheckbox5 = new Spry.Widget.ValidationCheckbox("sprycheckbox5");
var sprycheckbox6 = new Spry.Widget.ValidationCheckbox("sprycheckbox6");
swfobject.registerObject("FlashID");
//-->
</script>
</body>
</html>
