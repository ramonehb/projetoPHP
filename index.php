<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre com seu usuário</title>
    <link rel="stylesheet" href="css/style.css">
    <style>

    </style>
</head>

<body>
    <div class="login">
        <h1>HRSolution</h1>
        <form action="../controllers/validaLogin.php" method="POST">
            <p>Usuário</p>
            <input type="text" name="user" required minlength="2" maxlength="15"><br><br>

            <p>Senha</p>
            <input type="password" name="password" required maxlength="15" minlength="2">

            <button>Entrar</button>
            <p><a href="">Esqueceu sua senha ?</a><br></p>
            <p><a href="cadastroConta.php">Ainda não possui uma conta?</a>
                <p>
        </form>
    </div>
</body>

</html>