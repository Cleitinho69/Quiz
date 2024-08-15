<?php
session_start();
    if (isset($_POST['resposta']) && !empty($_POST['resposta']) && $_POST['resposta'] == "certo") {
        $_SESSION['resposta'] += 1;
        header('location: pagina7.php');
    } else if (isset($_POST['resposta']) && !empty($_POST['resposta'])){
        header('location: pagina7.php');
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
      width: 50%;
      height: 100%;
      text-align: center;
      border-radius: 10px;
      background-color: orange;
    }
    .dificul div::before{
      content: "MÉDIO";
      top: 0;
      font-size: 10px;
      position: absolute;
      color: rgb(0, 0, 0);
    }
  </style>
  <body>
    <script>
      alert("apartir daqui serão cenários de animes");
    </script>
    <h1>Player: <?php echo $_SESSION['nome'];?></h1>
    <div class="quadro">
      <div class="dificul">
        <div></div>
      </div>

      <h2>Qual nome desse anime?</h2>

      <img src="img/animes/your_name.jfif" alt="">

      <form method="post">
        <div class="resposta" id="certo">
          <input type="radio" name="resposta" value="certo" />
          <label for="resposta">Your Name</label>
        </div>

        <div class="resposta">
          <input type="radio" name="resposta" value="errado" />
          <label for="resposta">Meu Tempo Com Você</label>
        </div>

        <div class="resposta">
          <input type="radio" name="resposta" value="errado" />
          <label for="resposta">Suzume</label>
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
