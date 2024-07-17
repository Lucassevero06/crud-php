<?php

    if(isset($_POST['submit'])) {

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: rgba(20,255,0,1) ;
            background: linear-gradient(243deg, rgba(20,255,0,1) 20%, rgba(0,255,207,1) 100%);
        }

        .box {
            height: 100vh;
            max-width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .boxForm {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
        }

        .boxImg {
            width: 50%;
            border-left: 1px solid white;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: black;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            padding: 5px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .3s;
        }

        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput {
            top: -20px;
            font-size: 15px;
            color: rgba(20,255,0,1);
        }

        .inputRadio {
            text-align: left;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-color:  rgba(20,255,0,1);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-weight: bold;
            font-size: 15px;
        }

        #submit:hover {
            background-color: rgba(0,255,207,1);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="boxForm">
            <form action="formulario.php" method="post">
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <div class="inputRadio">
                    <p>Sexo:</p>
                    <input type="radio" name="genero" id="feminino" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" name="genero" id="masculino" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" name="genero" id="outro" value="outro" required>
                    <label for="outro">Outro</label>
                </div>
                <br>
                <br>
                    <label for="data_nascimento"><strong>Data de Nascimento</strong></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="date-picker" required>
                <br>
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit" value="Enviar">
            </form>
            <p>Já tem uma conta? <a href="formulario.php">Clique aqui</a></p>
        </div>
        <div class="boxImg">
            <img src="./undraw_hello_re_3evm.svg" alt="">
        </div>
    </div>
</body>
</html>