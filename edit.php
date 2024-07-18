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
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgb(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 350px;
        }
        fieldset {
            border: 3px solid dodgerblue;
        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
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
            font-size: 12px;
            color: dodgerblue;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #update {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }

        #update:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
<a href="sistema.php">Voltar</a>
<div class="box">
        <form action="saveEdit.php" method="post">
            <fieldset>
                <legend><strong>Editar Usuario</strong></legend>
                <br>
                <div class="inputBox">
                    <input value="<?= $nome ?>" type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input value="<?= $senha ?>" type="text" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input value="<?= $email ?>" type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input value="<?= $telefone ?>" type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input <?= $sexo == 'feminino' ? 'checked' : '' ?> type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input <?= $sexo == 'masculino' ? 'checked' : '' ?> type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input <?= $sexo == 'outro' ? 'checked' : '' ?> type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br>
                <br>
                    <label for="data_nascimento"><strong>Data de Nascimento</strong></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="<?= $data_nasc ?>" required>
                <br>
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="update" id="update" value="Enviar">
            </fieldset>
        </form>
    </div>
</body>
</html>