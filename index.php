<?php
    session_start();
    if($_SERVER['request_method']==='POST'){
        if(!empty($_POST['resposta']&&$_POST['resposta']=="Resposta1")){
            $_SESSION['resposta1'] = $_POST['resposta'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <h1>QuizName</h1>
    <form action="index.php" method="post">
        <input type="radio" name="resposta" id="resposta1" value="errada">
        <label for="resposta1">Resposta1</label>
        <input type="radio" name="resposta" id="respost2" value="certa">
        <label for="resposta2">Resposta2</label>
        <input type="radio" name="resposta" id="resposta3" value="errada">
        <label for="resposta3">Resposta3</label>
    </form>
</body>
</html>