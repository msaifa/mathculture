<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "mathculture");

if( isset($_POST["submit"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

  if( mysqli_num_rows($result)===1 ){
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])) {
      $_SESSION["submit"] = true;
      header("Location: halobony.php");
      exit;
    }

  }

  $error = true;
}
  if( isset($error)) {
    echo "<script>
            alert('username atau password salah!')
          </script>";
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>|LOGIN|</title>
    <style>
        body {
            background-image: url("img/Background8.png");
            background-repeat: no-repeat;
            background-size: 100%
        }
    </style>
</head>
<body>
<table width="100%" height="650" border="0" cellpadding="5" cellspacing="1">
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
    <td>&nbsp;</td>
  </tr>
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
    <td>&nbsp;</td>
  </tr>
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
    <td><div align="center">
    <form action="" method="post">
        <ul>
        <br></br>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" required>
        <br></br>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required>
        <br></br>
        <button type="submit" name="submit"><img src="img/masuk.png" width="150" height="75" border="0"></button>
        <p><a href="registrasi.php">Belum Punya Akun?</a></p>
        </ul>
    </form> 
    </div></td>
  </tr>
  <tr>
    <td height="10">&nbsp;</td>
  </tr>
</table>
</body>
</html>