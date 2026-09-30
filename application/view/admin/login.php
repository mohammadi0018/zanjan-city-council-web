<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="login" action="" method="post">
<table width="323" height="159" border="0" align="center" style="border-style:solid">
  <tr>
    <td height="39" colspan="2"><div align="center"><strong>ورود به سیستم مدیریت </strong></div> <hr />	</td>
  </tr>
  <tr>
    <td width="214"><div align="center">
      <input type="text" name="user_name" />
    </div></td>
    <td width="129"><div align="center">نام کاربری </div></td>
  </tr>
  <tr>
    <td height="53"><div align="center">
      <input type="password" name="password"  />
    </div></td>
    <td><div align="center">کلمه عبور </div></td>
  </tr>
  <tr>
    <td height="27"><div align="center">
      <input type="submit" name="submit" value="ورود" />
    </div></td>
    <td>&nbsp;</td>
  </tr>
</table>
<table align="center" border="0">
  <tr>
    <td>
	<font color="#CC0000"><?php echo $msg;?></font>
	</td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
</body>
</html>
