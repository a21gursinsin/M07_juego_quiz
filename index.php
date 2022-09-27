<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <div id="form">
    <div class="form">
      <h1 style="font-size: 45px; text-transform:uppercase"> Quiz </h1>
      <label id="name">Nom:</label>
      <input type="text" id="usuario"></input>
      <label>Quantes preguntes vols?</label>
      <form action="./getPreguntes.php" method="get">
        <select id="pregunta" name ="Npreguntas">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          </select>
          <input type="submit" value="Jugar" class="button"></input>
        </form>
    </div>
  </div>

</body>

</html>