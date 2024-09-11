<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <style>
    header{
        text-align: center;
    }
    </style>
</head>
<body>
    <img src="SAM.jpg" alt="logotipo" style="justify-content: left; align-items: left; display: flex; width: 115px; height: 115px; ">
    <header><h1>Cadastro de Médico</h1></header>
    <nav><h2></h2><div class="separar"></div></nav>
    <main>
    <form method="POST" action="cadmed.php">
        <table>
            <tr><td>Nome:</td><td><input type="text" name="nome" required></td></tr>
            <tr><td>Senha:</td><td><input type="password" name="senha" required></td></tr>
            <tr><td><input type="reset" value="Apagar"></td><td><input type="submit" value="Enviar"></td></tr>
        </table>
        </form>

    </main>
    <footer><h3>Desenvolvido por TEAM6©</h3></footer>

    <?php
            if(isset($_POST["nome"])){
                $nome = $_POST["nome"];
            }
            else{
                $nome = null;
            }

            if(isset($_POST["senha"])){
                $passtest = $_POST["senha"];
            }
            else{
                $passtest = null;
            }

            if($nome != null  && $passtest != null){
                include_once("conexao.php");
                $sql = "INSERT INTO enfermeiros (enfer_id, enfer_nome, enfer_senha ) VALUES (' ', '$nome', '$passtest')";
                if($conn->query($sql) === TRUE){
                    echo "<p style='margin-left: 70%'>Dados Cadastrados: <br>Nome: $nome
                    <br>Senha: $passtest 
                    <br>Especialização: $espe 
                    <br>Data de Nascimento: $nascimento  </p>";
                }
                else{
                    echo"Erro: ".$sql. "<br>".$conn->error;
                }
                
                }
                else{
                    echo"<p style='margin-left: 70%'>Preencha todos os campos!</p>";
                }

            ?>
</body>
</html>