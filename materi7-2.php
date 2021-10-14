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
    <title>|KONSEP HIMPUNAN|</title>
    <style>
        body{
            background-image: url("img/Materi 7-2.png");
            background-repeat: no-repeat;
            background-size: 100%
        }
    </style>
</head>
<body>
<table width="100%" height="601" border="0" cellpadding="5" cellspacing="1">
  <tr>
    <td width="9%"><a href="materi7-1.php"><img src="img/Button-Back.png" width="90" height="90" border="0" /></a></td>
    <td height="20%">&nbsp;</td>
    <td width="9%"><a href="materii.php"><img src="img/Button-Back-Menu2.png" width="100" height="100" border="0" /></a></td>
  </tr>
    <td width="13%">&nbsp;</td>
  </tr>
</table>
</body>
</html>