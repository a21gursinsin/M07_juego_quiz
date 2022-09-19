<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
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
    
      session_start();
      $_SESSION['listPreguntas']=$listPreguntas;
      $_SESSION['j']=0;
      $_SESSION['cont']=0;

  ?>


  <script>window.location="question.php";</script>
</body>
</html>
