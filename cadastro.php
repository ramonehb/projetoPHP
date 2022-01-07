<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IfElse</title>
</head>

<body>
    <h2 class="title">Digite os nomes</h2>

    <form action="controllers/validaCadastro.php" method="POST">
        <label>NOME</label>
        <input type="text" name="nome1"><br><br>
        <label>SALARIO</label>
        <input type="number" name="salario1" min="0" required><br><br>

        <label>NOME</label>
        <input type="text" name="nome2"><br><br>
        <label>SALARIO</label>
        <input type="number" name="salario2" min="0" required><br><br>

        <label>NOME</label>
        <input type="text" name="nome3"><br><br>
        <label>SALARIO</label>
        <input type="number" name="salario3" min="0" required><br><br>
        <button>Cadastrar</button></br></br>

    </form>
    <a href="controllers/validaLogin.php"><button>Voltar</button></a>
</body>

</html>