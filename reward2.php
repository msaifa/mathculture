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
    <title>|REWARD|</title>
    <style>
        body{
            background-image: url("img/reward/Background.png");
            background-repeat: no-repeat;
            background-size: 100%
        }
    </style>
</head>
<body>
<table width="100%" height="100" border="0" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td width="100%"><img src="img/reward/2.png" width="1300" height="650" border="0" /></td>
</table>
<table width="100%" height="50" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100%"><a href="reward1.php"><img src="img/Button-Back.png" width="90" height="90" border="0" /></a></td>
    <td height="5%">&nbsp;</td>
    <td width="100%"><a href="reward3.php"><img src="img/Button-Next.png" width="90" height="90" border="0" /></a></td>
  </tr>
    <td width="20%">&nbsp;</td>
  </tr>
</table>
</body>
</html>