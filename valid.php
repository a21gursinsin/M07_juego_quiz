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
      $filename = 'Quiz.json';
      $data = file_get_contents($filename); 
      $info = json_decode($data);
  
      $id_answer = $_GET["id_answer"];
      $id_pregunta = $_GET["id_pregunta"];
      $id = substr($id_answer, 0,1);
  ?>
  <button type='button' onclick='location.reload()'>Reload</button>
	<div class="container">
		<div id="quiz">
			<h1>Quiz</h1>
			
			<hr style="margin-bottom: 20px">

			<p id="question"><?=$info[$id_pregunta]->question;?></p>
			
            <p id="question"><?php
                if ($info[$id_pregunta]->correctIndex == $id) {
                    echo "Correcto! =>" . $id;
                } else {
                    echo "No es correcto ! =>" . $id;
                    echo "La respuesta correcta és: " . $info[$id_pregunta]->correctIndex;
                }?></p>

			<hr style="margin-top: 50px">
			
			<footer>
				<p id="progress">Question x of y</p>
			</footer>
		</div>
	</div>
</body>
</html>