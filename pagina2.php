<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['resposta'] && $_POST['resposta'] == "certa")) {
        $_SESSION['resposta'] = 1;
    }else{
        $_SESSION['resposta'] = 0;
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
  <body>
    <h1>QuizName</h1>
    <div class="quadro">
      <h2>Pergunta?</h2>

      <form method="post">

        <div class="resposta">
          <input type="radio" name="resposta" value="errado" />
          <label for="resposta">Resposta1</label>
        </div>

        <div class="resposta" id="certo">
          <input type="radio" name="resposta" value="certo"/>
          <label for="resposta">Resposta1</label>
        </div>

        <div class="resposta">
          <input type="radio" name="resposta" value="errado" />
          <label for="resposta">Resposta1</label>
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
