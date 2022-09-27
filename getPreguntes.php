<?php
    session_start();
    $_SESSION['listPreguntas']=$listPreguntas;
    function alterarPreguntas() {
      $listPreguntas=array();
      for ($i = 0; $i <= 9; $i++) {
        $n=rand(0, 11); 
        if(in_array($n, $listPreguntas)){
          $i--;
        }else {
          array_push($listPreguntas,$n);
        }
      }
      return $listPreguntas;
    }
    
    $listPreguntas=alterarPreguntas();

  ?>


  <script>window.location="question.php";</script>