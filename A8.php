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
    <title>|KUIS A-8|</title>
    <style>
        body{
            background-image: url("img/A8.png");
            background-repeat: no-repeat;
            background-size: 100%
        }
    </style>
</head>
<body>
<table width="57%" height="580" border="0" cellpadding="5" cellspacing="1">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <p></p>
  <p></p>
  <td></td>
  <tr>
    <td><div align="right">
    <br><a href="A9.php"><img src="img/button_opsi.png" width="30" height="30" border="0" /></a></br>
    <p></p>
    <br><a href="A9.php"><img src="img/button_opsi.png" width="30" height="30" border="0" /></a></br>
    <p></p>
    <br><a href="A9.php"><img src="img/button_opsi.png" width="30" height="30" border="0" /></a></br>
    <p></p>
    <br><a href="A9.php"><img src="img/button_opsi.png" width="30" height="30" border="0" /></a></br>
    </div></td>
  </tr>
</table>
</body>
</html>