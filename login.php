<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: rgb(0,255,207);
            background: linear-gradient(243deg, rgba(0,255,207,1) 20%, rgba(20,255,0,1) 100%);
        }
        
        .box {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .boxForm {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            width: 400px;
            text-align: center;
        }

        .boxImg {
            width: 50%;
            border-right: 1px solid white;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 90%;
        }

        .inputSubmit {
            background-color: rgba(20,255,0,1);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-weight: bold;
            font-size: 15px;
        }

        .inputSubmit:hover {
            background-color: rgba(0,255,207,1);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="boxImg">
            <img src="./undraw_mobile_user_re_xta4.svg" alt="Foto Login">
        </div>
        <div class="boxForm">
            <h1>Login</h1>
            <form action="testLogin.php" method="post">
                <input type="text" placeholder="Nome" name="email">
                <br>
                <br>
                <input type="password" placeholder="Senha" name="senha">
                <br>
                <br>
                <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            </form>
            <p>Ainda não tem uma conta? <a href="formulario.php">Clique aqui</a></p>
        </div>
    </div>
</body>
</html>