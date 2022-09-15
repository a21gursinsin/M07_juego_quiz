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
      if(file_exists('quiz.json'))
      {
        $filename = 'quiz.json';
        $data = file_get_contents($filename); 
        $info = json_decode($data);
      }
      
  ?>
      <h1><?=$info[11]->question;?></h1>
</body>
</html>