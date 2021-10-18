<?php
session_start();  require('init.php');
if( !isset($_SESSION["submit"])) {
  redirect("login.php");
  exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>|KONSEP HIMPUNAN|</title>
    <style>
        body{
            background-image: url("img/Materi1-4.png");
            background-repeat: no-repeat;
            background-size: 100%
        }
    </style>
</head>
<body>
<table width="100%" height="578" border="0" cellpadding="5" cellspacing="1">
  <tr>
    <td width="9%"><a href="materi1-3.php"><img src="img/Button-Back.png" width="90" height="90" border="0" /></a></td>
    <td height="20%">&nbsp;</td>
    <td width="9%"><a href="materi.php"><img src="img/Button-Back-Menu2.png" width="100" height="100" border="0" /></a></td>
  </tr>
    <td width="13%">&nbsp;</td>
  </tr>
  <tr>
    <td width="20%"></td>
    <td><textarea class ="form-control" name="isian" rows="4" cols="98"></textarea></td>
    <td height = "42%"></td>
  </tr>
  <tr height="20%"></tr>
  <tr></tr>
  <tr height="20%"></tr>
  <tr>
    <td width="15%"></td>
    <td><textarea class ="form-control" name="isian" rows="4" cols="98"></textarea></td>
    <td height="50%"></td>
  </tr>
</table>
</body>
</html>