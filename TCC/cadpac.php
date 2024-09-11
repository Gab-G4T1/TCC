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
    <header><h1>Cadastro de Paciente</h1></header>
    <nav><h2></h2><div class="separar"></div></nav>
    <main>
    <form method="POST" action="cadpac.php">
        <table>
            <tr><td>Nome:</td><td><input type="text" name="nome" required></td></tr>
            <tr><td>Sobrenome:</td><td><input type="text" name="sobrenome" required></td></tr>
            <tr><td>Senha:</td><td><input type="password" name="senha" required></td></tr>
            <tr><td>CPF:</td><td><input type="text" name="cpf" required></td></tr>
            <tr><td>RG:</td><td><input type="text" name="rg" required></td></tr>
            <tr><td>Data de Nascimento:</td><td><input type="date" name="nasc" required></td></tr>
            <tr><td>Alergias:</td><td><textarea name="alergia" id="alergia" cols="30" rows="10"></textarea></td></tr>
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

            if(isset($_POST["sobrenome"])){
                $sobrenome = $_POST["sobrenome"];
            }
            else{
                $sobrenome = null;
            }

            if(isset($_POST["senha"])){
                $passtest = $_POST["senha"];
            }
            else{
                $passtest = null;
            }

            if(isset($_POST["cpf"])){
                $cpf = $_POST["cpf"];
            }
            else{
                $cpf = null;
            }

            if(isset($_POST["rg"])){
                $rg = $_POST["rg"];
            }
            else{
                $rg = null;
            }

            if(isset($_POST["nasc"])){
                $nascimento = $_POST["nasc"];
            }
            else{
                $nascimento = null;
            }

            if(isset($_POST["alergia"])){
                $alergia = $_POST["alergia"];
            }
            else{
                $alergia = "Nenhuma";
            }

            if($nome != null && $sobrenome != null && $passtest != null && $cpf != null && $rg != null && $nascimento != null && $alergia != null ){
                include_once("conexao.php");
                $sql = "INSERT INTO pacientes (pac_id, pac_nome, pac_sobrenome, pac_senha, pac_cpf, pac_rg, pac_nasc, pac_alergia) VALUES (' ', '$nome', '$sobrenome', '$passtest', '$cpf', '$rg', '$nascimento', '$alergia')";
                if($conn->query($sql) === TRUE){
                    echo "<p style='margin-left: 70%'>Dados Cadastrados: <br>Nome: $nome 
                    <br>Sobrenome: $sobrenome 
                    <br>Senha: $passtest 
                    <br>CPF: $cpf 
                    <br>RG: $rg 
                    <br>Data de Nascimento: $nascimento 
                    <br>Alergias: $alergia </p>";
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