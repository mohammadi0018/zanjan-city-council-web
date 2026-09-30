<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/admincontent.css" rel="stylesheet" type="text/css" />
<script src="js/slide.js"></script>
<script src="js/SpryValidationSelectmanageuser.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="js/SpryValidationTextFieldusermanage.js" type="text/javascript"></script>
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

function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
//-->


</script>
<link href="css/SpryValidationSelectmanageuser.css" rel="stylesheet" type="text/css" />
</head>
<div class="contentadmin" id="contentadmin">
  
  
  <table width="665" cellpadding="0" cellspacing="0">
    <tr>
      <td width="565" align="right" height="46">
     <!-- <a href="#" onClick="doSlide('search');" >جستجو</a> -->
      </td>
      <td width="94" align="center">&nbsp;&nbsp;<a href="#" onClick="doSlide('usermanage');" >کاربر جدید</a></td>
    </tr>
  </table>
  <div id="usermanage" style="display:<?php echo $boxadduserdisplay?>">
    <form id="form" name="form" enctype="multipart/form-data" method="post" action="index.php?page=user&cmd=<?php echo $nextcmd?>&sec=admin">
  <br/>
    <table width="576" cellpadding="0" border="1"  cellspacing="0" align="center" class="tabale">
    <tr>
    <td width="576">
    <table width="576" cellpadding="0" border="0"  cellspacing="0" align="center">
     <tr>
      <td height="30" colspan="2" align="right" valign="middle" class="texttable"><span id="spryselect2">
      <label>
 <input type="text" name="user_name" />
      </label> 

     </span><hr/></td>
      <td width="69" align="center" valign="middle" class="texttable">نام کاربری:<hr/></td>
    </tr>
    
    
     <tr>
      <td height="32" colspan="2" align="right">
      
     <input type="password" name="password"  />
      <hr/></td>
      <td width="69" align="center" valign="middle" class="texttable">کلمه عبور<hr/></td>
    </tr>
    
   <!-- 
     <tr>
     	 <td height="32" colspan="3" align="right">
			
			<table width="350" height="95" border="1" align="center">
      <tr>
        <td bgcolor="#999999" height="28" colspan="2"><div align="center"><strong>حق دسترسی </strong></div></td>
        </tr>
      <tr>
        <td width="230">
          <div align="right">
            <select dir="rtl" size="20"   multiple="multiple" name="permission[]">
              <option value="allsanaye,manage" >مدیریت کل صنایع</option>
              <option value="allsanaye,insert">مدیریت کل صنایع صنایع جدید</option>
              <option value="allsanaye,addostan">مدیریت کل صنایع اختصاص صنعت به استان</option>
              <option value="allsanaye,edit">مدیریت کل صنایع ویرایش</option>
              <option value="allsanaye,delete">مدیریت کل صنایع حذف</option>
              <option value="allsanaye,analyse">تحلیل داده ها کل صنایع</option>
              <option value="allsanaye,export">گزارش گیری کل صنایع</option>
              <option value="bigsanaye,manage">مدیریت صنایع بزرگ</option>
              <option value="bigsanaye,insert">مدیریت صنایع بزرگ صنایع جدید</option>
              <option value="bigsanaye,edit">مدیریت صنایع بزرگ ویرایش</option>
              <option value="bigsanaye,delete">مدیریت صنایع بزرگ حذف</option>
              <option value="bigsanaye,analyse">مدیریت صنایع بزرگ تحلیل داده ها</option>
              <option value="bigsanaye,export">مدیریت صنایع بزرگ گزارش گیری</option>
              <option value="allsanaye,olaviat">مدیریت اولویت بندی مصرف گاز</option>
              <option value="shahrakesanati,analyse">تحلیل داده ها شهرک صنعتی</option>
              <option value="shahrakesanati,export">گزارش گیری شهرک صنعتی</option>
              <option value="user,manage">مدیریت کاربران </option>
              <option value="user,insert">مدیریت کاربران -  جدید</option>
              <option value="user,delete">مدیریت کاربران -  حذف</option>
            </select>
            </div></td>
        <td width="104"><div align="right"><strong>حقوق دسترسی</strong></div></td>
      </tr>
    </table>
	
		</td>
    </tr>-->
	 
	 


     <tr>
       <td width="35" height="34"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image15','','images/sabt1.gif',1)"></a></td>
       <td width="472"><a onclick="form.submit();" href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image15','','images/sabt1.gif',1)">ثبت</a></td>
       <td height="34">&nbsp;</td>
       </tr>
    </table>
      </td>
    </tr>
</table>
    <p>&nbsp;</p>
    
    <p><br/>
       </p>
    </form>
  </div>






  <div id="search" style="display:none">
    <form id="searchform" name="searchform" enctype="multipart/form-data" method="post" action="index.php?page=user&cmd=search&sec=admin">
  <br/>
    <table width="576" cellpadding="0" border="1"  cellspacing="0" align="center" class="tabale">
    <tr>
    <td width="576">
    <table width="576" cellpadding="0" border="0"  cellspacing="0" align="center">
     <tr>
      <td height="30" colspan="2" align="right" valign="middle" class="texttable"><span id="spryselect2">
      <label>
        <select name="searchcategory" id="searchcategory">
        	<option value="">انتخاب کنید</option>
        	<?php 
			//print_r($categorylist);
			$i=0;
			while($categoryList[$i])
			{
			 ?>
              <option  value="<?php echo $categoryList[$i]['categoryId']?>">
              <?php echo $categoryList[$i]['category']?>
              </option>
             <?php $i++;}?>
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
 <table width="426" border="1" cellpadding="0" cellspacing="0" align="center">
    <tr>
      <td colspan="5" bgcolor="#680101" align="center" class="textitr">لیست کاربران </td>
    </tr>
    
    
  
   <tr bgcolor="#CCCCCC">

       <td width="221"  align="center" class="texttable">کلمه عبور </td>
      <td width="153"  align="center" class="texttable">نام کاربری</td>

      <td width="44"  align="center" class="texttable">&nbsp;</td>
    </tr>
    
    

<?php 
//print_r($userlist);
$i=0;
while($userlist[$i])
{

?>
    <tr>
       <td  align="center" class="texttable"> 
	   <?php  echo  $userlist[$i]['password'] ;?>
      </td>
      <td  align="center" class="texttable"> 
	   <?php  echo $userlist[$i]['user_name'] ;?>      </td>

      <td  align="center" class="texttable"> <a href="index.php?page=user&cmd=delete&user_code=<?php echo $userlist[$i]['id']?>&sec=admin">حذف</a></td>
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

