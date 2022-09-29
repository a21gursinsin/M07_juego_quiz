
    <?php
    $data = file_get_contents('./Quiz.json');
    $info = json_decode($data);
    session_start();
    $listPreguntas = $_SESSION['listPreguntas'];
    $jugada = json_decode($_POST["dades"]);
    echo $jugada;
    ?>
