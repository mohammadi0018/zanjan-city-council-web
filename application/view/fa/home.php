<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/content.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:1px;
	top:1px;
	width:538px;
	height:376px;
	z-index:1;
}
-->
</style>
<script src="js/slide.js"></script>
<script type="text/javascript">
<!--
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
//-->
</script>
</head>



<div id="content">
  <table width="542" height="25" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="177" align="center" valign="middle" class="tabcontent"><a href="#" onclick="MM_showHideLayers('contentone','','hide','contenttwo','','hide','contenttree','','show')">اخبار استان و ایران</a></td>
      <td width="168" align="center" valign="middle" class="tabcontent"><a href="#" onclick="MM_showHideLayers('contentone','','hide','contenttwo','','show','contenttree','','hide')">اخبار و شورا</a></td>
      <td width="183" align="center" valign="middle" class="tabcontent"><a href="#" onclick="MM_showHideLayers('contentone','','show','contenttwo','','hide','contenttree','','hide')">نطق ها، مصاحبه ها و مقالات</a></td>
    </tr>
  </table>
<table width="540" height="380" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    <div class="maincontent" id="maincontent">
    <div id="contentone" class="contentone">
      <table width="530" height="151" border="0" align="center" cellpadding="0" cellspacing="0">
 
 	<?php 

$i=0;
while($newslist['notgh'][$i])
{

?>
          <tr>
            <td height="20" colspan="2"  align="right" valign="top" >&nbsp;</td>
			</tr>
          <tr>
		  
            <td width="259" height="130" align="center" valign="middle" class="pointer" dir="rtl" >
			
			<table width="245" border="1" align="center" class="tablenotgh">
              <tr>
                <td width="152" height="57" rowspan="2" align="right" valign="top" dir="rtl"><font face="tahoma" color="#000000">
			<?php echo $newslist['notgh'][$i]['title']?>			
			</font>
                  <table width="140" border="0" align="center">
                    <tr>
                      <td height="22" align="left" valign="middle"><a href="index.php?page=news&cmd=newsview&newsid=<?php echo $newslist['notgh'][$i]['newsId']?>" class="pointer">ادامه مطلب </a></td>
                      </tr>
                  </table>                  </td>
                <td width="82" height="100" align="center" valign="middle"><img src="<?php echo $newslist['notgh'][$i]['picture']?>" width="99"  height="67" />                  </td>
              </tr>
              <tr>
                <td align="center"><font color="#000000"><?php echo $newslist['notgh'][$i]['createDate']?></font></td>
              </tr>
            </table>
			
			</td>

            <td width="261" align="center" valign="middle">
			
			<table width="245" border="1" align="center" class="tablenotgh">
              <tr>
                <td width="152" height="57" rowspan="2" align="right" valign="top" dir="rtl"><font face="tahoma" color="#000000">
			<?php echo $newslist['notgh'][$i+1]['title']?>			
			</font>
                  <table width="140" border="0" align="center">
                    <tr>
                      <td height="22" align="left" valign="middle"><a href="index.php?page=news&cmd=newsview&newsid=<?php echo $newslist['notgh'][$i+1]['newsId']?>" class="pointer">ادامه مطلب </a></td>
                      </tr>
                  </table>                
				  
			
			 </td>
                <td width="82" height="100" align="center" valign="middle"><img src="<?php echo $newslist['notgh'][$i+1]['picture']?>" width="99"  height="67" />                  </td>
              </tr>
              <tr>
                <td align="center"><font color="#000000"><?php echo $newslist['notgh'][$i+1]['createDate']?></font></td>
              </tr>
            </table></td>
			
          </tr>
        
 <?php $i=$i+2;}?>     
      </table>
    
    </div>
    
    <div id="contenttwo" class="contenttwo">
      <table width="530" height="377" border="0" align="center" cellpadding="0" cellspacing="0">
      
	  <?php 

$i=0;
while($newslist['akhbaroshora'][$i])
{

?>
          <tr>
            <td height="69"  align="right" valign="top" ><p><span class="dama">
			<font face="tahoma" color="#000000">
			<?php echo $newslist['akhbaroshora'][$i]['title']?></font></span></p>
             </td>
			<td height="14"  align="right" valign="top" ><img src="<?php echo $newslist['akhbaroshora'][$i]['picture']?>" width="99"  height="67" />
			<br /> <font color="#000000"><?php echo $newslist['akhbaroshora'][$i]['createDate']?></font>
             </td>
          </tr>
          <tr>
            <td height="14" align="left" valign="top" class="pointer" > <a href="index.php?page=news&cmd=newsview&newsid=<?php echo $newslist['akhbaroshora'][$i]['newsId']?>"> ادامه مطلب ...</a><hr /> </td>
            <td width="85" align="center" valign="middle">&nbsp;</td>
          </tr>
          
 <?php $i++;}?> 
	  
	  
      </table>
    </div>
    
    <div id="contenttree" class="contenttree">
      <table width="512" height="377" border="0" align="center" cellpadding="0" cellspacing="0">
	  
	  <?php 
//print_r($newslist);
		$i=0;
		while($newslist['akhbarostan'][$i])
		{
		
		?>
        <tr>
          <td height="49"   align="right" valign="top" bgcolor="#F0F5F9" class="texttable">
		  <?php echo $newslist['akhbarostan'][$i]['title']?>
		  </td>
		  <td height="14"  align="right" valign="top" ><img src="<?php echo $newslist['akhbarostan'][$i]['picture']?>" width="99"  height="67" /><br /><font color="#000000"><?php echo $newslist['akhbarostan'][$i]['createDate']?></font>
             </td>
          </tr>
       
	    <tr>
          <td width="430" height="14" align="left" valign="top" class="text" dir="rtl"><a href="index.php?page=news&cmd=newsview&newsid=<?php echo $newslist['akhbarostan'][$i]['newsId']?>">ادامه مطلب ...</a> </td>
          <td width="82" align="center" valign="middle">&nbsp;</td>
        </tr>
		 <?php $i++;}?>  
	   
	   
      </table>
    </div>
 
    </div></td>
    </tr>
</table>

  <table width="544" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr><td height="10"></td></tr>
  
  
  
   <tr>
      <td align="right" valign="top" ><img src="images/leftacardion.gif" width="11" height="26" /></td>
      <td align="right" class="backacardion">مصوبات شورا</td>
      <td align="right" valign="top"><img src="images/rightacardion.gif" alt="" width="11" height="26" /></td>
      </tr>
    <tr>
      <td colspan="3" align="right" >
       <div class="acardiontree" id="acardiontree" style="display:block">
      <table  border="0" align="right" cellpadding="1" cellspacing="1">
        
<?php 

$i=0;
while($newslist['mosavabat'][$i])
{

?>

          <tr>
            <td height="85" align="right" valign="top" dir="rtl" class="pointer" > <a href="index.php?page=news&cmd=newsview&newsid=<?php echo $newslist['mosavabat'][$i]['newsId']?>"> <?php echo $newslist['mosavabat'][$i]['title']?></a><hr /></td>
            <td width="15" align="center" valign="middle">&nbsp;</td>
          </tr>
          
 <?php $i++;}?>         
          
        </table>
      </div>
      </td>
      </tr>
  
  
  
    <tr>
      <td align="right" valign="top" ><img src="images/leftacardion.gif" width="11" height="26" /></td>
      <td align="right"  class="backacardion">طرح ها</td>
      <td align="right" valign="top"><img src="images/rightacardion.gif" alt="" width="11" height="26" /></td>
      </tr>
    <tr>
      <td colspan="3" align="right" >
      
      <div class="acardionone" id="acardionone" style="display:block">
      <table  border="0" align="right" cellpadding="1" cellspacing="1">
        
<?php 

$i=0;
while($newslist['tarh'][$i])
{

?>

          <tr>
            <td height="85" align="right" valign="top" dir="rtl" class="pointer" > <a href="index.php?page=news&cmd=newsview&newsid=<?php echo $newslist['tarh'][$i]['newsId']?>"> <?php echo $newslist['tarh'][$i]['title']?></a><hr /></td>
            <td width="15" align="center" valign="middle">&nbsp;</td>
          </tr>
          
 <?php $i++;}?>         
          
        </table>
      </div>
      </td>
      </tr>
    
    
    <tr>
      <td align="right" valign="top" ><img src="images/leftacardion.gif" width="11" height="26" /></td>
      <td align="right" class="backacardion">لوایح</td>
      <td align="right" valign="top"><img src="images/rightacardion.gif" alt="" width="11" height="26" /></td>
      </tr>
    <tr>
      <td colspan="3" align="right" >
       <div class="acardiontwo" id="acardiontwo" style="display:block">
    <table  border="0" align="right" cellpadding="1" cellspacing="1">
        
<?php 

$i=0;
while($newslist['lavayeh'][$i])
{

?>

          <tr>
            <td height="85" align="right" valign="top" dir="rtl" class="pointer" > <a href="index.php?page=news&cmd=newsview&newsid=<?php echo $newslist['lavayeh'][$i]['newsId']?>"> <?php echo $newslist['lavayeh'][$i]['title']?></a><hr /></td>
            <td width="15" align="center" valign="middle">&nbsp;</td>
          </tr>
          
 <?php $i++;}?>         
          
        </table>
      </div>
      </td>
      </tr>
    
   
  </table>


</div>