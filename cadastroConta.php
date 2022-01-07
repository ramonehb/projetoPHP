<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 class="titleBanpar">Bem vindo ao ERP HRSolution</h1>

    <form action="controllers/validaCadastroUser.php" method="POST">
        <label>Usuario</label>
        <input type="text" name="usuario" required minlength="3" maxlength="20"><br><br>

        <label>E-mail</label>
        <input type="email" required="required" class="input-text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" /><br><br>

        <label>Senha</label>
        <input type="password" name="senha" required minlength="3" maxlength="15"><br><br>

        <label>Confirme sua senha</label>
        <input type="password" name="senhaConfirme" required minlength="2" maxlength="15"><br><br>

        <button type="submit">Efetuar cadastro</button>
    </form>
</body>

</html>