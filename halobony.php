<?php
session_start();
if( !isset($_SESSION["submit"])) {
  header("Location: login.php");
  exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>|Halaman Utama|</title>
    <style>
        body{
            background-image: url("img/background3.png");
            background-repeat: no-repeat;
            background-size: 100%
        }
    </style>
</head>
<body>
<table width="100%" height="650" border="0" cellpadding="5" cellspacing="1">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">
        <a href="developers.php"><img src="img/about1.png" width="150" height="75" border="0" /></a>
        <a href="menu.php"><img src="img/6ikut.png" width="200" height="100" border="0" /></a>
        <a href="logout.php"><img src="img/logout1.png" width="150" height="75" border="0" /></a>
    </div></td>
  </tr>
</table>
</body>
</html>