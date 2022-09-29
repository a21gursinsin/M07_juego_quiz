
    <?php
    $data = file_get_contents('./Quiz.json');
    $info = json_decode($data);
    session_start();
    $listPreguntas = $_SESSION['listPreguntas'];
    $npreguntas = $_SESSION['npreguntas'];
    echo json_encode($listPreguntas);
    ?>
