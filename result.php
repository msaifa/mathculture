<?php
  session_start();
  if( !isset($_SESSION["submit"])) {
    header("Location: login.php");
    exit;
  }

  $kunciJawabanA = [
      "0",
      "A",
      "A",
      "A",
      "A",
      "A",
      "A",
      "A",
      "A",
      "A",
      "A",
  ] ;

  $kunciJawabanB = [
    "0",
    "A",
    "A",
    "A",
    "A",
    "A",
    "A",
    "A",
    "A",
    "A",
    "A",
] ;

$kunciJawabanC = [
    "0",
    "A",
    "A",
    "A",
    "A",
    "A",
    "A",
    "A",
    "A",
    "A",
    "A",
] ;
  $hasil = [] ;
  $nilai = 0;
  
  if (isset($_SESSION['jawabanquizA'])){
    $jawaban = $_SESSION['jawabanquizA'];

    for($i = 1 ; $i < 11 ; $i++){
        if (isset($jawaban[$i]) && $kunciJawabanA[$i] == $jawaban[$i]){
          $hasil[$i] = "<b>Benar</b>";
          $nilai += 10;
        } else {
          $hasil[$i] = "<b>Salah</b>";
        }
    }

    unset($_SESSION['jawabanquizA']);
  } else if (isset($_SESSION['jawabanquizB'])){
    $jawaban = $_SESSION['jawabanquizB'];

    for($i = 1 ; $i < 11 ; $i++){
        if (isset($jawaban[$i]) && $kunciJawabanB[$i] == $jawaban[$i]){
          $hasil[$i] = "<b>Benar</b>";
          $nilai += 10;
        } else {
          $hasil[$i] = "<b>Salah</b>";
        }
    }

    unset($_SESSION['jawabanquizB']);
  } else if (isset($_SESSION['jawabanquizC'])){
    $jawaban = $_SESSION['jawabanquizC'];

    for($i = 1 ; $i < 11 ; $i++){
        if (isset($jawaban[$i]) && $kunciJawabanC[$i] == $jawaban[$i]){
          $hasil[$i] = "<b>Benar</b>";
          $nilai += 10;
        } else {
          $hasil[$i] = "<b>Salah</b>";
        }
    }

    unset($_SESSION['jawabanquizC']);
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>|KUIS B-1|</title>
    <style>
        body{
            background-image: url("img/background2.png");
            background-repeat: no-repeat;
            background-size: 100%
        }
        #container{
            width: 50%;
            background: green;
            right: 0;
            margin: auto;
            padding: 16px;
        }
        #wadahJawaban{
            background: red;
            padding: 16px
        }
    </style>
</head>
<body>
    <a href="openkuis.php"><img src="img/Button-Back-Menu2.png" width="90" height="90" border="0" /></a>
    <div id="container">
        <h1 align="center" color="white"><font color="white">Nilai Anda: </font></h1>
        <h1 align="center" color="white"><font color="white"><?= $nilai ?></font></h1>
        <div id="wadahJawaban">
            <?php                 
                if (count($hasil) > 0){
                    for($i = 1 ; $i < 11 ; $i++){
                        echo "Soal No $i : {$hasil[$i]} <br>" ;
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
