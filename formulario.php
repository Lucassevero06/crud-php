<?php

    if(isset($_POST['submit'])) {

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc) VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc')");

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
            width: 35%;
        }

        .boxImg {
            width: 50%;
        }

        .boxImg img {
            width: 100%;
        }

        .boxEspacamento {
            height: 80vh;
            width: 1px;
            background-color: white;
        }
        
        .boxRadio {
            text-align: left;
        }

        .boxData {
            text-align: left;
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
            padding: 7px;
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
                    <input placeholder="Seu nome" type="text" name="nome" id="nome" class="inputUser" required>
                </div>
                <br>
                <div class="inputBox">
                    <input placeholder="Sua senha" type="password" name="senha" id="senha" class="inputUser" required>
                </div>
                <br>
                <div class="inputBox">
                    <input placeholder="example@gmail.com" type="text" name="email" id="email" class="inputUser" required>
                </div>
                <br>
                <div class="inputBox">
                    <input placeholder="69 99999-9999" type="tel" name="telefone" id="telefone" class="inputUser" required>
                </div>
                <div class="boxRadio">
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
                    <div class="boxRadio">
                        <label for="data_nascimento"><strong>Data de Nascimento</strong></label>
                        <input type="date" name="data_nascimento" id="data_nascimento" class="date-picker" required>
                    </div>
                <br>
                <input type="submit" name="submit" id="submit" value="Enviar">
            </form>
            <p>Já tem uma conta? <a href="login.php">Clique aqui</a></p>
        </div>
        <div class="boxEspacamento">

        </div>
        <div class="boxImg">
            <img src="./undraw_hello_re_3evm.svg" alt="">
        </div>
    </div>
</body>
</html>