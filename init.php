<?php 

$conn = mysqli_connect("localhost", "root", "", "mathculture");

  echo '<meta name="viewport" content="width=1024">' ;

  function redirect($url){
    echo "<script>window.location.href = '$url';</script>";
  }

?>