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
    <title>|KUIS A-1|</title>
    <style>
        body{
            background-image: url("img/A1.png");
            background-repeat: no-repeat;
            background-size: 100%
        }
    </style>
</head>
<body>
<table width="63%" height="610" border="0" cellpadding="5" cellspacing="1">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <p></p>
  <p></p>
  <td></td>
  <tr>
    <td><div align="right">
    <br><a href="A2.php"><img src="img/button_opsi.png" width="30" height="30" border="0"/></a></br>
    <br><a href="A2.php"><img src="img/button_opsi.png" width="30" height="30" border="0"/></a></br>
    <p><a href="A2.php"><img src="img/button_opsi.png" width="30" height="30" border="0"/></a></p>
    <p><a href="A2.php"><img src="img/button_opsi.png" width="30" height="30" border="0"/></a></p>
    </div></td>
  </tr>
  <table width="100%" height="125" border="0" cellpadding="0" cellspacing="0">
  <td > <div align="center">
  <a href="quizA.php "><img src="img/ssebelum.png"  width="200" height="50" border="0"/></a>
  <a href="A2.php"><img src="img/slanjut.png"  width="200" height="50" border="0"/></a>
  <td width="6%">&nbsp;</td>
  </div></td>
</table>
</body>
</html>