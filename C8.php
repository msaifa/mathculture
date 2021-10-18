<?php
  session_start();
  require('init.php');
  if( !isset($_SESSION["submit"])) {
    redirect("login.php");
    exit;
  }

  $soalno = 8;
  $jawabanKu = "" ;

  if (isset($_SESSION['jawabanquizC'])){
    $jawaban = $_SESSION['jawabanquizC'];
    if (isset($jawaban[$soalno])){
      $jawabanKu = $jawaban[$soalno];
    }
  } else {
    $jawaban = [] ;
  }

  if (isset($_GET['answer'])){
    $jawaban[$soalno] = $_GET['answer'];

    // set jawaban ke session
    $_SESSION['jawabanquizC'] = $jawaban;
    $jawabanKu = $_GET['answer'];
  }  

?>
<!DOCTYPE html>
<html>
<head>
    <title>|KUIS C-<?= $soalno ?>|</title>
    <style>
        body{
            background-image: url("img/C<?= $soalno ?>.png");
            background-repeat: no-repeat;
            background-size: 100%
        }
        #wadahButton{
          
          left:10%;
          bottom:0;
          width: 100%;
          margin-top: 5.5%;
          padding-bottom: 2.5%;
        }
        #btnBack{
          float:left;
          margin-left: 3%;
        }
        #btnNext{
          float: right;
          margin-right:3.5%;
        }
        #wadahChekbox{
          margin-left: 54.5%;
          margin-top: 18.3%;
        }
        #wadahChekbox div{
          margin-top: 7.4%;
        }
    </style>
</head>
<body>
<div id="wadahChekbox">
    <div><a href="C<?= $soalno ?>.php?answer=A"><img src="<?= $jawabanKu == 'A' ? 'img/button_opsi2.png' : 'img/button_opsi.png'?>" width="4.5%" height="4.5%"/></a></div>
    <div><a href="C<?= $soalno ?>.php?answer=B"><img src="<?= $jawabanKu == 'B' ? 'img/button_opsi2.png' : 'img/button_opsi.png'?>" width="4.5%" height="4.5%"/></a></div>
    <div><a href="C<?= $soalno ?>.php?answer=C"><img src="<?= $jawabanKu == 'C' ? 'img/button_opsi2.png' : 'img/button_opsi.png'?>" width="4.5%" height="4.5%"/></a></div>
    <div><a href="C<?= $soalno ?>.php?answer=D"><img src="<?= $jawabanKu == 'D' ? 'img/button_opsi2.png' : 'img/button_opsi.png'?>" width="4.5%" height="4.5%"/></a></div>
  </div>
  <div id="wadahButton">
    <a href="C<?= $soalno-1 ?>.php" id="btnBack"><img src="img/ssebelum.png"  width="225" height="50" border="0"/></a>
    <a href="C<?= $soalno+1 ?>.php" id="btnNext"><img src="img/slanjut.png"  width="225" height="50" border="0"/></a>
  </div>
</body>
</html>