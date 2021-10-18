<?php
session_start();
  require('init.php');
  if( !isset($_SESSION["submit"])) {
  redirect("login.php");
  exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>|DEVELOPERS!|</title>
    <style>
        body{
            background-image: url("img/background9.jpg");
            background-repeat: no-repeat;
            background-size: 100%
        }
    </style>
</head>
<body>
<table width="100%" height="647" border="0" cellpadding="5" cellspacing="1">
  <tr>
    <td width="10%" height="103"><div align="center"><a href="halobony.php"><img src="img/18.png" width="85" height="93" border="0" /></a></div></td>
    <td width="26%">&nbsp;</td>
    <td width="28%">&nbsp;</td>
    <td width="26%">&nbsp;</td>
    <td width="10%"><div align="left"></div>
    </td>
  </tr>
  <tr>
    <td height="511">&nbsp;</td>
    <td><div align="center"><img src="img/nur.png" width="283" height="425" /></div></td>
    <td><div align="center"><img src="img/bella.png" width="283" height="425" /></div></td>
    <td><div align="center"><img src="img/helen.png" width="283" height="425" /></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="29">&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td>&nbsp;</td>
    <td><div align="left"></div></td>
  </tr>
</table>
</body>
</html>