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
    <title>|SOAL TANTANGAN|</title>
    <style>
        body{
            background-image: url("img/misi/background.png");
            background-repeat: no-repeat;
            background-size: 100%
        }
        #space{
            margin-top: -2.5%;
            margin-bottom: -1%;
        }
        
    </style>
    
    </head>
<body>

<table width="100%" height="100" border="0" cellpadding="1" cellspacing="1">

  <tr >
    <td  width="40%"><a href="misi.php"><img src="img/Button-Back.png" id="space" width="80" height="80" border="0" /></a></td> 
    <td style="padding-top: 1%"; width="90%"><h1 id="space"><font color="#FFFFFF">SOAL TANTANGAN</font></h1></td>
  </tr>
  
  <table width="100%" height="125" border="0" cellpadding="1" cellspacing="1">
  <td align="center" width="25%"><a ><img src="img/misi/<?= $no ?>.png" id="space" width="1000" height="240" border="0"/></a></td>

  <table width="100%" height="125" border="0" cellpadding="1" cellspacing="1">
  <td > <div id="space" align="center">
  <a href="?no=<?= $no?>&&answer=true"><img src="img/misi/button-benar.png"  width="200" height="75" border="0"/></a>
  <a href="?no=<?= $no?>&&answer=false"><img src="img/misi/button-salah.png"  width="200" height="75" border="0"/></a>
  </div></td>

  <table id="space" width="100%" height="125" border="0" cellpadding="1" cellspacing="1">
  <?php
    if (isset($_GET["answer"])){
      echo '<td align="center" width="25%"><a ><img src="img/misi/pembahasan'.$no.'.png"  width="800" height="225" border="0"/></a></td>';

      // update level dong bro
      $loginData = $_SESSION["login"] ;
      $userid = $loginData['userid'] ;
      $level = $_GET['no'];

      $result = mysqli_query($conn, "UPDATE users SET misi = $level WHERE userid = $userid");
    }
  ?>
  



</script>
</body>
</html>