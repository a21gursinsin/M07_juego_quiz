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
        session_start();
        $listPreguntas= $_SESSION['listPreguntas'];
        $id_answer = $_GET["id_answer"];
        $id_pregunta = $_GET["id_pregunta"];
        $id = substr($id_answer, 0,1)-1;
        $cont = $_SESSION['cont'];
    ?>
	<div class="container">
		<div id="quiz">
			<h1>Quiz</h1>
			
			<hr style="margin-bottom: 20px">
            <?php if($id_pregunta<9) { ?>
                <p id="question"><?=$info[$listPreguntas[$id_pregunta]]->question;?></p>
                
                <p id="question"><?php
                    if ($info[$listPreguntas[$id_pregunta]]->correctIndex == $id) {
                        echo "Correcto! " . $info[$listPreguntas[$id_pregunta]]->answers[$id ];
                        $cont++;
                    } else {
                        echo "No es correcto ! =>" . $id+1;
                    }
                    $_SESSION['j']=$id_pregunta+1;
                ?>
                </p>
                <hr style="margin-top: 100px">
                <footer>
                    <p id="progress">Question <?=$id_pregunta+1?> of 10</p>
                </footer>
                    <h1><a href="question.php">Next Question</a></h1>
            <?php }else {?>
                <!--p id="question"></!p-->
                <h1><a href="index.php">Repeat</a></h1>
            <?php }?>
        </div>
	</div>
</body>
</html>