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
    <title>|MATERI|</title>
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
    <td width="15%"><a href="menu.php"><img src="img/Button-Back-Menu2.png" width="100" height="100" border="0"/></a></td>
    <td>&nbsp;</td>
    <td width="9%"><a href="materii.php"><img src="img/Button-Next.png" width="100" height="100" border="0"/></a></td>
  <tr>
    <td width="25%"><a href="materi1.php"><img src="img/1.1.png" width="350" height="232" border="0"/></a></td>
    <td width="25%"><a href="materi2.php"><img src="img/2.1.png" width="350" height="232" border="0"/></a></td>
    <td width="25%"><a href="materi3.php"><img src="img/3.1.png" width="350" height="232" border="0"/></a></td>
  </tr>
  <tr>
    <td width="25%"><a href="materi4.php"><img src="img/4.1.png" width="350" height="232" border="0"/></a></td>
    <td width="25%"><a href="materi5.php"><img src="img/5.1.png" width="350" height="232" border="0"/></a></td>
    <td width="25%"><a href="materi6.php"><img src="img/6.1.png" width="350" height="232" border="0"/></a></td>
  </tr>
</table>
</body>
</html>