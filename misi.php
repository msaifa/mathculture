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
    <td width="9%"><a href="instruksi.php"><img src="img/Button-Back-Menu2.png" width="100" height="100" border="0" /></a></td>
    
  </tr>
<tr >
    <td width="25%">
      <a href="misi1.php"><img src="img/misi/bwi.png" width="200" height="232" border="0"/></a></td>
    <td width="25%"><a href="misi2.php"><img src="img/misi/sby.png" width="200" height="232" border="0"/></a></td>
    <td width="25%"><a href="misi3.php"><img src="img/misi/pasuruan.png" width="200" height="232" border="0"/></a>
    <td width="25%"><a href="misi4.php"><img src="img/misi/lamongan.png" width="200" height="232" border="0"/></a>
    <td width="25%"><a href="misi5.php"><img src="img/misi/tengger.png" width="200" height="232" border="0"/></a>
    </td>
  </tr>
<tr>
    <td width="25%"><a href="misi6.php"><img src="img/misi/jombang.png" width="200" height="232" border="0"/></a></td>
    <td width="25%"><a href="misi7.php"><img src="img/misi/tuban.png" width="200" height="232" border="0"/></a></td>
    <td width="25%"><a href="misi8.php"><img src="img/misi/ponorogo.png" width="200" height="232" border="0"/></a>
    <td width="25%"><a href="misi9.php"><img src="img/misi/madura.png" width="200" height="232" border="0"/></a>
    <td width="25%"><a href="misi10.php"><img src="img/misi/thedak.png" width="200" height="232" border="0"/></a>
    </td>
  </tr>

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