<?php
      if(file_exists('Quiz.json'))
      {
        $filename = 'Quiz.json';
        $data = file_get_contents($filename); 
        $users = json_decode($data);
        echo ('hola ');
      }else{echo ( 'hola mundo');};
      var_dump($users[2]);
  ?>