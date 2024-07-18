<?php

    if(!empty($_GET['id'])) {

        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id = $id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0) {

            while($user_data = mysqli_fetch_assoc($result)) {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
            }
        } else {
            header('Location: sistema.php');
        }
    } else {
        header('Location: sistema.php');
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

        #update {
            background-color:  rgba(20,255,0,1);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-weight: bold;
            font-size: 15px;
        }

        #update:hover {
            background-color: rgba(0,255,207,1);
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="box">
        <div class="boxForm">
            <form action="saveEdit.php" method="post">
                <br>
                <div class="inputBox">
                    <input value="<?= $nome; ?>" placeholder="Seu nome" type="text" name="nome" id="nome" class="inputUser" required>
                </div>
                <br>
                <div class="inputBox">
                    <input value="<?= $senha; ?>" placeholder="Sua senha" type="password" name="senha" id="senha" class="inputUser" required>
                </div>
                <br>
                <div class="inputBox">
                    <input value="<?= $email; ?>" placeholder="example@gmail.com" type="text" name="email" id="email" class="inputUser" required>
                </div>
                <br>
                <div class="inputBox">
                    <input value="<?= $telefone; ?>" placeholder="69 99999-9999" type="tel" name="telefone" id="telefone" class="inputUser" required>
                </div>
                <div class="boxRadio">
                    <p>Sexo:</p>

                    <input <?= $sexo == 'feminino' ? 'checked' : '' ?>  type="radio" name="genero" id="feminino" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input <?= $sexo == 'masculino' ? 'checked' : '' ?> type="radio" name="genero" id="masculino" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input <?= $sexo == 'outro' ? 'checked' : '' ?> type="radio" name="genero" id="outro" value="outro" required>
                    <label for="outro">Outro</label>
                </div>
                <br>
                    <div class="boxRadio">
                        <label for="data_nascimento"><strong>Data de Nascimento</strong></label>
                        <input value="<?= $data_nasc; ?>" type="date" name="data_nascimento" id="data_nascimento" class="date-picker" required>
                    </div>
                <br>
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="update" id="update" value="Enviar">
            </form>
            <p>Voltar à página inicial? <a href="sistema.php">Clique aqui</a></p>
        </div>
    </div>
</body>
</html>