<?php
    $Npreguntas = $_GET["Npreguntas"];
    echo $Npreguntas;
    function alterarPreguntas($Npreguntas) {
      $listPreguntas=array();
      for ($i = 0; $i <= $Npreguntas; $i++) {
        $n=rand(0, 11); 
        if(in_array($n, $listPreguntas)){
          $i--;
        }else {
          array_push($listPreguntas,$n);
        }
      }
      return $listPreguntas;
    }
    $listPreguntas=alterarPreguntas($Npreguntas);
  ?>


  <script>window.location="question.php";</script>