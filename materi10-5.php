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
            background-image: url("img/materi/M10-5.jpg");
            background-repeat: no-repeat;
            background-size: cover
        }
    </style>
</head>
<body>
<table width="100%" height="601" border="0" cellpadding="5" cellspacing="1">
  <tr>
    <td width="9%"><a href="materi10-4.php"><img src="img/Button-Back.png" width="90" height="90" border="0" /></a></td>
    <td height="20%">&nbsp;</td>
    <td width="9%"><a href="materi10-6.php"><img src="img/Button-Next.png" width="100" height="100" border="0" /></a></td>
  </tr>
    <td width="13%">&nbsp;</td>
  </tr>
</table>
</body>
</html>