<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "mathculture");
if( !isset($_SESSION["submit"])) {
  header("Location: login.php");
  exit;
}

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
    </style>
    
    </head>
<body>

<table width="100%" height="100" border="0" cellpadding="1" cellspacing="1">

  <tr>
    <td width="40%"><a href="misi.php"><img src="img/Button-Back.png" width="90" height="90" border="0" /></a></td> 
    <td width="90%"><h1><font color="#FFFFFF">SOAL TANTANGAN</font></h1></td>
  </tr>
  
  <table width="100%" height="125" border="0" cellpadding="1" cellspacing="1">
  <td align="center" width="25%"><a ><img src="img/misi/8.png"  width="1000" height="232" border="0"/></a></td>

  <table width="100%" height="125" border="0" cellpadding="1" cellspacing="1">
  <td > <div align="center">
  <a href=" "><img src="img/misi/button-benar.png"  width="200" height="75" border="0"/></a>
  <a href=" "><img src="img/misi/button-salah.png"  width="200" height="75" border="0"/></a>
  </div></td>

  <table width="100%" height="125" border="0" cellpadding="1" cellspacing="1">
  <td align="center" width="25%"><a ><img src=""  width="900" height="232" border="0"/></a></td>
  



</script>
</body>
</html>