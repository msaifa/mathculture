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
  <tr>
    <td width="15%"><a href="materi.php"><img src="img/Button-Back.png" width="90" height="90" border="0"/></a></td>
  </tr>
  <tr>
    <td width="25%"><a href="materi7.php"><img src="img/7.1.png" width="350" height="232" border="0"/></a></td>
    <td width="25%"><a href="materi8.php"><img src="img/8.1.png" width="350" height="232" border="0"/></a></td>
    <td width="25%"><a href="materi9.php"><img src="img/9.1.png" width="350" height="232" border="0"/></a></td>
  </tr>
  <tr>
    <td width="25%"><a href="materi10.php"><img src="img/10.1.png" width="350" height="232" border="0"/></a></td>
  </tr>
</table>
</body>
</html>