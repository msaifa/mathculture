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
    <meta charset="utf-8">
    <title>|MISI|</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-image: url("img/background9.jpg");
            background-repeat: no-repeat;
            background-size: 100%
        }
    </style>
</head>
<body>
<table width="100%" height="601" border="0" cellpadding="5" cellspacing="1">
  <tr>
    <td width="9%"><a href="menu.php"><img src="img/Button-Back-Menu2.png" width="150" height="150" border="0" /></a></td>
    <td width="30%">&nbsp;</td>
    <td width="24%">&nbsp;</td>
    <td width="24%">&nbsp;</td>
    <td width="13%">&nbsp;</td>
  </tr>
</table>
</body>
</html>