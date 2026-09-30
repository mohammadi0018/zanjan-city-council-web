<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/admincontent.css" rel="stylesheet" type="text/css" />
<script src="js/slide.js"></script>
<script src="js/SpryValidationSelectmanagenews.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="js/SpryValidationTextFieldnewsmanage.js" type="text/javascript"></script>
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
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
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
//-->


</script>
<link href="css/SpryValidationSelectmanagenews.css" rel="stylesheet" type="text/css" />
</head>
<div class="contentadmin" id="contentadmin">
  
  
  <table width="665" cellpadding="0" cellspacing="0">
    <tr>
      <td width="565" align="right" height="46">
      <a href="#" onClick="doSlide('search');" >جستجو</a> 
      </td>
      <td width="94" align="center"> |&nbsp;&nbsp;<a href="#" onClick="doSlide('newsmanage');" >مطلب جدید</a></td>
    </tr>
  </table>
  <div id="newsmanage" style="display:<?php echo $boxaddnewsdisplay?>">
    <form id="form" name="form" enctype="multipart/form-data" method="post" action="index.php?page=imagegalley&cmd=<?php echo $nextcmd?>&sec=admin">
  <br/>
    <table width="576" cellpadding="0" border="1"  cellspacing="0" align="center" class="tabale">
    <tr>
    <td width="576">
    <table width="576" cellpadding="0" border="0"  cellspacing="0" align="center">
     <tr>
      <td height="30" colspan="2" align="right" valign="middle" class="texttable"><span id="spryselect2">
      <label>
        <select name="category" id="category">
			<option value="1">جلسات عمومی شورا</option>
            <option value="2">بازدیدها</option>
            <option value="3">پروژه ها و طرح ها</option>
            <option value="4">افتتاحیه ها</option>
            <option value="5">اشخاص و اعضای شورا</option>
            <option value="6">شهر زنجان</option>
        </select>
      </label>

      <span class="selectRequiredMsg">Please select an item.</span></span><hr/></td>
      <td width="69" align="center" valign="middle" class="texttable">نام بخش:<hr/></td>
    </tr>
    
    
     <tr>
      <td height="32" colspan="2" align="right">
      
     <input type="file" name="picture"  />
      <hr/></td>
      <td width="69" align="center" valign="middle" class="texttable">عکس :<hr/></td>
    </tr>
    
    
     
     <tr>
      <td height="32" colspan="2" align="right">
      
      <textarea name="title"><?php echo  $newslistbyid['title']?></textarea>
      <hr/></td>
      <td width="69" align="center" valign="middle" class="texttable">تیتر :<hr/></td>
    </tr>
     <tr>
      <td height="32" colspan="2" align="right">
	  <?php echo $oFCKeditor->Create() ?><hr/></td>
      <td width="69" align="center" valign="middle" class="texttable">توضیحات:<hr/></td>
    </tr>

     <tr>
       <td width="35" height="34"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image15','','images/sabt1.gif',1)"></a></td>
       <td width="472"><a onclick="form.submit();" href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image15','','images/sabt1.gif',1)">ثبت</a></td>
       <td height="34">&nbsp;</td>
       </tr>
    </table>
      </td>
    </tr>
</table>
    <br/>
 </form>
  </div>






  <div id="search" style="display:none">
    <form id="searchform" name="searchform" enctype="multipart/form-data" method="post" action="index.php?page=imagegalley&cmd=search&sec=admin">
  <br/>
    <table width="576" cellpadding="0" border="1"  cellspacing="0" align="center" class="tabale">
    <tr>
    <td width="576">
    <table width="576" cellpadding="0" border="0"  cellspacing="0" align="center">
     <tr>
      <td height="30" colspan="2" align="right" valign="middle" class="texttable"><span id="spryselect2">
      <label>
      <select name="searchcategory" id="searchcategory">
			<option value="1">جلسات عمومی شورا</option>
            <option value="2">بازدیدها</option>
            <option value="3">پروژه ها و طرح ها</option>
            <option value="4">افتتاحیه ها</option>
            <option value="5">اشخاص و اعضای شورا</option>
            <option value="6">شهر زنجان</option>
        </select>
      </label>

      <span class="selectRequiredMsg">Please select an item.</span></span><hr/></td>
      <td width="69" align="center" valign="middle" class="texttable">نام بخش:<hr/></td>
    </tr>
    
     <tr>
      <td height="30" colspan="2" align="right" valign="middle" class="texttable"><span id="spryselect2">
<input type="text" name="searchtext" />

      <span class="selectRequiredMsg">Please select an item.</span></span><hr/></td>
      <td width="69" align="center" valign="middle" class="texttable">متن:<hr/></td>
    </tr>
    
    
    
      <tr>
       <td width="35" height="34"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image15','','images/sabt1.gif',1)"></a></td>
       <td width="472"><a onclick="searchform.submit();" href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image15','','images/sabt1.gif',1)">جستجو</a></td>
       <td height="34">&nbsp;</td>
       </tr>
    
    	</table>
      </td>
    </tr>
</table>
    <br/>
 </form>
  </div>



  <hr />
 <table width="600" border="1" cellpadding="0" cellspacing="0" align="center">
    <tr>
      <td colspan="5" bgcolor="#680101" align="center" class="textitr">لیست  </td>
    </tr>
    
    
  
   <tr bgcolor="#CCCCCC">
      <td width="265" align="center" > 
	  تصویر      </td>
       <td width="193"  align="center" class="texttable">تیتر عکس</td>
      <td width="36"  align="center" class="texttable"> 
	   بازدید
      </td>
      <td colspan="2" align="center" class="texttable">
      </td>
    </tr>
    
    

<?php 

$i=0;
while($newslist[$i])
{

?>
    <tr>
      <td width="265"  align="center"> 
	  <img src="<?php echo $newslist[$i]['image'] ;?>" width="100" height="100" />
      </td>
       <td  align="center" class="texttable"> 
	   <?php  echo  $newslist[$i]['title'] ;?>
      </td>
      <td  align="center" class="texttable"> 
	   <?php  echo $newslist[$i]['countViewer'] ;?>
      </td>
      <td width="47" align="center" class="texttable"><a href="index.php?page=imagegalley&cmd=edit&newsid=<?php echo $newslist[$i]['id']?>&sec=admin">ویرایش</a></td>
      <td width="47" align="center" class="texttable"><div align="center"><a href="index.php?page=imagegalley&cmd=delete&newsid=<?php echo $newslist[$i]['id']?>&sec=admin">حذف</a></div>					       </td>
    </tr>
<?php $i++;}?>






 <tr>
      <td colspan="5" align="center" > 
	  <?php  echo $pagingstring;?></td>
  </tr>










  </table>
  <br/>
<a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','sabtejadid0.gif',1)"></a></div>
<script type="text/javascript">
<!--
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
//-->
</script>

