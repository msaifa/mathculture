<?php 

  if( !isset($_SESSION["submit"])) {
    header("Location: login.php");
    exit;
  } else {
    header("Location: halobony.php");
    exit;
  }

?>