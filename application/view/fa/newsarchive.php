<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<div class="newscontenio" id="newscontenio">

<table width="100%"  border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="3"><hr></td></tr>
  <tr>
     <td height="20" colspan="3" align="right" class="imagetable" bgcolor="#E1EFFD">
	آرشیو
	</td>
  </tr>
   <tr><td colspan="3"><hr></td></tr>
<?php 

$i=0;
while($newslist[$i])
{

?>
          <tr>
            <td height="25" align="right" valign="top" class="pointer" > <a href="index.php?page=news&cmd=newsview&newsid=<?php echo $newslist[$i]['newsId']?>"><?php echo $newslist[$i]['title']?></a></td>
            <td width="14" align="center" valign="middle">&nbsp;</td>
          </tr>
          
 <?php $i++;}?> 
    

    
</table>

 

</div>

