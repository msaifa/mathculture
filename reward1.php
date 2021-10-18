<?php
session_start();  
require('init.php');
if( !isset($_SESSION["submit"])) {
  redirect("login.php");
  exit;
}
$no=$_GET['no'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>|REWARD|</title>
    <style>
        body{
            background-image: url("img/reward/Background.png");
            background-repeat: no-repeat;
            background-size: 100%
        }
    </style>
</head>
<body>
<table width="100%" height="100" border="0" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td width="100%"><img src="img/reward/<?= $no ?>.png" width="1300" height="650" border="0" /></td>
</table>
<table width="100%" height="50" border="0" cellpadding="0" cellspacing="0">
  <tr>
  <?php 
      if ($no!=1){
        echo '<td width="100%"><a href="?no='.($no-1).'"><img src="img/Button-Back.png" width="90" height="90" border="0" /></a></td>';
      }else {
        echo '<td width="100%"><a href="reward.php"><img src="img/Button-Back-Menu2.png" width="90" height="90" border="0" /></a></td>';
      }
    ?>
    <td height="5%">&nbsp;</td>
    <?php 
      if ($no!=10){
        echo '<td width="100%"><a href="?no='.($no+1).'"><img src="img/Button-Next.png" width="90" height="90" border="0" /></a></td>';
      }else {
        echo '<td width="100%"><a href="reward.php"><img src="img/Button-Back-Menu2.png" width="90" height="90" border="0" /></a></td>';
      }
    ?>
  </tr>
    <td width="20%">&nbsp;</td>
  </tr>
</table>
</body>
</html>