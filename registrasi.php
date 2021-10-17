<?php
$conn = mysqli_connect("localhost", "root", "", "mathculture");

function registrasi($data) {
  global $conn;
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);

  $result = mysqli_query($conn, "SELECT username FROM users WHERE username ='$username'");
  if( mysqli_fetch_assoc($result) ) {
    echo "<script>
            alert('username sudah terdaftar!')
          </script>";
    return false;
  }

  $password = hash("sha256", $password);

  mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password', 0)");

  return mysqli_affected_rows($conn);
}

if( isset($_POST["register"])) {
  if(registrasi($_POST) > 0) {
    header("Location: login.php");
  } else{
    echo mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>|REGISTRASI|</title>
    <style>
        body {
            background-image: url("img/background2.png");
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
    <td><div align="center">
    <form action="" method="post">
        <ul>
            <br></br>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <br></br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <br></br>
            <button bgcolor="#00FF00" type="submit" name="register"><img src="img/registrasi1.png" width="150" height="75" border="0"></button>
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