<?php
session_start();  
require('init.php');
if( !isset($_SESSION["submit"])) {
  redirect("login.php");
  exit;
}
$no=$_GET['no'];
/*$level = 0;

  if (isset($_SESSION["login"]) && $_SESSION["login"]){
    $loginData = $_SESSION["login"] ;
    $userid = $loginData['userid'] ;

    $result = mysqli_query($conn, "SELECT * FROM users WHERE userid = $userid");

    if( mysqli_num_rows($result)===1 ){
      $row = mysqli_fetch_assoc($result);
      
      $level = $row['misi'];
    }
  }

  if (isset($_GET['no'])){
    if (($level+1) >= $_GET['no']){
      redirect("?no='.($no+1).'" . $_GET['no']);
    } else {
      echo '<script>alert("Anda harus menyelesaikan reward ke-'.($level+1).' terlebih dahulu!")</script>' ;
    }
  } */

?>

<!DOCTYPE html>
<html>
<head>
    <title>|REWARD|</title>
    <style>
        body{
            background-image: url("img/reward/Background.png");
            background-repeat: no-repeat;
            background-size: 100%;
        }
        #space{
            margin-top: -2%;
            margin-bottom: -1%;
        }

    </style>
</head>
<body>
<table width="100%" height="100" border="0" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td width="100%"><img src="img/reward/<?= $no ?>.png" width="1150" height="575" border="0" /></td>
</table>
<table id="space" width="100%" height="50" border="0" cellpadding="0" cellspacing="0">
  <tr>
  <?php 
      if ($no!=1){
        echo '<td width="100%"><a href="?no='.($no-1).'"><img src="img/Button-Back.png" width="80" height="80" border="0" /></a></td>';
      }else {
        echo '<td width="100%"><a href="reward.php"><img src="img/Button-Back-Menu2.png" width="80" height="80" border="0" /></a></td>';
      }
    ?>
    <td height="5%">&nbsp;</td>
    <?php 
      if ($no!=10){
        echo '<td width="100%"><a href="?no='.($no+1).'"><img src="img/Button-Next.png" width="80" height="80" border="0" /></a></td>';
      }else {
        echo '<td width="100%"><a href="reward.php"><img src="img/Button-Back-Menu2.png" width="80" height="80" border="0" /></a></td>';
      }
    ?>
  </tr>
    <td width="20%">&nbsp;</td>
  </tr>
</table>
</body>
</html>