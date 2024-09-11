<!DOCTYPE html>
<?php
include("conexao.php");

if(isset($_POST['nome']) | isset($_POST['senha'])){
    if(strlen($_POST['nome']) == 0){
        echo "Preencha seu user";
    } else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    } else{

        $user = $conn -> real_escape_string($_POST['nome']);
        $senha = $conn -> real_escape_string($_POST['senha']);

        $sql = "SELECT * FROM pacientes WHERE pac_nome = '$user' AND pac_senha = '$senha'";
        $sql_query = $conn-> query($sql) or die("Falha na execução do código SQL: ". $conn->error);

        $af = $sql_query->num_rows;

        if($af == 1){
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['pac_id'];
            $_SESSION['nome'] = $usuario['pac_nome'];
            
            header("Location: inicialpac.php");
        } else{
            echo "Falha ao logar! User ou senha incorretos";
        }

    }
}
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
    header{
        text-align: center;
    }
    main{
        font-size: 15pt;
        align-items: center;
        display: flex;
        justify-content: center;
        text-align: center;
        
    }
    .blo{
        width: 175px;
        height: 30px;
        top: 2%;
    }
    .inlogin{
        height: 30px;
        border-radius: 10px;
    }
    </style>
</head>
<body>
    <header><h1>Bem vindo, Paciente!</h1></header>
    <nav></nav>
    
    <main>
    <form method="POST" action="">
    Faça seu login <br>
    <input type="text" name="nome" placeholder="Seu nome" class="inlogin"> <br>
    <input type="password" name="senha" class="inlogin"> <br> <br>
    <input type="submit" value="Entrar" class="blo">
    <p>Não possui cadastro? Cadastre-se <a href="cadpac.php">aqui</a></p>
    </form>
    </main>

    <footer><h3>Desenvolvido por TEAM6©</h3></footer>
</body>
</html>