<?php
session_start();
require('init.php');

if( !isset($_SESSION["submit"])) {
  redirect("login.php");
  exit;
}

  if (isset($_GET['reset']) && $_GET['reset'] == 1){
    $loginData = $_SESSION["login"] ;
    $userid = $loginData['userid'] ;

    $result = mysqli_query($conn, "UPDATE users SET misi = 0 WHERE userid = $userid");
  }

?>

<!DOCTYPE html>
<html>
<head>
    <title>|MENU|</title>
    <style>
        body{
            background-image: url("img/background4.jpg");
            background-repeat: no-repeat;
            background-size: 100%
        }
    </style>
</head>
<body>
<table width="100%" height="507" border="0" cellpadding="5" cellspacing="1">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="241">&nbsp;</td>
  </tr>
  <tr>
    <td height="151"><table width="97%" border="0" align="center" cellpadding="5" cellspacing="1">
      <tr>
        <td><div align="center"><a href="instruksi.php"><img src="img/Button-Misi.png" width="200" height="200" border="0" /></a></div></td>
        <td><div align="center"><a href="materi.php"><img src="img/Button-Materi.png" width="200" height="200" border="0" /></a></div></td>
        <td><div align="center"><a href="openkuis.php"><img src="img/Button-Quiz.png" width="200" height="200" border="0" /></a></div></td>
        <td><div align="center"><a href="reward.php"><img src="img/Button-Reward.png" width="200" height="200" border="0" /></a></div></td>
        <td><div align="center"><a href="menu.php?reset=1"><img src="img/Button-Reset.png" width="200" height="200" border="0" /></a></div></td>
        <td><div align="center"><a href="logout.php"><img src="img/Button-Keluar.png" width="200" height="200" border="0" /></a></div></td>
      </tr>
</body>
</html>