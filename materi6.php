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
    <title>|KARDINALITAS HIMPUNAN|</title>
    <style>
        body{
            background-image: url("img/Materi6.png");
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
  </tr>
    <td width="2%">&nbsp;</td>
  </tr>
</body>
</html>