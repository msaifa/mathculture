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
    <title>|MENYATAKAN HIMPUNAN|</title>
    <style>
        body{
            background-image: url("img/Materi2.png");
            background-repeat: no-repeat;
            background-size: 100%
        }
    </style>
</head>
<body>
<table width="100%" height="601" border="0" cellspacing="2">
  <tr>
    <td width="9%"><a href="materi.php"><img src="img/Button-Back.png" width="80" height="80" border="0" /></a></td>
    <td height="17%">&nbsp;</td>
    <td width="9%"><a href="materi2-1.php"><img src="img/Button-Next.png" width="80" height="80" border="0" /></a></td>
  </tr>
    <td width="2%">&nbsp;</td>
  </tr>
</table>
</body>
</html>