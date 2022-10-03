<?php
    $data = file_get_contents('./Quiz.json');
    $info = json_decode($data);
    session_start();
    $listPreguntas = $_SESSION['listPreguntas'];
    $jugada = json_decode($_POST["dades"]);
    $cont =5;
    for($i = 0; $i < $jugada->nrespuestas; $i++){
        if($jugada->respuestas[$i] == $info[$listPreguntas[$i]]-> correctIndex) {
            $count++;
        }
    }

    echo json_encode($cont);
    die();
    ?>
