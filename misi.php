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
    <title>|REWARD|</title>
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
<table width="100%" height="500" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td width="9%"><a href="menu.php"><img src="img/Button-Back-Menu2.png" width="100" height="100" border="0" /></a></td>
    <td align="center" width="90%" colspan="3"><h1 style="background-color:white">MISI</font></h1></td>
  </tr>
  
<tr>
    <td width="20%" align="center">
      <a href="misi1.php?no=1"><img src="img/misi/bwi.png" width="200" height="232" border="0"/></a>
    <h4 style="background-color:white" >Tari Jajar Gandrung </h4>
    </td>
    <td width="20%" align="center">
      <a href="misi1.php?no=2"><img src="img/misi/sby.png" width="200" height="232" border="0"/></a>
      <h4 style="background-color:white" >Motif Batik Semanggi</h4>
    </td>
    <td width="20%" align="center">
      <a href="misi1.php?no=3"><img src="img/misi/tengger.png" width="200" height="232" border="0"/></a>
    <h4 style="background-color:white" >Suku Tengger</h4>
    </td>
    <td width="20%" align="center">
      <a href="misi1.php?no=4"><img src="img/misi/pasuruan.png" width="200" height="232" border="0"/></a>
    <h4 style="background-color:white">Jamu Kebonagung Pasuruan</h4>
    </td>
    <td width="20%" align="center">
      <a href="misi1.php?no=5"><img src="img/misi/lamongan.png" width="200" height="232" border="0"/></a>
    <h4 style="background-color:white">Motif Batik Lamongan</h4>
    </td>
    </td>
  </tr>
<tr>
    <td width="20%" align="center"><a href="misi1.php?no=6"><img src="img/misi/madura.png" width="200" height="232" border="0"/></a>
    <h4 style="background-color:white">Celurit Madura</h4>
    </td>
    <td width="20%" align="center"><a href="misi1.php?no=7"><img src="img/misi/tuban.png" width="200" height="232" border="0"/></a>
    <h4 style="background-color:white">Motif Batik Tuban</h4>
    </td>
    <td width="20%" align="center"><a href="misi1.php?no=8"><img src="img/misi/tedhak.png" width="200" height="232" border="0"/></a>
    <h4 style="background-color:white">Upacara Tedhak</h4>
    </td>
    <td width="20%" align="center"><a href="misi1.php?no=9"><img src="img/misi/ponorogo.png" width="200" height="232" border="0"/></a>
    <h4 style="background-color:white">Siter Reog Ponorogo</h4>
    </td>
    <td width="20%" align="center"><a href="misi1.php?no=10"><img src="img/misi/jombang.png" width="200" height="232" border="0"/></a>
    <h4 style="background-color:white">Nasi Kikil Jombang</h4>
    </td>
  </tr>
</table>
</body>
</html>