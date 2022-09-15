
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doument</title>
  </head>
  <body>
    <?php
      if(file_exists('quiz.json'))
      {
        $filename = 'quiz.json';
        $data = file_get_contents($filename); 
        $users = json_decode($data);
      }
    ?>
    <?php $pregunta = ($users[11]->question) ?>
    <p><?php echo ($pregunta) ?></p>
  </body>
  </html>