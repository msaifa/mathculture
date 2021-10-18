<?php 
  require('init.php');

  if( !isset($_SESSION["submit"])) {
    redirect("login.php");
    exit;
  } else {
    redirect("halobony.php");
    exit;
  }

?>