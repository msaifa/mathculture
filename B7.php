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
    <title>|KUIS B-7|</title>
    <style>
        body{
            background-image: url("img/B7.png");
            background-repeat: no-repeat;
            background-size: 100%
        }
    </style>
</head>
</head>
<body>
<table width="57%" height="585" border="0" cellpadding="5" cellspacing="1">
  <td></td>
  <tr>
    <td><div align="right">
    <br><a href="B8.php"><img src="img/button_opsi.png" width="30" height="30" border="0" /></a></br>
    <br></br>
    <br></br>
    <p></p>
    <br><a href="B8.php"><img src="img/button_opsi.png" width="30" height="30" border="0" /></a></br>
    <p></p>
    </div></td>
  </tr>
</table>
</body>
</html>