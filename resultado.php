<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body,html{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
        }
        #fundo{
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 470px;
            width: 350px;
            border-radius: 20px;
            box-shadow: 0px 10px 20px 10px rgb(134, 134, 134);
            font-size: 30px;
        }
        #fundo div{
            display: flex;
            width: 300px;
            align-items: center;
            border-radius: 20px;
            margin-bottom: 20px;
            border: 2px solid black;
        }
        #resultado{
            font-size: 30px;
            margin-left: 10px;
            transform: translateX(60px);
        }
        img{
            margin-left: 10px;
            width: 70px;
        }
        button{
            text-decoration: none;
            width: 300px;
            height: 40px;
            font-size: 20px;
            border-radius: 20px;
            margin-bottom: 10px;
            border: 1px solid black;
        }
        #tentar:hover{
            background-color: rgb(32, 146, 28);
            color: white;
            cursor: pointer;
        }
        #sair:hover{
            background-color: rgb(182, 5, 5);
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="fundo">
        <?php
            if($_SESSION['resposta']>=6){
                echo "<p>Parabéns: ".$_SESSION['nome']."</p>";
            }else{
                echo "<p>Tente novamente: ".$_SESSION['nome']."</p>";
            }
        ?>
         <div>
            <img src="img/acertos/acerto.png" alt="">
            <p id="resultado">
                <?php
                    echo $_SESSION['resposta'];
               ?>
            </p>
         </div>
         <div>
            <img src="img/acertos/erro.png" alt="">
            <p id="resultado">
                <?php
                    echo 11 - $_SESSION['resposta'];
               ?>
            </p>
         </div>
         <button id="tentar">Tentar de novo</button>
         <button id="sair">Sair</button>
    </div>
    <script>
        const tentar = document.querySelector('#tentar');
        const sair = document.querySelector('#sair');

        tentar.addEventListener('click', () => {
            window.location.replace('pagina1.php');
        });
        sair.addEventListener('click',()=>{
            window.location.replace('index.php');
        })
    </script>
</body>
</html>