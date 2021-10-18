<?php 
require('init.php');

session_start();
session_destroy();

redirect("login.php");

?>