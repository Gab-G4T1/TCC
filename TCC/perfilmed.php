<?php

include("conexao.php");
if(!isset($_SESSION)){
    session_start();
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
    .con1{
        width: 80%;
        height: 30%;
        margin-left: 7.5%;
        color: black;
        background-color: lightgray;
    }
    header{
        text-align: center;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $name = $_SESSION['nome'];

    include("conexao.php");

    $sql = "SELECT * FROM medico WHERE med_nome = $name";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){

        }
    }
    

?>
<header><h1>Meu Perfil</h1></header>
<nav><div class="separar"></div></nav>
<main>
<div class="con1" style="font-size: 15pt; text-align: center; "><?php echo $_SESSION['nome'] ;  ?></div>
</main>
<footer></footer>
</body>
</html>