<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/adminmain.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--

-->
</style>
<script src="js/SpryAccordion.js" type="text/javascript"></script>
<link href="css/SpryAccordionadmin.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main"  id="mian"><img src="images/tablighat.gif" width="900" height="180" />
  <div class="date" id="date">
    <table width="857" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr class="text">
        <td width="37" height="23" align="left"><?php echo $user->info['user_name'];?></td>
        <td width="9" align="left">:</td>
        <td width="178" align="left"><?php echo $user->info['name'];?> &nbsp;<?php echo $user->info['family'];?></td>
        <td width="347" align="right"><?php echo nowDate();?></td>
        <td width="50" align="right"></td>
        <td width="107" align="right"><a href="?sec=admin&cmd=logout">خروج</a></td>
        <td width="72" align="right"><a href="index.php?sec=admin">صفجه اصلی</a></td>
        <td width="23" align="right">&nbsp;</td>
      </tr>
    </table>
  </div>

  
  <div class="content" id="content">
  <div class="message" id="message"></div>
  <div class="upcontent" id="upcontent"></div>
    <div class="contentcenter" id="contentcenter">

 <?php include("application/view/$content")?>
     
    </div>
    <div class="contentbutton" id="contentbutton"></div>
  </div>
    
     
  <div class="menu" id="menu">
    <div id="Accordion1" class="Accordion" tabindex="0">
      <div class="AccordionPanel">
        <div class="AccordionPanelTab">مدیریت مطالب</div>
        <div class="AccordionPanelContent">
          <p><a href="?page=news&cmd=manage&sec=admin">مدیریت   لوایح و مصوبات واخبار</a></p>
        </div>
      </div>
	   <div class="AccordionPanel">
        <div class="AccordionPanelTab">مدیریت صفحات</div>
        <div class="AccordionPanelContent">
          <p><a href="?page=staticpage&cmd=manage&sec=admin">منو ساز </a></p>
        </div>
      </div>
      <div class="AccordionPanel">
        <div class="AccordionPanelTab">
         مدیریت گالری
	     </div>
         <div class="AccordionPanelContent">
          	<p><a href="?page=imagegalley&cmd=manage&sec=admin"> مدیریت گالری عکس</a>
         	</p>
		 </div>
      </div>
	  
	  
	   <div class="AccordionPanel">
        <div class="AccordionPanelTab">
         مدیریت کاربران
	     </div>
         <div class="AccordionPanelContent">
          	<p><a href="?page=user&cmd=manage&sec=admin"> مدیریت کاربران</a>
         	</p>
		 </div>
      </div>
	  
	  
      
    </div>
  </div>
  <p>&nbsp;</p>
</div>
<script type="text/javascript">
<!--
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
//-->
</script>
</body>
</html>
