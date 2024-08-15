<?php
    session_start();

    unset($_SESSION['resposta']);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(!empty($_POST['edtnome'])&& isset($_POST['edtnome'])){
            $_SESSION['nome'] = $_POST['edtnome'];
            header('Location: pagina1.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <style>
        input{
            visibility: inherit !important;
        }
        body {
            background-color: rgb(128, 128, 128);
        }
    </style>
    <link rel="stylesheet" href="estilo/style.css">
</head>

<body>
    <div id="nome">
        <form action="" method="post">
            <h1>Qual o seu nome?</h1>
            <input type="text" name="edtnome" id="edtnome" placeholder="Digite seu nome" required>
            <input type="submit" id="btnEnviar" value="Enviar">
        </form>
    </div>
    <script>
        const objeto = [...document.querySelector('#nome form').children]
        objeto.map((el) => {
            el.style.animation = " object 1.5s linear both";
        })
        console.log(objeto[2].offsetParent);
    </script>
</body >
</html >