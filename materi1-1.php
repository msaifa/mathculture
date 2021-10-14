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
    <title>|KONSEP HIMPUNAN|</title>
    <style>
        body{
            background-image: url("img/Materi1-1.png");
            background-repeat: no-repeat;
            background-size: 100%
        }
    </style>
</head>
<body>
<table width="100%" height="575" border="0" cellpadding="5" cellspacing="1">
  <tr>
    <td width="9%"><a href="materi1.php"><img src="img/Button-Back.png" width="90" height="90" border="0" /></a></td>
    <td height="20%">&nbsp;</td>
    <td width="9%"><a href="materi1-2.php"><img src="img/Button-Next.png" width="100" height="100" border="0" /></a></td>
  </tr>
  <tr>
    <td width="20%"></td>
    <td><textarea class ="form-control" name="input1-1" rows="4" cols="98"></textarea></td>
    <td height = "70%"></td>
  </tr>
  <tr height="20%"></tr>
  <tr></tr>
  <tr height="20%"></tr>
  <tr>
    <td width="15%"></td>
    <td><textarea class ="form-control" name="input1-2" rows="4" cols="98"></textarea></td>
    <td height="60%"></td>
  </tr>
</table>
<script type="text/javascript">
  function autoSave(){
    var input1-1 = document.getElementById('input1-1').value;

  }

</script>
</body>
</html>