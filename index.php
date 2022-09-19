<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    if(file_exists('Quiz.json')){
        $filename = 'Quiz.json';
        $data = file_get_contents($filename); 
        $info = json_decode($data);
    }

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
      echo('hola');
  ?>
	<div class="container">
		<div id="quiz">
			<h1>Quiz</h1>
			<hr style="margin-bottom: 20px">
      <?=$i=0;?>
      <p id="question"><?=$info[$listPreguntas[$i]]->question;?></p>
      <form class="button-grp" action="valid.php" method="get" >
        <input type ="hidden" name="id_pregunta" value="<?=$i?>"></input>
        <?php 
          for ($i = 0; $i <= 3; $i++) {?>
            <input type ="submit" id="btn0" name="id_answer" value="<?=$i+1 .". ". $info[$listPreguntas[$i]]->answers[$i];?>"></input>
        <?php  
          }?>  
      </form>
			
			<hr style="margin-top: 50px">
			
			<footer>
				<p id="progress">Question x of 10</p>
			</footer>
		</div>
	</div>
</body>
</html>
