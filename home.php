<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: rgb(0,255,207);
            background: linear-gradient(243deg, rgba(0,255,207,1) 20%, rgba(20,255,0,1) 100%);
            text-align: center;
            color: white;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgb(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
        }

        a {
            text-decoration: none;
            color: white;
            border: 3px solid rgba(0,255,207,1);
            border-radius: 10px;
            padding: 10px;
        }

        a:hover {
            background-color: rgba(0,255,207,1);
        }

    </style>
</head>
<body>
    <h2>Sistema de login e cadastro de Usuarios</h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>
