<?php
$Npreguntas = $_GET["Npreguntas"];
function alterarPreguntas($Npreguntas)
{
  $listPreguntas = array();
  for ($i = 0; $i <= $Npreguntas; $i++) {
    $n = rand(0, 11);
    if (in_array($n, $listPreguntas)) {
      $i--;
    } else {
      array_push($listPreguntas, $n);
    }
  }
  return $listPreguntas;
}
$listPreguntas = alterarPreguntas($Npreguntas);

?>
<script>
  fetch('http://localhost/gur/M07_JUEGO_QUIZ/Quiz.json')
    .then(response => response.json())
    .then(data => datos = data);
</script>


<script>
  window.location = "question.php";
</script>