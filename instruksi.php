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
    <title>|MISI|</title>
    <style>
        body{
            background-image: url("img/background6.jpg");
            background-repeat: no-repeat;
            background-size: 100%
        }
    </style>
</head>
<body>
<table width="100%" height="601" border="0" cellpadding="5" cellspacing="1">
  <tr>
    <td width="9%"><a href="menu.php"><img src="img/Button-Back-Menu2.png" width="100" height="100" border="0" /></a></td>
    <td width="30%">&nbsp;</td>
    <td width="24%">&nbsp;</td>
    <td width="24%">&nbsp;</td>
    <td width="13%">&nbsp;</td>
  </tr>
  <tr>
    <td height="365">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"><a href="misi.php"><img src="img/klik.png" width="283" height="142" border="0" /></a></div></td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>