<?php
session_start();
  if(isset($_POST['resposta'])){
    if (!empty($_POST['resposta'] && $_POST['resposta'] == "certa")) {
      $_SESSION['resposta'] += 1;
  }else{
      $_SESSION['resposta'] += 0;
  }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz</title>
    <link rel="stylesheet" href="estilo/style.css" />
  </head>
  <style>
    .dificul div {
      width: 30%;
      height: 100%;
      text-align: center;
      border-radius: 10px;
      background-color: rgb(0, 255, 0);
    }
    .dificul div::before{
      content: "FÁCIL";
      top: 0;
      font-size: 10px;
      position: absolute;
      color: rgb(0, 0, 0);
    }
  </style>
  <body>
    <!-- <h1>QuizName</h1> -->
    <div class="quadro">
      <div class="dificul">
        <div></div>
      </div>

      <h2>Qual nome desse local?</h2>

      <img src="img/locais/big-bang.jfif" alt="">

      <form method="post">
        <div class="resposta">
          <input type="radio" name="resposta" value="certo" />
          <label for="resposta">Big-Bang</label>
        </div>

        <div class="resposta" id="certo">
          <input type="radio" name="resposta" value="errado" />
          <label for="resposta">Big Ben</label>
        </div>

        <div class="resposta">
          <input type="radio" name="resposta" value="errado" />
          <label for="resposta">Relógio Gigante</label>
        </div>

        <div id="timer">
          <div></div>
          <p></p>
        </div>
      </form>
    </div>
    <script src="script.js"></script>
  </body>
</html>
