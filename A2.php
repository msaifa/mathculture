<?php
  session_start();
  if( !isset($_SESSION["submit"])) {
    header("Location: login.php");
    exit;
  }

  $soalno = 2 ;
  $jawabanKu = "" ;

  if (isset($_SESSION['jawabanquizA'])){
    $jawaban = $_SESSION['jawabanquizA'];
    if (isset($jawaban[$soalno])){
      $jawabanKu = $jawaban[$soalno];
    }
  } else {
    $jawaban = [] ;
  }

  if (isset($_GET['answer'])){
    $jawaban[$soalno] = $_GET['answer'];

    // set jawaban ke session
    $_SESSION['jawabanquizA'] = $jawaban;
    $jawabanKu = $_GET['answer'];
  }  

?>
<!DOCTYPE html>
<html>
<head>
    <title>|KUIS A-<?= $soalno ?>|</title>
    <style>
        body{
            background-image: url("img/A<?= $soalno ?>.png");
            background-repeat: no-repeat;
            background-size: 100%
        }
        #wadahButton{
          position: fixed;
          left:0;
          bottom:0;
          width: 100%;
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
          margin-left: 59.8%;
          margin-top:20.5%;
        }
    </style>
</head>
<body>
  <div id="wadahChekbox">
    <br><a href="A<?= $soalno ?>.php?answer=A"><img src="<?= $jawabanKu == 'A' ? 'img/button_opsi2.png' : 'img/button_opsi.png'?>" width="5.75%" height="5.75%"/></a></br>
    <br><a href="A<?= $soalno ?>.php?answer=B"><img src="<?= $jawabanKu == 'B' ? 'img/button_opsi2.png' : 'img/button_opsi.png'?>" width="5.75%" height="5.75%"/></a></br>
    <p><a href="A<?= $soalno ?>.php?answer=C"><img src="<?= $jawabanKu == 'C' ? 'img/button_opsi2.png' : 'img/button_opsi.png'?>" width="5.75%" height="5.75%"/></a></p>
    <p><a href="A<?= $soalno ?>.php?answer=D"><img src="<?= $jawabanKu == 'D' ? 'img/button_opsi2.png' : 'img/button_opsi.png'?>" width="5.75%" height="5.75%"/></a></p>
  </div>
  <div id="wadahButton">
    <a href="A<?= $soalno-1 ?>.php" id="btnBack"><img src="img/ssebelum.png"  width="200" height="50" border="0"/></a>
    <a href="A<?= $soalno+1 ?>.php" id="btnNext"><img src="img/slanjut.png"  width="200" height="50" border="0"/></a>
  </div>
</body>
</html>