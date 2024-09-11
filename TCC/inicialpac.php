<?php

if(!isset($_SESSION)){
    session_start();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="style.css">
    <style>
        header{
            text-align: center;
        }
        nav{
            color: red;
        }
        
    </style>
</head>
<body>
    <img src="SAM.jpg" alt="logotipo" style="justify-content: left; align-items: left; display: flex; width: 115px; height: 115px; ">
    <header><h1>Seja Bem Vindo, <?php echo $_SESSION['nome']; ?></h1></header>
    <nav><h4 style="text-align: center;">Escolha o tipo de agendamento</h4><div class="separar"></div></nav>
    <main>
        
                <div class="container">
                    <div class= "item">
                    <a href="consultas.php"><img src="icon1.png" alt="Agendamento" style="width: 300px; height: 300px;"></a>
                    <h4>Agendamento de consultas</h4>
                </div>
                <div>
                    <img src="icon2.png" alt="Exames" style="width: 300px; height: 300px;">
                    <h4>Agendamento de Exames</h4>
                </div>
                <div>
                    <img src="icon3.png" alt="Vacinas" style="width: 300px; height: 300px;">
                    <h4>Agendamento de Vacinas</h4>
                </div>
                <div class="item">
                    <img src="icon4.png" alt="Usuário" style= "width: 300px; height: 300px;">
                    <h4>Tela de Usuário</h4>
                </div>
                
                    
             
                
                    
                    
                
    </main>
</body>
</html>