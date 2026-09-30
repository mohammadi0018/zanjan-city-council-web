<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

{include file='admin/_head.tpl'}

<body style="background-image:url(./images/texture.gif); background-repeat:repeat-x" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#202B41">

<center>

{if $content}

<table id="Table_01" width="930" height="500" border="0" cellpadding="0" cellspacing="0">
<tr>
		<td  width="15" height="58" rowspan="2"></td>
		<td height="7" colspan="3" bgcolor="#F39221" style="border-top:1px solid #E7E7E7"></td>
		<td  width="18" height="58" rowspan="2"></td>
	</tr>
<tr>
  <td height="67" colspan="2" bgcolor="#E7E7E7" style="text-align:left; padding-left:30px;; border-top:2px solid #D8D8D8; vertical-align:bottom">
  <a href="index.php?section=admin&amp;page=home" onMouseover="ddrivetip('صفحه اصلی', 75)";
onMouseout="hideddrivetip()"><img src="./images/icon3.jpg" width="47" height="37" border="0"></a>
  
  <a href="./Users/login2.php" onMouseover="ddrivetip('مشخصات کاربری', 90)";
onMouseout="hideddrivetip()"><img src="./images/icon2.jpg"  width="64" height="37" border="0"></a><a href="./Count_visitors/visitor_statistics.php" onMouseover="ddrivetip('آمار سایت', 60)";
onMouseout="hideddrivetip()"><img src="./images/icon1.jpg"  width="54" height="37" border="0"></a><a href="./Users/login2.php"></a><a href="./backup/index.php" onMouseover="ddrivetip('پشتیبانی از بانک', 89)";
onMouseout="hideddrivetip()"><img src="./images/icon4.jpg"  width="54" height="37" border="0"></a>
<a href="./install/archive.php" onMouseover="ddrivetip('مدیریت پنل', 65)"; onMouseout="hideddrivetip()"><img src="./images/icon5.jpg" width="60" height="30" border="0" style="margin-left:10px">
<a href="index.php?section=admin&amp;page={$page}&amp;la={if $la eq 1}2{else}1{/if}" onmouseover="ddrivetip('تغییر زبان', 65)"; onmouseout="hideddrivetip()"><img src="./images/icon6.jpg" width="60" height="40" border="0" /></a></td>
  <td width="404" height="67" bgcolor="#E7E7E7" style="text-align:right; padding-right:30px;; border-top:2px solid #D8D8D8"><img src="./images/logoNegaheno_.jpg" alt="simano" width="354" height="88" /></td>
</tr>
	<tr>
		<td rowspan="3"  width="15"></td>
		<td colspan="3" background="./images/lineSpacer.jpg" height="13"></td>
		<td rowspan="3" width="18"></td>
	</tr>
	<tr>
		<td colspan="3" bgcolor="#FFFFFF" style="padding:0; border-left:3px solid #D8D8D8; border-right:3px solid #D8D8D8; vertical-align:top">
        
        <table width="98%" align="center" border="0" cellspacing="3" cellpadding="3" style="text-align:right">
          <tr>
            <td width="82%" rowspan="2" style="vertical-align:top" align="center">{include file=$content }</td>
            {if $content neq 'admin/home.tpl'}
            <td width="18%" style="vertical-align:top">

            <table id="Table_" width="202" height="133" border="0" cellpadding="0" cellspacing="0" style="margin-top:10px;">
                <tr>
                  <td><img src="./images/greenMenu_01.jpg" width="6" height="28" /></td>
                  <td width="193" height="28" class="menuTitle">
			{ldelim}
                    ماژولهای
                    {if $la eq 1}
                    	فارسی
                    {else}
                    	English
                    {/if}
            {rdelim}
              </td>
                  <td><img src="./images/greenMenu_03.jpg" width="6" height="28" /></td>
                </tr>
                <tr>
                  <td background="./images/leftBarMenu.jpg" width="6" height="98"></td>
                  <td bgcolor="#F5F5F5" align="right" valign="top">

			<script type="text/javascript">
			$(document).ready(function() {ldelim}	

                toggle_1('link-{$page}');
				{rdelim});
            </script>

        	<div id="admin">
                <div class="admin-menu">
                    <a href="javascript:void(0);" onclick="toggle_1('link-news');"> اخبار </a>
                    <div class="child_link" id="link-news">
                        <ul class="child-list">
                            <li><a href="index.php?section=admin&page=news&cmd=list"> لیست خبرها </a></li>
                            <li><a href="index.php?section=admin&page=news&cmd=input">  اضافه کردن خبر </a></li>
                        </ul>
                    </div>
                    <a href="javascript:void(0);" onclick="toggle_1('link-product');">  محصولات </a>
                    <div class="child_link" id="link-product">
                        <ul class="child-list">
                            <li><a href="index.php?section=admin&page=product&cmd=list"> لیست محصولات </a></li>
                            <li><a href="index.php?section=admin&page=product&cmd=input">  اضافه کردن محصول </a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>

                  </td>
                  <td background="./images/rightBarMenu.jpg" width="6" height="98"></td>
                </tr>
                <tr>
                  <td><img src="./images/menu_07.jpg" width="6" height="7" /></td>
                  <td background="./images/bottomBarMenu.jpg" width="193" height="7"></td>
                  <td><img src="./images/menu_09.jpg" width="6" height="7" /></td>
                </tr>
            </table>
            
            </td>
          </tr>
          <tr>
            <td width="18%"  style="vertical-align:top"></td>
            {/if}
          </tr>
        </table></td>
	</tr>
	<tr>
		<td colspan="3" style="color:#929292; font-family:Tahoma; font-size:11px; text-align:right; background-color:#F5F5F5; padding-right:10px; border-top:1px solid #D8D8D8" height="38">| کلیه حقوق این پنل توسط شرکت نگاه نو محفوظ می باشد |<img src="./images/negahe-no-Co.gif" style="margin-left:10px"></td>
	</tr>
</table>
{/if}


</center>
</body>
</html>
