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
      if(file_exists('./Quiz.json'))
      {
        $filename = 'Quiz.json';
        $data = file_get_contents($filename); 
        $users = json_decode($data);
      }
  ?>
      <!-- QUIZ ONE -->
  <section class="section-1" id="section-1">
      <main>
          <div class="text-container">
              <h3>M07 Servidor Quiz</h3>
              <p>QUESTION 1 OF 10</p>
              <p>What does CSS stand for?</p>
          </div>
          <form>
              <div class="quiz-options">
                  <input type="radio" class="input-radio one-a jshdgdgwgdwfdfwdwjfdjwwdwdco" id="one-a" name="yes-1" required>
                  <label class="radio-label jsjwjdwjdwjdwco" for="one-a">
                      <span class="alphabet">A</span> Cascading Style Sheets <img class="icon jdsjkefkefkefefexco" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588518387/jdsjkefkefkefefexco.svg" alt="">
                  </label>
                  <input type="radio" class="input-radio one-b jshdgdgwgdwfdfwdwjfdjwwdwdin" id="one-b" name="yes-1">
                  <label class="radio-label jsjwjdwjdwjdwin" for="one-b">
                      <span class="alphabet">B</span> Creative Screen Styling <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                  </label>
                  <input type="radio" class="input-radio one-c jshdgdgwgdwfdfwdwjfdjwwdwdin" id="one-c" name="yes-1">
                  <label class="radio-label jsjwjdwjdwjdwin" for="one-c">
                      <span class="alphabet">C</span> Cascading Style Screen <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                  </label>
              </div>
              <a id="btn" type="submit" onclick="window.location.href='#section-2'">Next</a>
          </form>
      </main>
  </section>
  <!-- QUIZ TWO -->
  <section class=" section-2" id="section-2">
      <main>
          <div class="text-container">
              <h3>Pure CSS Quiz</h3>
              <p>QUESTION 2 OF 5</p>
              <p>To specify the transparency of an element, you can use?</p>
          </div>
          <form>
              <div class="quiz-options">
                  <input type="radio" class="input-radio two-a jshdgdgwgdwfdfwdwjfdjwwdwdin" id="two-a" name="no-2" required="">
                  <label class="radio-label jsjwjdwjdwjdwin" for="two-a">
                      <span class="alphabet">A</span> trans-parency <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                  </label>
                  <input type="radio" class="input-radio two-b jshdgdgwgdwfdfwdwjfdjwwdwdin" id="two-b" name="no-2" required="">
                  <label class="radio-label jsjwjdwjdwjdwin" for="two-b">
                      <span class="alphabet">B</span> color: 0; <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                  </label>
                  <input type="radio" class="input-radio two-c jshdgdgwgdwfdfwdwjfdjwwdwdco" id="two-c" name="no-2" required="">
                  <label class="radio-label jsjwjdwjdwjdwco" for="two-c">
                      <span class="alphabet">C</span> opacity <img class="icon jdsjkefkefkefefexco" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588518387/jdsjkefkefkefefexco.svg">
                  </label>
              </div>
              <a id="btn" type="submit" onclick="window.location.href='#section-3'">Next</a>
          </form>
      </main>
  </section>
  <!-- QUIZ THREE -->
  <section class="section-3" id="section-3">
      <main>
          <div class="text-container">
              <h3>Pure CSS Quiz</h3>
              <p>QUESTION 3 OF 5</p>
              <p>which of these is not a category of CSS selectors?</p>
          </div>
          <form>
              <div class="quiz-options">
                  <input type="radio" class="input-radio three-a jshdgdgwgdwfdfwdwjfdjwwdwdin" id="three-a" name="no-3" required="">
                  <label class="radio-label jsjwjdwjdwjdwin" for="three-a">
                      <span class="alphabet">A</span> Pseudo-class selectors <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                  </label>
                  <input type="radio" class="input-radio three-b jshdgdgwgdwfdfwdwjfdjwwdwdin" id="three-b" name="no-3" required="">
                  <label class="radio-label jsjwjdwjdwjdwin" for="three-b">
                      <span class="alphabet">B</span> Simple selectors <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                  </label>
                  <input type="radio" class="input-radio three-c jshdgdgwgdwfdfwdwjfdjwwdwdco" id="three-c" name="no-3" required="">
                  <label class="radio-label jsjwjdwjdwjdwco" for="three-c">
                      <span class="alphabet">C</span> Layout-selector <img class="icon jdsjkefkefkefefexco" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588518387/jdsjkefkefkefefexco.svg">
                  </label>
              </div>
              <a id="btn" type="submit" onclick="window.location.href='#section-4'">Next</a>
          </form>
      </main>
  </section>
  <!-- QUIZ FOUR -->
  <section class="section-4" id="section-4">
      <main>
          <div class="text-container">
              <h3>Pure CSS Quiz</h3>
              <p>QUESTION 4 OF 5</p>
              <p>The browser vertical scrollbar can be hidden by using which of the following property?</p>
          </div>
          <form>
              <div class="quiz-options">
                  <input type="radio" class="input-radio four-a jshdgdgwgdwfdfwdwjfdjwwdwdin" id="four-a" name="no-4" required="">
                  <label class="radio-label jsjwjdwjdwjdwin" for="four-a">
                      <span class="alphabet">A</span> scrollbar: disable; <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                  </label>
                  <input type="radio" class="input-radio four-b jshdgdgwgdwfdfwdwjfdjwwdwdco" id="four-b" name="no-4" required="">
                  <label class="radio-label jsjwjdwjdwjdwco" for="four-b">
                      <span class="alphabet">B</span> overflow-y: hidden; <img class="icon jdsjkefkefkefefexco" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588518387/jdsjkefkefkefefexco.svg">
                  </label>
                  <input type="radio" class="input-radio four-c jshdgdgwgdwfdfwdwjfdjwwdwdin" id="four-c" name="no-4" required="">
                  <label class="radio-label jsjwjdwjdwjdwin" for="four-c">
                      <span class="alphabet">C</span> overflow-x: hidden <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                  </label>
              </div>
              <a id="btn" type="submit" onclick="window.location.href='#section-5'">Next</a>
          </form>
      </main>
  </section>
  <!-- QUIZ FIVE -->
  <section class="section-5" id="section-5">
      <main>
          <div class="text-container">
              <h3>Pure CSS Quiz</h3>
              <p>QUESTION 5 OF 5</p>
              <p>What does HTML stand for?</p>
          </div>
          <form>
              <div class="quiz-options">
                  <input type="radio" class="input-radio five-a jshdgdgwgdwfdfwdwjfdjwwdwdco" id="five-a" name="yes-5" required>
                  <label class="radio-label jsjwjdwjdwjdwco" for="five-a">
                      <span class="alphabet">A</span> Hypertext Markup Language <img class="icon jdsjkefkefkefefexco" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588518387/jdsjkefkefkefefexco.svg" alt="">
                  </label>
                  <input type="radio" class="input-radio five-b jshdgdgwgdwfdfwdwjfdjwwdwdin" id="five-b" name="yes-5">
                  <label class="radio-label jsjwjdwjdwjdwin" for="five-b">
                      <span class="alphabet">B</span> Hypertext Transform Markup Language <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                  </label>
                  <input type="radio" class="input-radio five-c jshdgdgwgdwfdfwdwjfdjwwdwdin" id="five-c" name="yes-5">
                  <label class="radio-label jsjwjdwjdwjdwin" for="five-c">
                      <span class="alphabet">C</span> Hypertext Machine Language <img class="icon jfdedgwfzexf4hjin" src="https://res.cloudinary.com/dvhndpbun/image/upload/v1588517753/jfdedgwfzexf4hjin.svg">
                  </label>
              </div>
              <a id="btn" type="submit" onclick="window.location.href='#game-over'">Next</a>
          </form>
      </main>
      <!-- SCORE COUNTER -->
  </section>
  <div class="score-counter">
      <p class="score-text">CORRECT:</p>
  </div>
  <!-- GAME OVER PAGE -->
  <section id="game-over">
      <div class="game-over-content">
          <div class="over-text-cont">
              <h1 data-heading="Game Over">Game Over</h1>
              <h2>Total Score:</h2>
              <a id="btn" type="submit" onclick="window.location.href='#refresh'">Play Again</a>
          </div>
      </div>
  </section>
  <!-- REFRESH PAGE SECTION -->
  <section id="refresh">
      <div class="refresh-content">
          <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 341.12 341.33">
              <defs>
                  <style>
                      .cls-1 {
                          fill: #fff;
                      }
                  </style>
              </defs>
              <title>multimedia2</title>
              <path class="cls-1" d="M341.23,149.33V0L291.09,50.13A169.56,169.56,0,0,0,170.56,0C76.27,0,.11,76.37.11,170.67S76.27,341.33,170.56,341.33c79.47,0,146-54.4,164.91-128H291.09A127.94,127.94,0,1,1,170.56,42.67c35.31,0,67,14.72,90.13,37.86l-68.8,68.8Z" transform="translate(-0.11)" />
          </svg>
          <h2>Refresh/Reload this page to continue</h2>
      </div>
  </section>
</body>
</html>